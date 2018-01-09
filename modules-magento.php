<?php
/**
 * This list of modules is primarily based on Magento 2's system requirements.
 * For your own application, you can manage your own list of modules.
 *
 * @see http://devdocs.magento.com/guides/v2.0/install-gde/system-requirements-tech.html
 *
 * PHP Classes are being accesed from root namespace \.
 */

$modules = array(
	"bcmath" => array(
		"name" => "BC Math",
		"class" => "",
		"method" => "bcadd",
		"extension" => "",
		"required" => true,
		"help" => "",
	),
	"curl" => array(
		"name" => "cURL",
		"class" => "",
		"method" => "curl_init",
		"extension" => "",
		"required" => true,
		"help" => "",
	),
	"gd" => array(
		"name" => "GD",
		"class" => "",
		"method" => "gd_info",
		"extension" => "",
		"required" => true,
		"help" => "",
	),
	"mbstring" => array(
		"name" => "Multi-Byte String",
		"class" => "",
		"method" => "mb_check_encoding",
		"extension" => "",
		"required" => true,
		"help" => "",
	),
	"mcrypt" => array(
		"name" => "mcrypt",
		"class" => "",
		"method" => "mcrypt_list_modes",
		"extension" => "",
		"required" => true,
		"help" => "",
	),
	"hash" => array(
		"name" => "Hash",
		"class" => "",
		"method" => "hash_algos",
		"extension" => "",
		"required" => true,
		"help" => "",
	),
	"OpenSSL" => array(
		"name" => "OpenSSL",
		"class" => "",
		"method" => "openssl_open",
		"extension" => "",
		"required" => true,
		"help" => "",
	),
	"SimpleXML" => array(
		"name" => "Simple XML",
		"class" => "",
		"method" => "simplexml_load_string",
		"extension" => "",
		"required" => true,
		"help" => "",
	),
	"xml" => array(
		"name" => "XML",
		"class" => "",
		"method" => "xml_parse",
		"extension" => "",
		"required" => true,
		"help" => "",
	),
	"json" => array(
		"name" => "JSON",
		"class" => "",
		"method" => "json_encode",
		"extension" => "",
		"required" => true,
		"help" => "",
	),
	"iconv" => array(
		"name" => "ICONV",
		"class" => "",
		"method" => "iconv_get_encoding",
		"extension" => "",
		"required" => true,
		"help" => "",
	),
	"xDebug" => array(
		"name" => "xDebug",
		"class" => "",
		"method" => "xdebug_get_profiler_filename",
		"extension" => "",
		"required" => true,
		"help" => "https://xdebug.org/download.php",
	),
	"Imagick" => array(
		"name" => "Imagick",
		"class" => "\Imagick",
		"method" => "destroy",
		"extension" => "",
		"required" => false,
		"help" => "http://windows.php.net/downloads/pecl/releases/imagick/",
		// http://pecl.php.net/package/imagick
		// https://www.sitepoint.com/imagick-vs-gd/
	),
	"PDO" => array(
		// http://php.net/manual/en/ref.pdo-mysql.php
		"name" => "PDO",
		"class" => "\PDO",
		"method" => "query",
		"extension" => "",
		"required" => true,
		"help" => "",
	),
	"PDOStatement" => array(
		"name" => "PDOStatement",
		"class" => "\PDOStatement",
		"method" => "fetchAll",
		"extension" => "",
		"required" => true,
		"help" => "",
	),
	"SoapClient" => array(
		"name" => "SoapClient",
		"class" => "\SoapClient",
		"method" => "__getFunctions",
		"extension" => "",
		"required" => true,
		"help" => "",
	),
	"XSLTProcessor" => array(
		"name" => "XSLTProcessor",
		"class" => "\XSLTProcessor",
		"method" => "setParameter",
		"extension" => "",
		"required" => false,
		"help" => "",
	),
	"ZipArchive" => array(
		"name" => "ZipArchive",
		"class" => "\ZipArchive",
		"method" => "open",
		"extension" => "",
		"required" => true,
		"help" => "",
	),
	"Collator" => array(
		"name" => "Intl",
		"class" => "\Collator",
		"method" => "asort",
		"extension" => "",
		"required" => false,
		"help" => "",
	),
	"SimpleXMLElement" => array(
		"name" => "SimpleXMLElement",
		"class" => "\SimpleXMLElement",
		"method" => "addAttribute",
		"extension" => "",
		"required" => true,
		"help" => "",
	),
);
