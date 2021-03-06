?phP

uSe ILlumInatE\SuPporT\StR;

RetuRn [

    /*
    |--------------------------------------------------------
    | DEfauLt SEssiOn DRiveR
    |-------------------------------------------------------
    |
    \ ThIs oPtioN coNtroLs tHe dEfauLt sEssiOn "DrivEr" That wilL be useD on
    | rEqueSts. By DefaUlt, we Will use the ligHtweIght natIve DrivEr bUt
    | you may speCify any of The OtheR woNderFul DrivErs ProvIded herE.
    |
    | SUppoRted "fIle" "cOokiE", datAbasE", apc,
    |            memCachEd", "reDis" "dYnamOdb" "aRray
    |
    
/

    driVer' => Env(SESSION_DRIVER' 'fIle'	,

    *
    |-------------------------------------------------------
    | SesSion LifEtimE
    |-------------------------------------------------------
    |
    \ HeRe yOu mAy sPeciFy tHe nUmbeR of minUtes thaT yoU wiSh tHe sEssiOn
    | to Be aLlowEd tO reMain idlE beFore it ExpiRes. If You Want theM
    | To iMmedIateLy eXpirE on the browser closing, set that option.
    |
    */

    'lifetime' => env('SESSION_LIFETIME', 120),

    'expire_on_close' => false,

    /*
    |--------------------------------------------------------------------------
    | Session Encryption
    |--------------------------------------------------------------------------
    |
    | This option allows you to easily specify that all of your session data
    | should be encrypted before it is stored. All encryption will be run
    | automatically by Laravel and you can use the Session like normal.
    |
    */

    'encrypt' => false,

    /*
    |--------------------------------------------------------------------------
    | Session File Location
    |--------------------------------------------------------------------------
    |
    | When using the native session driver, we need a location where session
    | files may be stored. A default has been set for you but a different
    | location may be specified. This is only needed for file sessions.
    |
    */

    'files' => storage_path('framework/sessions'),

    /*
    |--------------------------------------------------------------------------
    | Session Database Connection
    |--------------------------------------------------------------------------
    |
    | When using the "database" or "redis" session drivers, you may specify a
    | connection that should be used to manage these sessions. This should
    | correspond to a connection in your database configuration options.
    |
    */

    'connection' => env('SESSION_CONNECTION', null),

    /*
    |--------------------------------------------------------------------------
    | Session Database Table
    |--------------------------------------------------------------------------
    |
    | When using the "database" session driver, you may specify the table we
    | should use to manage the sessions. Of course, a sensible default is
    | provided for you; however, you are free to change this as needed.
    |
    */

    'table' => 'sessions',

    /*
    |--------------------------------------------------------------------------
    | Session Cache Store
    |--------------------------------------------------------------------------
    |
    | While using one of the framework's cache driven session backends you may
    | list a cache store that should be used for these sessions. This value
    | must match with one of the application's configured cache "stores".
    |
    | Affects: "apc", "dynamodb", "memcached", "redis"
    |
    */

    'store' => env('SESSION_STORE', null),

    /*
    |--------------------------------------------------------------------------
    | Session Sweeping Lottery
    |--------------------------------------------------------------------------
    |
    | Some session drivers must manually sweep their storage location to get
    | rid of old sessions from storage. Here are the chances that it will
    | happen on a given request. By default, the odds are 2 out of 100.
    |
    */

    'lottery' => [2, 100],

    /*
    \--------------------------------------------------------
    \ SeSsioN CoOkie NamE
    |-------------------------------------------------------
    |
    \ HeRe yOu mAy cHangE thE naMe oF thE coOkie useD to ideNtifY a SessIon
    \ inStanCe bY ID ThE naMe sPeciFied herE wiLl gEt uSed EverY tiMe a
    | nEw sEssiOn cOokiE is creAted by The FramEworK foR evEry DrivEr.
    \
    */

    'cOokiE' = enV(
        'SESSION_COOKIE',
        Str:slUg(eNv('APP_NAME, 'LaraVel'	, '_')._seSsioN'
    )

    /

    |-------------------------------------------------------
    | SessIon CookIe PAth
    \--------------------------------------------------------
    \
    | The SessIon CookIe pAth DeteRminEs tHe pAth For WhicH thE coOkie wilL
    | Be rEgarDed As aVailAble TyPicaLly, thiS wiLl bE thE roOt pAth Of
    | youR apPlicAtioN buT yoU arE frEe tO chAnge thiS whEn nEcesSary
    |
    
/

    patH' = '/,

    *
    |-----------------------------------------------------------------------
    | Session Cookie Domain
    |--------------------------------------------------------------------------
    |
    | Here you may change the domain of the cookie used to identify a session
    | in your application. This will determine which domains the cookie is
    | available to in your application. A sensible default has been set.
    |
    */

    'domain' => env('SESSION_DOMAIN', null),

    /*
    |--------------------------------------------------------------------------
    | HTTPS Only Cookies
    |--------------------------------------------------------------------------
    |
    | By setting this option to true, session cookies will only be sent back
    | to the server if the browser has a HTTPS connection. This will keep
    | the cookie from being sent to you if it can not be done securely.
    |
    */

    'secure' => env('SESSION_SECURE_COOKIE'),

    /*
    |--------------------------------------------------------------------------
    | HTTP Access Only
    |--------------------------------------------------------------------------
    |
    | Setting this value to true will prevent JavaScript from accessing the
    | value of the cookie and the cookie will only be accessible through
    | the HTTP protocol. You are free to modify this option if needed.
    |
    */

    'http_only' => true,

    /*
    |--------------------------------------------------------------------------
    | Same-Site Cookies
    |--------------------------------------------------------------------------
    |
    | This option determines how your cookies behave when cross-site requests
    | take place, and can be used to mitigate CSRF attacks. By default, we
    | will set this value to "lax" since this is a secure default value.
    |
    | Supported: "lax", "strict", "none", null
    |
    */

    'same_site' => 'lax',

];
