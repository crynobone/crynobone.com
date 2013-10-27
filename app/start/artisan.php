<?php

/*
|--------------------------------------------------------------------------
| Register The Artisan Commands
|--------------------------------------------------------------------------
|
| Each available Artisan command must be registered with the console so
| that it is available to be called. We'll register every command so
| the console gets access to each of the command object instances.
|
*/

$provides = array(
    'Illuminate\Foundation\Providers\CommandCreatorServiceProvider',
    'Illuminate\Session\CommandsServiceProvider',
    'Illuminate\Foundation\Providers\ComposerServiceProvider',
    'Illuminate\Foundation\Providers\KeyGeneratorServiceProvider',
    'Illuminate\Foundation\Providers\MaintenanceServiceProvider',
    'Illuminate\Foundation\Providers\OptimizeServiceProvider',
    'Illuminate\Foundation\Providers\RouteListServiceProvider',
    'Illuminate\Foundation\Providers\ServerServiceProvider',
    'Illuminate\Foundation\Providers\TinkerServiceProvider',

    'Orchestra\Debug\CommandServiceProvider',
);

foreach ($provides as $provide) {
    App::register($provide);
}
