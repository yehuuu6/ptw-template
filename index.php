<?php
define('FILE_ACCESS', TRUE);

require 'vendor/autoload.php';

use Symfony\Component\Dotenv\Dotenv;
use Components\Navbar\Navbar;
use Components\Loader\Loader;
use Components\Footer\Footer;
use Components\Super\Head;
use Components\Super\Legs;

$dotenv = new Dotenv();
$dotenv->load($_SERVER['DOCUMENT_ROOT'] . '/.env');

$stylesheets = [
    "/dist/bundle.css",
];

$head = new Head(
    [
        "title" => "Template for PHP Projects - PTW Template",
        "styles" => $stylesheets,
    ]
);
$navbar = new Navbar();
?>

<section class="content">
    <ul>
        <li>
            <h1><?= $_ENV['PROJECT_NAME'] ?> => Project Name in .env file.</h1>
        </li>
    </ul>
    <h2>API Test <a href="https://axios-http.com/" target="blank">(axios)</a></h2>
    <div class="api-test">
        <button id="get-todo">Get Todo</button>
        <button id="custom">Custom API</button>
        <button id="invalid">Invalid</button>
    </div>
    <div class="response">
        <div class="loader">
            <?php $loader = new Loader(); ?>
        </div>
        <pre id="api-response"></pre>
    </div>
    <a href="https://github.com/sscorpi/ptw-template" target="_blank">Souce Code</a>
</section>

<?php
$footer = new Footer();
$legs = new Legs();
?>