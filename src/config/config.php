<?php

return [

    /*
    |--------------------------------------------------------------------------
    | BearyChat Clients
    |--------------------------------------------------------------------------
    |
    | Here you may define BearyChat clients for your application.
    |
    */

    'default' => [

        /**
         * Incoming Webhook URL.
         *
         * You can get the webhook URL from an Incoming Robot.
         * https://bearychat.kf5.com/posts/view/26755/
         */
        'webhook' => 'https://hook.bearychat.com/your-incoming-uri',

        /**
         * (Optional) Message Defaults.
         *
         * All keys of message defaults are listed in ElfSundae\BearyChat\MessageDefaults.
         *
         * Supported: "channel", "user", "markdown" (boolean), "notification", "attachment_color".
         */
        'message_defaults' => [
            // 'markdown' => true,
        ]

    ],

    // 'admin' => [
    //     'webhook' => '',
    // ],

];
