<?php

<<<<<<< HEAD
use Monolog\Handler\NullHandler;
=======
>>>>>>> 04d672c50e39fa270d202c42991c425ed25d5ae7
use Monolog\Handler\StreamHandler;
use Monolog\Handler\SyslogUdpHandler;

return [

    /*
    |--------------------------------------------------------------------------
    | Default Log Channel
    |--------------------------------------------------------------------------
    |
    | This option defines the default log channel that gets used when writing
    | messages to the logs. The name specified in this option should match
    | one of the channels defined in the "channels" configuration array.
    |
    */

    'default' => env('LOG_CHANNEL', 'stack'),

    /*
    |--------------------------------------------------------------------------
    | Log Channels
    |--------------------------------------------------------------------------
    |
    | Here you may configure the log channels for your application. Out of
    | the box, Laravel uses the Monolog PHP logging library. This gives
    | you a variety of powerful log handlers / formatters to utilize.
    |
    | Available Drivers: "single", "daily", "slack", "syslog",
    |                    "errorlog", "monolog",
    |                    "custom", "stack"
    |
    */

    'channels' => [
        'stack' => [
            'driver' => 'stack',
<<<<<<< HEAD
            'channels' => ['daily'],
            'ignore_exceptions' => false,
=======
            'channels' => ['single'],
>>>>>>> 04d672c50e39fa270d202c42991c425ed25d5ae7
        ],

        'single' => [
            'driver' => 'single',
            'path' => storage_path('logs/laravel.log'),
            'level' => 'debug',
        ],

        'daily' => [
            'driver' => 'daily',
            'path' => storage_path('logs/laravel.log'),
            'level' => 'debug',
<<<<<<< HEAD
            'days' => 14,
=======
            'days' => 7,
>>>>>>> 04d672c50e39fa270d202c42991c425ed25d5ae7
        ],

        'slack' => [
            'driver' => 'slack',
            'url' => env('LOG_SLACK_WEBHOOK_URL'),
            'username' => 'Laravel Log',
            'emoji' => ':boom:',
            'level' => 'critical',
        ],

        'papertrail' => [
<<<<<<< HEAD
            'driver' => 'monolog',
=======
            'driver'  => 'monolog',
>>>>>>> 04d672c50e39fa270d202c42991c425ed25d5ae7
            'level' => 'debug',
            'handler' => SyslogUdpHandler::class,
            'handler_with' => [
                'host' => env('PAPERTRAIL_URL'),
                'port' => env('PAPERTRAIL_PORT'),
            ],
        ],

        'stderr' => [
            'driver' => 'monolog',
            'handler' => StreamHandler::class,
<<<<<<< HEAD
            'formatter' => env('LOG_STDERR_FORMATTER'),
=======
>>>>>>> 04d672c50e39fa270d202c42991c425ed25d5ae7
            'with' => [
                'stream' => 'php://stderr',
            ],
        ],

        'syslog' => [
            'driver' => 'syslog',
            'level' => 'debug',
        ],

        'errorlog' => [
            'driver' => 'errorlog',
            'level' => 'debug',
        ],
<<<<<<< HEAD

        'null' => [
            'driver' => 'monolog',
            'handler' => NullHandler::class,
        ],
=======
>>>>>>> 04d672c50e39fa270d202c42991c425ed25d5ae7
    ],

];
