<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/storage.proto

namespace Google\Cloud\Dlp\V2;

use UnexpectedValueException;

/**
 * Definitions of file type groups to scan. New types will be added to this
 * list.
 *
 * Protobuf type <code>google.privacy.dlp.v2.FileType</code>
 */
class FileType
{
    /**
     * Includes all files.
     *
     * Generated from protobuf enum <code>FILE_TYPE_UNSPECIFIED = 0;</code>
     */
    const FILE_TYPE_UNSPECIFIED = 0;
    /**
     * Includes all file extensions not covered by another entry. Binary
     * scanning attempts to convert the content of the file to utf_8 to scan
     * the file.
     * If you wish to avoid this fall back, specify one or more of the other
     * FileType's in your storage scan.
     *
     * Generated from protobuf enum <code>BINARY_FILE = 1;</code>
     */
    const BINARY_FILE = 1;
    /**
     * Included file extensions:
     *   asc,asp, aspx, brf, c, cc,cfm, cgi, cpp, csv, cxx, c++, cs, css, dart,
     *   dat, dot, eml,, epbub, ged, go, h, hh, hpp, hxx, h++, hs, html, htm,
     *   mkd, markdown, m, ml, mli, perl, pl, plist, pm, php, phtml, pht,
     *   properties, py, pyw, rb, rbw, rs, rss,  rc, scala, sh, sql, swift, tex,
     *   shtml, shtm, xhtml, lhs, ics, ini, java, js, json, kix, kml, ocaml, md,
     *   txt, text, tsv, vb, vcard, vcs, wml, xcodeproj, xml, xsl, xsd, yml, yaml.
     *
     * Generated from protobuf enum <code>TEXT_FILE = 2;</code>
     */
    const TEXT_FILE = 2;
    /**
     * Included file extensions:
     *   bmp, gif, jpg, jpeg, jpe, png.
     * bytes_limit_per_file has no effect on image files.
     * Image inspection is restricted to 'global', 'us', 'asia', and 'europe'.
     *
     * Generated from protobuf enum <code>IMAGE = 3;</code>
     */
    const IMAGE = 3;
    /**
     * Word files >30 MB will be scanned as binary files.
     * Included file extensions:
     *   docx, dotx, docm, dotm
     *
     * Generated from protobuf enum <code>WORD = 5;</code>
     */
    const WORD = 5;
    /**
     * PDF files >30 MB will be scanned as binary files.
     * Included file extensions:
     *   pdf
     *
     * Generated from protobuf enum <code>PDF = 6;</code>
     */
    const PDF = 6;
    /**
     * Included file extensions:
     *   avro
     *
     * Generated from protobuf enum <code>AVRO = 7;</code>
     */
    const AVRO = 7;
    /**
     * Included file extensions:
     *   csv
     *
     * Generated from protobuf enum <code>CSV = 8;</code>
     */
    const CSV = 8;
    /**
     * Included file extensions:
     *   tsv
     *
     * Generated from protobuf enum <code>TSV = 9;</code>
     */
    const TSV = 9;
    /**
     * Powerpoint files >30 MB will be scanned as binary files.
     * Included file extensions:
     *   pptx, pptm, potx, potm, pot
     *
     * Generated from protobuf enum <code>POWERPOINT = 11;</code>
     */
    const POWERPOINT = 11;
    /**
     * Excel files >30 MB will be scanned as binary files.
     * Included file extensions:
     *   xlsx, xlsm, xltx, xltm
     *
     * Generated from protobuf enum <code>EXCEL = 12;</code>
     */
    const EXCEL = 12;

    private static $valueToName = [
        self::FILE_TYPE_UNSPECIFIED => 'FILE_TYPE_UNSPECIFIED',
        self::BINARY_FILE => 'BINARY_FILE',
        self::TEXT_FILE => 'TEXT_FILE',
        self::IMAGE => 'IMAGE',
        self::WORD => 'WORD',
        self::PDF => 'PDF',
        self::AVRO => 'AVRO',
        self::CSV => 'CSV',
        self::TSV => 'TSV',
        self::POWERPOINT => 'POWERPOINT',
        self::EXCEL => 'EXCEL',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

