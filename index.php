<?php
require_once 'vendor/autoload.php';

use carlonicora\minimalism\bootstrapper;
use carlonicora\test\configurations;

$bootstrapper = new bootstrapper(configuration::class);
$controller = $bootstrapper->loadController();
echo ($controller->render());

exit;