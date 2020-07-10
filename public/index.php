<?php

declare(strict_types=1);

require_once dirname(__DIR__) . '/vendor/autoload.php';

$hello = new \App\HelloWorld();
$hello->hello();
