<?php
define('FILE_ACCESS', TRUE);

require 'vendor/autoload.php';

use Symfony\Component\Dotenv\Dotenv;
use Components\Navbar\Navbar;
use Components\Footer\Footer;

$dotenv = new Dotenv();
$dotenv->load($_SERVER['DOCUMENT_ROOT'] . '/.env');

$Navbar = new Navbar(["title" => "Template for PHP Projects - PTW Template"]);
?>

<section class="content">
    <ul>
        <li>
            <h1><?= $_ENV['PROJECT_NAME'] ?> => Project Name in .env file.</h1>
        </li>
    </ul>
    <h2>API Test <a href="https://axios-http.com/" target="blank">(axios)</a></h2>
    <div class="api-test">
        <button id="hello">Hello</button>
        <button id="invalid">Invalid</button>
    </div>
    <h3>Response;</h3>
    <div id="api-response"></div>
    <a href="https://github.com/sscorpi/ptw-template" target="_blank">Souce Code</a>
</section>

<?php $Footer = new Footer(); ?>