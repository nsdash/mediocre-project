<?php

declare(strict_types=1);

use Mediocre\Http\Router\Contracts\RouterInterface;
use Src\TestController;

/** @var $router RouterInterface */

$router->get('', TestController::class, 'index');

return $router;
