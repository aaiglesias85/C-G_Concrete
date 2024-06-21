<?php
/**
 * Html2Pdf Library - Tag class
 *
 * HTML => PDF converter
 * distributed under the OSL-3.0 License
 *
 * @package   Html2pdf
 * @author    Laurent MINGUET <webmaster@html2pdf.fr>
 * @copyright 2023 Laurent MINGUET
 */
namespace Spipu\Html2Pdf\Tag\Html;

/**
 * Tag Em
 */
class Em extends I
{
    /**
     * @inheritdoc
     */
    public function getName()
    {
        return 'em';
    }
}
