<?php

/*
 * This file is part of the Imagine package.
 *
 * (c) Bulat Shakirzyanov <mallluhuct@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Imagine\Image\Palette;

use Imagine\Exception\RuntimeException;
use Imagine\Image\Palette\Color\ColorInterface;
use Imagine\Image\Palette\Color\Gray as GrayColor;
use Imagine\Image\Profile;
use Imagine\Image\ProfileInterface;

/**
 * The grayscale palette.
 */
class Grayscale implements PaletteInterface
{
    /**
     * @var \Imagine\Image\Palette\ColorParser
     */
    private $parser;

    /**
     * @var \Imagine\Image\ProfileInterface|null
     */
    private $profile;

    /**
     * @var \Imagine\Image\Palette\Color\Gray[]
     */
    protected static $colors = array();

    public function __construct()
    {
        $this->parser = new ColorParser();
    }

    /**
     * {@inheritdoc}
     *
     * @see \Imagine\Image\Palette\PaletteInterface::name()
     */
    public function name()
    {
        return PaletteInterface::PALETTE_GRAYSCALE;
    }

    /**
     * {@inheritdoc}
     *
     * @see \Imagine\Image\Palette\PaletteInterface::pixelDefinition()
     */
    public function pixelDefinition()
    {
        return array(ColorInterface::COLOR_GRAY);
    }

    /**
     * {@inheritdoc}
     *
     * @see \Imagine\Image\Palette\PaletteInterface::supportsAlpha()
     */
    public function supportsAlpha()
    {
        return true;
    }

    /**
     * {@inheritdoc}
     *
     * @see \Imagine\Image\Palette\PaletteInterface::getChannelsMaxValue()
     */
    public function getChannelsMaxValue()
    {
        return 255;
    }

    /**
     * {@inheritdoc}
     *
     * @see \Imagine\Image\Palette\PaletteInterface::useProfile()
     */
    public function useProfile(ProfileInterface $profile)
    {
        $this->profile = $profile;

        return $this;
    }

    /**
     * {@inheritdoc}
     *
     * @see \Imagine\Image\Palette\PaletteInterface::profile()
     */
    public function profile()
    {
        if (!$this->profile) {
            $this->profile = Profile::fromPath(__DIR__ . '/../../resources/colormanagement.org/ISOcoated_v2_grey1c_bas.ICC');
        }

        return $this->profile;
    }

    /**
     * {@inheritdoc}
     *
     * @see \Imagine\Image\Palette\PaletteInterface::color()
     */
    public function color($color, $alpha = null)
    {
        if ($alpha === null) {
            $alpha = 0;
        }

        $color = $this->parser->parseToGrayscale($color);
        $index = sprintf('#%02x%02x%02x-%d', $color[0], $color[0], $color[0], $alpha);

        if (array_key_exists($index, static::$colors) === false) {
            static::$colors[$index] = new GrayColor($this, $color, $alpha);
        }

        return static::$colors[$index];
    }

    /**
     * {@inheritdoc}
     *
     * @see \Imagine\Image\Palette\PaletteInterface::blend()
     */
    public function blend(ColorInterface $color1, ColorInterface $color2, $amount)
    {
        if (!$color1 instanceof GrayColor || !$color2 instanceof GrayColor) {
            throw new RuntimeException('Grayscale palette can only blend Grayscale colors');
        }
        $max = $this->getChannelsMaxValue();

        return $this->color(
            array(
                (int) min($max, min($color1->getGray(), $color2->getGray()) + round(abs($color2->getGray() - $color1->getGray()) * $amount)),
            ),
            (int) min(100, min($color1->getAlpha(), $color2->getAlpha()) + round(abs($color2->getAlpha() - $color1->getAlpha()) * $amount))
        );
    }
}
