<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Security\Http\RememberMe;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;

trigger_deprecation('symfony/security-http', '5.4', 'The "%s" interface is deprecated, use "%s" instead.', RememberMeServicesInterface::class, RememberMeHandlerInterface::class);

/**
 * Interface that needs to be implemented by classes which provide remember-me
 * capabilities.
 *
 * We provide two implementations out-of-the-box:
 * - TokenBasedRememberMeServices (does not require a TokenProvider)
 * - PersistentTokenBasedRememberMeServices (requires a TokenProvider)
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 *
 * @method logout(Request $request, Response $response, TokenInterface $token)
 *
 * @deprecated since Symfony 5.4, use {@see RememberMeHandlerInterface} instead
 */
interface RememberMeServicesInterface
{
    /**
     * This attribute name can be used by the implementation if it needs to set
     * a cookie on the Request when there is no actual Response, yet.
     */
    public const COOKIE_ATTR_NAME = '_security_remember_me_cookie';

    /**
     * This method will be called whenever the TokenStorage does not contain
     * a TokenInterface object and the framework wishes to provide an implementation
     * with an opportunity to authenticate the request using remember-me capabilities.
     *
     * No attempt whatsoever is made to determine whether the browser has requested
     * remember-me services or presented a valid cookie. Any and all such determinations
     * are left to the implementation of this method.
     *
     * If a browser has presented an unauthorised cookie for whatever reason,
     * make sure to throw an AuthenticationException as this will consequentially
     * result in a call to loginFail() and therefore an invalidation of the cookie.
     *
     * @return TokenInterface|null
     */
    public function autoLogin(Request $request);

    /**
     * Called whenever an interactive authentication attempt was made, but the
     * credentials supplied by the user were missing or otherwise invalid.
     *
     * This method needs to take care of invalidating the cookie.
     */
    public function loginFail(Request $request, \Exception $exception = null);

    /**
     * Called whenever an interactive authentication attempt is successful
     * (e.g. a form login).
     *
     * An implementation may always set a remember-me cookie in the Response,
     * although this is not recommended.
     *
     * Instead, implementations should typically look for a request parameter
     * (such as an HTTP POST parameter) that indicates the browser has explicitly
     * requested for the authentication to be remembered.
     */
    public function loginSuccess(Request $request, Response $response, TokenInterface $token);
}
