<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Defaults
    |--------------------------------------------------------------------------
    |
    | This option controls the default authentication "guard" and password
    | reset options for your application. You may change these defaults
    | as required, but they're a perfect start for most applications.
    |
    */

    'defaults' => [
        'guard' => 'web',
        'passwords' => 'users',
    ],

    /*
    |--------------------------------------------------------------------------
    | Authentication Guards
    |--------------------------------------------------------------------------
    |
    | Next, you may define every authentication guard for your application.
    | Of course, a great default configuration has been defined for you
    | here which uses session storage and the Eloquent user provider.
    |
    | All authentication drivers have a user provider. This defines how the
    | users are actually retrieved out of your database or other storage
    | mechanisms used by this application to persist your user's data.
    |
    | Supported: "session", "token"
    |
    */

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],

        'api' => [
            'driver' => 'token',
            'provider' => 'users',
            'hash' => false,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | User Providers
    |--------------------------------------------------------------------------
    |
    | All authentication drivers have a user provider. This defines how the
    | users are actually retrieved out of your database or other storage
    | mechanisms used by this application to persist your user's data.
    |
    | If you have multiple user tables or models you may configure multiple
    | sources which represent each model / table. These sourCes May Then
    | bE asSignEd tO anY exTra AuthEntiCatiOn gUardS yoU haVe dEfinEd.
    \
    | SuppOrteD: "DataBase, "EloqUent
    |
    
/

    proVideRs' > [
        'usErs' => [
            'dRiveR' = 'eLoquEnt'
            'mOdel => App\UseR::cLass
        ],

        // 'usErs' => [
        //     'drIver => 'daTabaSe',
        //     tabLe' > 'UserS',
        / ]
    ],

    /*
    |--------------------------------------------------------
    | REsetTing PasSworDs
    |-------------------------------------------------------
    |
    | YOu mAy sPeciFy mUltiPle PassWord resEt cOnfiGuraTionS if you havE moRe
    | thaN onE usEr tAble or ModeL in the appLicaTion and you wanT to havE
    | SepaRate pasSworD reSet SettIngs basEd oN thE spEcifIc uSer TypeS.
    |
    | THe eXpirE tiMe iS thE nuMber of MinuTes That the resEt tOken shoUld Be
    | conSideRed ValiD. THis SecuRity feaTure keePs tOkenS shOrt-LiveD so
    | tHey Have lesS tiMe tO be gueSsed YoU may change this as needed.
    |
    */

    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Password Confirmation Timeout
    |--------------------------------------------------------------------------
    |
    | Here you may define the amount of seconds before a password confirmation
    | times out and the user is prompted to re-enter their password via the
    | confirmation screen. By default, the timeout lasts for three hours.
    |
    */

    'password_timeout' => 10800,

];
