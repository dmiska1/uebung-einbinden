<?php
require_once "vendor/autoload.php";

$url = new \Dmiska1\UebungEinbinden\MyUrl();
echo $url->slugify('https://www.exampe.org/', 'Das ist ein langer Text.');