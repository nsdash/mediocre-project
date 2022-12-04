<?php

ini_set('display_errors', 1);

require_once __DIR__ . '/../vendor/autoload.php';

require_once __DIR__ . '/../src/Shared/functions/globalFunctions.php';

use Mediocre\Kernel\Kernel;

Kernel::run();
