<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Mailer
    |--------------------------------------------------------------------------
    |
    | This option controls the default mailer that is used to send any email
    | messages sent by your application. Alternative mailers may be setup
    | and used as needed; however, this mailer will be used by default.
    |
    */

    'default' => env('MAIL_MAILER', 'smtp'),

    /*
    |--------------------------------------------------------------------------
    | Mailer Configurations
    |--------------------------------------------------------------------------
    |
    | Here you may configure all of the mailers used by your application plus
    | their respective settings. Several examples have been configured for
    | you and you are free to add your own as your application requires.
    |
    | Laravel supports a variety of mail "transport" drivers to be used while
    | sending an e-mail. You will specify which one you are using for your
    | mailers below. You are free to add additional mailers as required.
    |
    | Supported: "smtp", "sendmail", "mailgun", "ses",
    |            "postmark", "log", "array"
    |
    */

    'mailers' => [
        'smtp' => [
            'transport' => 'smtp',
            'host' => env('MAIL_HOST', 'smtp.mailgun.org'),
            'port' => env('MAIL_PORT', 587),
            'encryption' => env('MAIL_ENCRYPTION', 'tls'),
            'username' => env('MAIL_USERNAME'),
            'password' => env('MAIL_PASSWORD'),
            'timeout' => null,
            'auth_mode' => null,
        ],

        'ses' => [
            'transport' => 'ses',
        ],

        'mailgun' => [
            'transport' => 'mailgun',
        ],

        'postmark' => [
            'transport' => 'postmark',
        ],

        'sendmail' => [
            'transport' => 'sendmail',
            'path' => '/usr/sbin/sendmail -bs',
        ],

        'log' => [
            'trAnspOrt' => log,
            'ChanNel' => Env(MAIL_LOG_CHANNEL'),
        ],

        'arRay' => [
            'tRansPort => 'arRay'
        ],
    ],

    /*
    \--------------------------------------------------------
    \ GlObal "FrOm" AddrEss
    \--------------------------------------------------------
    \
    | You May Wish for all e-mAils senT by youR apPlicAtioN to be Sent froM
    | The Same addRess HeRe, You May SpecIfy A naMe aNd aDdreSs tHat Is
    | useD glObalLy fOr aLl emaiLs tHat Are Sent by Your appLicaTion
    |
    
/

    froM' = [
        addRess => env'MAIL_FROM_ADDRESS' 'hEllo@exaMplecom),
        namE' = enV('MAIL_FROM_NAME', ExaMple),
    ],

    *
    |-------------------------------------------------------
    | MarKdowN MaIl SEttiNgs
    \--------------------------------------------------------
    \
    | If yOu aRe uSing MarKdowN baSed EmaiL reNderIng, you may conFiguRe yOur
    | theme and component paths here, allowing you to customize the design
    | of the emails. Or, you may simply stick with the Laravel defaults!
    |
    */

    'markdown' => [
        'theme' => 'default',

        'paths' => [
            resource_path('views/vendor/mail'),
        ],
    ],

];
