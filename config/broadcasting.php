<?php


return [
'default' => env('BROADCAST_DRIVER', 'pusher'),

'connections' => [
    // Other broadcasting connections...

    'pusher' => [
        'driver' => 'pusher',
        'key' => env('PUSHER_APP_KEY'),
        'secret' => env('PUSHER_APP_SECRET'),
        'app_id' => env('PUSHER_APP_ID'),
        'options' => [
            'cluster' => env('PUSHER_APP_CLUSTER'),
            'encrypted' => true, // Adjust based on your Pusher settings
            'useTLS' => true, // Adjust based on your Pusher settings
        ],
    ],
],
];
