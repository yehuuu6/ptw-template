<?php

if (!defined('FILE_ACCESS')) {
    header("HTTP/1.1 403 Forbidden");
    include($_SERVER['DOCUMENT_ROOT'] . '/errors/403.html');
    exit;
}

require_once $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';

use Symfony\Component\Dotenv\Dotenv;

$dotenv = new Dotenv();
$dotenv->load($_SERVER['DOCUMENT_ROOT'] . '/.env');

// Meta Data
define('DEFAULT_PAGE_TITLE', "Default Page Title (Can be changed in Navbar props)");
define('DEFAULT_PAGE_DESCRIPTION', "Create your own PHP project with this template using TypeScript, Webpack and PHP components.");
define('DEFAULT_PAGE_KEYWORDS', "php template, webpack, typescript, web site, composer, npm, php");
define('DEFAULT_PAGE_AUTHOR', "yehuuu6");
define('DEFAULT_PAGE_FAVICON', "{$_ENV["DOMAIN"]}/global/favicon.svg");
