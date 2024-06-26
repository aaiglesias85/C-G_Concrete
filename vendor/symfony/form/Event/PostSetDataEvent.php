<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Form\Event;

use Symfony\Component\Form\FormEvent;

/**
 * This event is dispatched at the end of the Form::setData() method.
 *
 * It can be used to modify a form depending on the populated data (adding or
 * removing fields dynamically).
 */
final class PostSetDataEvent extends FormEvent
{
}
