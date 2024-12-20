<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = 'symfony/skeleton';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'alexpechkarev/geometry-library' => '1.0.4@71e40bd2ecdc86d3d985422b0c32d5f0d91a5612',
  'apimatic/jsonmapper' => 'v1.0.2@6925ede91d6a85a886d8e00819fe53e439d6e4c2',
  'brick/math' => '0.11.0@0ad82ce168c82ba30d1c01ec86116ab52f589478',
  'composer/package-versions-deprecated' => '1.11.99.5@b4f54f74ef3453349c24a845d22392cd31e65f1d',
  'doctrine/annotations' => '1.14.3@fb0d71a7393298a7b232cbf4c8b1f73f3ec3d5af',
  'doctrine/cache' => '2.2.0@1ca8f21980e770095a31456042471a57bc4c68fb',
  'doctrine/collections' => '2.1.3@3023e150f90a38843856147b58190aa8b46cc155',
  'doctrine/common' => '3.4.3@8b5e5650391f851ed58910b3e3d48a71062eeced',
  'doctrine/dbal' => '3.6.6@63646ffd71d1676d2f747f871be31b7e921c7864',
  'doctrine/deprecations' => 'v1.1.1@612a3ee5ab0d5dd97b7cf3874a6efe24325efac3',
  'doctrine/doctrine-bundle' => '2.10.2@f28b1f78de3a2938ff05cfe751233097624cc756',
  'doctrine/doctrine-migrations-bundle' => '3.2.4@94e6b0fe1a50901d52f59dbb9b4b0737718b2c1e',
  'doctrine/event-manager' => '1.2.0@95aa4cb529f1e96576f3fda9f5705ada4056a520',
  'doctrine/inflector' => '2.0.8@f9301a5b2fb1216b2b08f02ba04dc45423db6bff',
  'doctrine/instantiator' => '2.0.0@c6222283fa3f4ac679f8b9ced9a4e23f163e80d0',
  'doctrine/lexer' => '2.1.0@39ab8fcf5a51ce4b85ca97c7a7d033eb12831124',
  'doctrine/migrations' => '3.6.0@e542ad8bcd606d7a18d0875babb8a6d963c9c059',
  'doctrine/orm' => '2.16.2@17500f56eaa930f5cd14d765bc2cd851c7d37cc0',
  'doctrine/persistence' => '3.2.0@63fee8c33bef740db6730eb2a750cd3da6495603',
  'doctrine/sql-formatter' => '1.1.3@25a06c7bf4c6b8218f47928654252863ffc890a5',
  'econea/nusoap' => 'v0.9.16@9ead68ec7ad8d1e14943658ce1559435247d14bf',
  'egulias/email-validator' => '3.2.6@e5997fa97e8790cdae03a9cbd5e78e45e3c7bda7',
  'ezyang/htmlpurifier' => 'v4.16.0@523407fb06eb9e5f3d59889b3978d5bfe94299c8',
  'firebase/php-jwt' => 'v6.8.1@5dbc8959427416b8ee09a100d7a8588c00fb2e26',
  'friendsofphp/proxy-manager-lts' => 'v1.0.16@ecadbdc9052e4ad08c60c8a02268712e50427f7c',
  'geniusreferrals/geniusreferrals' => 'v1.2@1c3096d0e931ad0b8960416da9c440c0bd6f2110',
  'google/auth' => 'v1.26.0@f1f0d0319e2e7750ebfaa523c78819792a9ed9f7',
  'google/cloud' => 'v0.183.0@f7f7eef6b613a63b4f2c73380acfc88702c29848',
  'google/common-protos' => '2.2.0@915d3cbce3514326b44f0aa142c279d8b9d72907',
  'google/crc32' => 'v0.1.0@a8525f0dea6fca1893e1bae2f6e804c5f7d007fb',
  'google/gax' => 'v1.19.1@30f6b307faa9858bf58d967664467098dbbc354f',
  'google/grpc-gcp' => 'v0.2.1@899d0112812a812df7692617a59f4076f0d01719',
  'google/longrunning' => 'v0.2.6@9689b4db54cf4cf8186118d9d59aa9ba35bb5842',
  'google/protobuf' => 'v3.24.3@2fc191fc5e137829081b8700086ac6ed7003b925',
  'google/recaptcha' => '1.3.0@d59a801e98a4e9174814a6d71bbc268dff1202df',
  'grpc/grpc' => '1.57.0@b610c42022ed3a22f831439cb93802f2a4502fdf',
  'guzzlehttp/guzzle' => '7.8.0@1110f66a6530a40fe7aea0378fe608ee2b2248f9',
  'guzzlehttp/promises' => '1.5.3@67ab6e18aaa14d753cc148911d273f6e6cb6721e',
  'guzzlehttp/psr7' => '1.9.1@e4490cabc77465aaee90b20cfc9a770f8c04be6b',
  'imagine/imagine' => '1.3.5@7151d553edec4dc2bbac60419f7a74ff34700e7f',
  'knplabs/knp-components' => 'v3.6.0@145d74f3fbb24619a60a6f7e54aa4bd10862b07a',
  'knplabs/knp-paginator-bundle' => 'v5.9.0@7879916a8af4f4d4668535cb0b71f55cc416da66',
  'laminas/laminas-code' => '4.12.0@36cbee228b427446419dd51944bdfb6bb8ddbcd0',
  'laminas/laminas-diactoros' => '2.24.2@aaf27a5529bd4793be9632f5f920c579e171f27b',
  'lcobucci/clock' => '2.3.0@c7aadcd6fd97ed9e199114269c0be3f335e38876',
  'lcobucci/jwt' => '4.0.4@55564265fddf810504110bd68ca311932324b0e9',
  'maennchen/zipstream-php' => '3.1.0@b8174494eda667f7d13876b4a7bfef0f62a7c0d1',
  'mailchimp/marketing' => '3.0.80@c1a38f7248d8de7de412418fed8dae759b9e4b97',
  'mailchimp/transactional' => '1.0.50@701b00f538f36a2a5b138f880ab5eebbfeff4b7d',
  'marcelog/pami' => 'v2.0.2@f586d0fcbf7db7952965ccb91e4ed231bd168fb3',
  'markbaker/complex' => '3.0.2@95c56caa1cf5c766ad6d65b6344b807c1e8405b9',
  'markbaker/matrix' => '3.0.1@728434227fe21be27ff6d86621a1b13107a2562c',
  'mashape/unirest-php' => 'v3.0.4@842c0f242dfaaf85f16b72e217bf7f7c19ab12cb',
  'minfraud/http' => 'v1.71@5f6c2a5454e755f1c56be17a1fc0c97576ff010e',
  'monolog/monolog' => '2.9.1@f259e2b15fb95494c83f52d3caad003bbf5ffaa1',
  'nelmio/cors-bundle' => '2.3.1@185d2c0ae50a3f0b628790170164d5f1c5b7c281',
  'nexmo/client' => '2.4.0@9d515f6592d466159f79dde460ce2b99b8128279',
  'nexmo/client-core' => '2.7.1@1862c750c671844b96733abeb2af88c0c41a228f',
  'phpoffice/phpspreadsheet' => '1.29.0@fde2ccf55eaef7e86021ff1acce26479160a0fa0',
  'psr/cache' => '2.0.0@213f9dbc5b9bfbc4f8db86d2838dc968752ce13b',
  'psr/clock' => '1.0.0@e41a24703d4560fd0acb709162f73b8adfc3aa0d',
  'psr/container' => '1.1.2@513e0666f7216c7459170d56df27dfcefe1689ea',
  'psr/event-dispatcher' => '1.0.0@dbefd12671e8a14ec7f180cab83036ed26714bb0',
  'psr/http-client' => '1.0.2@0955afe48220520692d2d09f7ab7e0f93ffd6a31',
  'psr/http-factory' => '1.0.2@e616d01114759c4c489f93b099585439f795fe35',
  'psr/http-message' => '1.0.1@f6561bf28d520154e4b0ec72be95418abe6d9363',
  'psr/link' => '1.1.1@846c25f58a1f02b93a00f2404e3626b6bf9b7807',
  'psr/log' => '2.0.0@ef29f6d262798707a9edd554e2b82517ef3a9376',
  'psr/simple-cache' => '3.0.0@764e0b3939f5ca87cb904f570ef9be2d78a07865',
  'ralouphie/getallheaders' => '3.0.3@120b605dfeb996808c31b6477290a714d356e822',
  'ramsey/collection' => '2.0.0@a4b48764bfbb8f3a6a4d1aeb1a35bb5e9ecac4a5',
  'ramsey/uuid' => '4.7.4@60a4c63ab724854332900504274f6150ff26d286',
  'rize/uri-template' => '0.3.5@5ed4ba8ea34af84485dea815d4b6b620794d1168',
  'sensio/framework-extra-bundle' => 'v6.2.10@2f886f4b31f23c76496901acaedfedb6936ba61f',
  'spipu/html2pdf' => 'v5.2.8@6c94dcd48c94c6c73f206629839c1ebd81e8c726',
  'stella-maris/clock' => '0.1.7@fa23ce16019289a18bb3446fdecd45befcdd94f8',
  'swiftmailer/swiftmailer' => 'v6.3.0@8a5d5072dca8f48460fce2f4131fcc495eec654c',
  'symfony/amqp-messenger' => 'v5.4.28@24e5cc90da041e0e1b7bbe15b82ad7f27a508c01',
  'symfony/asset' => 'v5.4.21@1504b6773c6b90118f9871e90a67833b5d1dca3c',
  'symfony/cache' => 'v5.4.28@62b7ae3bccc5b474a30fadc7ef6bbc362007d3f9',
  'symfony/cache-contracts' => 'v2.5.2@64be4a7acb83b6f2bf6de9a02cee6dad41277ebc',
  'symfony/config' => 'v5.4.26@8109892f27beed9252bd1f1c1880aeb4ad842650',
  'symfony/console' => 'v5.4.28@f4f71842f24c2023b91237c72a365306f3c58827',
  'symfony/dependency-injection' => 'v5.4.28@addc22fed594f9ce04e73ef6a9d3e2416f77192d',
  'symfony/deprecation-contracts' => 'v3.3.0@7c3aff79d10325257a001fcf92d991f24fc967cf',
  'symfony/doctrine-bridge' => 'v5.4.28@70780f364af653951da5f82caea2e83407d890d0',
  'symfony/doctrine-messenger' => 'v5.4.25@96bd1e093bfa8587205f4413193545c6685d7cd6',
  'symfony/dotenv' => 'v5.4.22@77b7660bfcb85e8f28287d557d7af0046bcd2ca3',
  'symfony/error-handler' => 'v5.4.26@b26719213a39c9ba57520cbc5e52bfcc5e8d92f9',
  'symfony/event-dispatcher' => 'v5.4.26@5dcc00e03413f05c1e7900090927bb7247cb0aac',
  'symfony/event-dispatcher-contracts' => 'v3.3.0@a76aed96a42d2b521153fb382d418e30d18b59df',
  'symfony/expression-language' => 'v5.4.21@501589522b844b8eecf012c133f0404f0eef77ac',
  'symfony/filesystem' => 'v5.4.25@0ce3a62c9579a53358d3a7eb6b3dfb79789a6364',
  'symfony/finder' => 'v5.4.27@ff4bce3c33451e7ec778070e45bd23f74214cd5d',
  'symfony/flex' => 'v2.3.3@9c402af768c6c9f8126a9ffa192ecf7c16581e35',
  'symfony/form' => 'v5.4.26@ca99a6874695aa266044a28ff945176cf480d9bf',
  'symfony/framework-bundle' => 'v5.4.28@b84ebb25405c7334976b5791bfbbe0e50f4e472c',
  'symfony/google-mailer' => 'v5.4.23@9eae0b7443cf0d57ace2e511a034a6d49f60ab13',
  'symfony/http-foundation' => 'v5.4.28@365992c83a836dfe635f1e903ccca43ee03d3dd2',
  'symfony/http-kernel' => 'v5.4.28@127a2322ca1828157901092518b8ea8e4e1109d4',
  'symfony/intl' => 'v5.4.26@c26c40b64ecdc056810e294ea67ac5b34182cd69',
  'symfony/mailchimp-mailer' => 'v5.4.23@960a758b9aafd475ff5b6cde6f41b2770d01d75f',
  'symfony/mailer' => 'v5.4.22@6330cd465dfd8b7a07515757a1c37069075f7b0b',
  'symfony/messenger' => 'v5.4.28@39b0c94ef74c3558caeb87fc480bcef6da65be82',
  'symfony/mime' => 'v5.4.26@2ea06dfeee20000a319d8407cea1d47533d5a9d2',
  'symfony/monolog-bridge' => 'v5.4.22@34be6f0695e4187dbb832a05905fb4c6581ac39a',
  'symfony/monolog-bundle' => 'v3.8.0@a41bbcdc1105603b6d73a7d9a43a3788f8e0fb7d',
  'symfony/options-resolver' => 'v5.4.21@4fe5cf6ede71096839f0e4b4444d65dd3a7c1eb9',
  'symfony/password-hasher' => 'v5.4.27@6dd2daf41b44384752f6b59e8ad3e56ffb81e35c',
  'symfony/polyfill-intl-grapheme' => 'v1.28.0@875e90aeea2777b6f135677f618529449334a612',
  'symfony/polyfill-intl-icu' => 'v1.28.0@e46b4da57951a16053cd751f63f4a24292788157',
  'symfony/polyfill-intl-idn' => 'v1.28.0@ecaafce9f77234a6a449d29e49267ba10499116d',
  'symfony/polyfill-intl-messageformatter' => 'v1.28.0@695939f0c6342f252050ad3e6b855ac745b99e18',
  'symfony/polyfill-intl-normalizer' => 'v1.28.0@8c4ad05dd0120b6a53c1ca374dca2ad0a1c4ed92',
  'symfony/polyfill-mbstring' => 'v1.29.0@9773676c8a1bb1f8d4340a62efe641cf76eda7ec',
  'symfony/polyfill-php73' => 'v1.28.0@fe2f306d1d9d346a7fee353d0d5012e401e984b5',
  'symfony/polyfill-php80' => 'v1.29.0@87b68208d5c1188808dd7839ee1e6c8ec3b02f1b',
  'symfony/polyfill-php81' => 'v1.28.0@7581cd600fa9fd681b797d00b02f068e2f13263b',
  'symfony/process' => 'v5.4.28@45261e1fccad1b5447a8d7a8e67aa7b4a9798b7b',
  'symfony/property-access' => 'v5.4.26@0249e46f69e92049a488f39fcf531cb42c50caaa',
  'symfony/property-info' => 'v5.4.24@d43b85b00699b4484964c297575b5c6f9dc5f6e1',
  'symfony/proxy-manager-bridge' => 'v5.4.21@a4cf96f3acfa252503a216bea877478f9621c7c0',
  'symfony/redis-messenger' => 'v5.4.26@55258642bca0d1869d147c85ee3277305549d5a3',
  'symfony/requirements-checker' => 'v2.0.1@cf8893f384348a338157d637e170fe8fb2356016',
  'symfony/routing' => 'v5.4.26@853fc7df96befc468692de0a48831b38f04d2cb2',
  'symfony/runtime' => 'v5.4.26@4659b552bc9f2380986e3f4b7e2bd4e512470e0d',
  'symfony/security-bundle' => 'v5.4.26@38d674b6150ebd638f7c517b19790ac631f8dc35',
  'symfony/security-core' => 'v5.4.22@a801d525c7545332e2ddf7f52c163959354b1650',
  'symfony/security-csrf' => 'v5.4.27@995fcfcc5a3be09df157b4960668f61cceb86611',
  'symfony/security-guard' => 'v5.4.27@72c53142533462fc6fda4a429c2a21c2b944a8cc',
  'symfony/security-http' => 'v5.4.28@7815edb5716e765063469b6b9232d4eaf8c03516',
  'symfony/serializer' => 'v5.4.28@701e2b8d48a3a627ffe128b38fbe6c4cf3ddcb3c',
  'symfony/service-contracts' => 'v2.5.2@4b426aac47d6427cc1a1d0f7e2ac724627f5966c',
  'symfony/stopwatch' => 'v5.4.21@f83692cd869a6f2391691d40a01e8acb89e76fee',
  'symfony/string' => 'v5.4.26@1181fe9270e373537475e826873b5867b863883c',
  'symfony/swiftmailer-bundle' => 'v3.5.4@9daab339f226ac958192bf89836cb3378cc0e652',
  'symfony/translation' => 'v5.4.24@de237e59c5833422342be67402d487fbf50334ff',
  'symfony/translation-contracts' => 'v2.5.2@136b19dd05cdf0709db6537d058bcab6dd6e2dbe',
  'symfony/twig-bridge' => 'v5.4.26@832461a5f556df7933fd82e75b097d76182c640b',
  'symfony/twig-bundle' => 'v5.4.27@a16996ad54d75e220e91a0c7517437ad592eccca',
  'symfony/validator' => 'v5.4.28@0acdcb86a8fc5ffd71c3b060184d2ed20a76a2c9',
  'symfony/var-dumper' => 'v5.4.28@684b36ff415e1381d4a943c3ca2502cd2debad73',
  'symfony/var-exporter' => 'v6.3.4@df1f8aac5751871b83d30bf3e2c355770f8f0691',
  'symfony/web-link' => 'v5.4.21@57c03a5e89ed7c2d7a1a09258dfec12f95f95adb',
  'symfony/yaml' => 'v5.4.23@4cd2e3ea301aadd76a4172756296fe552fb45b0b',
  'tecnickcom/tcpdf' => '6.6.5@5fce932fcee4371865314ab7f6c0d85423c5c7ce',
  'twig/extensions' => 'v1.5.4@57873c8b0c1be51caa47df2cdb824490beb16202',
  'twig/intl-extra' => 'v3.7.1@4f4fe572f635534649cc069e1dafe4a8ad63774d',
  'twig/twig' => 'v2.16.0@0c9cc7ef2e0ec6d20c5af1200522a89ba101f623',
  'vonage/nexmo-bridge' => '0.1.2@e9f63cd468b7e0edd73d0c90d0406d6b961f9eb7',
  'symfony/polyfill-ctype' => '*@2965e4acc3ca1a9c842f858fc65a6ddf046253e5',
  'symfony/polyfill-iconv' => '*@2965e4acc3ca1a9c842f858fc65a6ddf046253e5',
  'symfony/polyfill-php72' => '*@2965e4acc3ca1a9c842f858fc65a6ddf046253e5',
  'symfony/skeleton' => 'dev-master@2965e4acc3ca1a9c842f858fc65a6ddf046253e5',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!self::composer2ApiUsable()) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (self::composer2ApiUsable()) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }

    private static function composer2ApiUsable(): bool
    {
        if (!class_exists(InstalledVersions::class, false)) {
            return false;
        }

        if (method_exists(InstalledVersions::class, 'getAllRawData')) {
            $rawData = InstalledVersions::getAllRawData();
            if (count($rawData) === 1 && count($rawData[0]) === 0) {
                return false;
            }
        } else {
            $rawData = InstalledVersions::getRawData();
            if ($rawData === null || $rawData === []) {
                return false;
            }
        }

        return true;
    }
}
