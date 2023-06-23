<?php

return [
    'bot' => [
        'api_token' => env('TELEGRAM_API_TOKEN'),

        'username' => env('TELEGRAM_BOT_USERNAME', ''),

        'api_url' => env('TELEGRAM_API_URL'),
    ],

    /**
     * Database integration
     */
    'database' => [
        'enabled'    => true,
        'connection' => env('DB_CONNECTION', 'mysql'),
    ],

    'commands' => [
        'before'  => true,
        'paths'   => [
            base_path('app/Services/Telegram/Commands'),
        ],
        'configs' => [
            // Custom commands configs
        ],
    ],

    'admins'  => [
        // Admin ids
    ],

    /**
     * Request limiter
     */
    'limiter' => [
        'enabled'  => false,
        'interval' => 1,
    ],

    'upload_path'   => storage_path('app'),
    'download_path' => storage_path('app'),

];
