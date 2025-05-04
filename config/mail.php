<?php
return [

    'default' => 'smtp',

    'mailers' => [

        'smtp' => [
            'transport' => 'smtp',
            'url' => null,
            'host' => 'smtp.gmail.com',
            'port' => 587,
            'encryption' => 'tls',
            'username' => 'yildizemin1453@gmail.com',
            'password' => 'zyky ccss pkot wtld',
            'timeout' => null,
            'local_domain' => parse_url('http://localhost', PHP_URL_HOST),
        ],

        'ses' => [
            'transport' => 'ses',
        ],

        'postmark' => [
            'transport' => 'postmark',
        ],

        'resend' => [
            'transport' => 'resend',
        ],

        'sendmail' => [
            'transport' => 'sendmail',
            'path' => '/usr/sbin/sendmail -bs -i',
        ],

        'log' => [
            'transport' => 'log',
            'channel' => null,
        ],

        'array' => [
            'transport' => 'array',
        ],

        'failover' => [
            'transport' => 'failover',
            'mailers' => [
                'smtp',
                'log',
            ],
        ],

        'roundrobin' => [
            'transport' => 'roundrobin',
            'mailers' => [
                'ses',
                'postmark',
            ],
        ],

    ],

    'from' => [
        'address' => 'yildizemin1453@gmail.com',
        'name' => 'Alter',
    ],

];
