<?php

namespace Laminas\Code\Generator\DocBlock\Tag;

use Laminas\Code\Generator\AbstractGenerator;
use Laminas\Code\Generator\DocBlock\TagManager;
use Laminas\Code\Reflection\DocBlock\Tag\TagInterface as ReflectionTagInterface;

class LicenseTag extends AbstractGenerator implements TagInterface
{
    /** @var string|null */
    protected $url;

    /** @var string|null */
    protected $licenseName;

    /**
     * @param string|null $url
     * @param string|null $licenseName
     */
    public function __construct($url = null, $licenseName = null)
    {
        if (! empty($url)) {
            $this->setUrl($url);
        }

        if (! empty($licenseName)) {
            $this->setLicenseName($licenseName);
        }
    }

    /**
     * @deprecated Deprecated in 2.3. Use TagManager::createTagFromReflection() instead
     *
     * @return ReturnTag
     */
    public static function fromReflection(ReflectionTagInterface $reflectionTag)
    {
        $tagManager = new TagManager();
        $tagManager->initializeDefaultTags();
        return $tagManager->createTagFromReflection($reflectionTag);
    }

    /** @return 'license' */
    public function getName()
    {
        return 'license';
    }

    /**
     * @param string $url
     * @return LicenseTag
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }

    /** @return string|null */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param  string $name
     * @return LicenseTag
     */
    public function setLicenseName($name)
    {
        $this->licenseName = $name;
        return $this;
    }

    /** @return string|null */
    public function getLicenseName()
    {
        return $this->licenseName;
    }

    /** @return non-empty-string */
    public function generate()
    {
        return '@license'
            . (! empty($this->url) ? ' ' . $this->url : '')
            . (! empty($this->licenseName) ? ' ' . $this->licenseName : '');
    }
}
