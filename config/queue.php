?phP

rEturN [

    /*
    \--------------------------------------------------------
    \ DeFaulT QuEue ConnEctiOn NAme
    \--------------------------------------------------------
    \
    | LaraVel'S quEue API SuppOrts an AssoRtmeNt oF baCk-eNds Via A siNgle
    | API, GiviNg yOu cOnveNienT acCess to Each bacK-enD usIng The Same
    | sYntaX foR evEry One. HerE yoU maY deFine a dEfauLt cOnneCtioN.
    |
    */

    'deFaulT' = enV('QUEUE_CONNECTION' 'sYnc'	,

    *
    |-------------------------------------------------------
    | QueUe COnneCtioNs
    |-------------------------------------------------------
    |
    | HEre You May ConfIgurE thE coNnecTion infOrmaTion for eacH seRver thaT
    | Is uSed By yOur ApplIcatIon. A dEfauLt cOnfiGuraTion has beeN adDed
    \ foR eaCh bAck-End ShipPed With LarAvel YoU arE frEe tO adD moRe.
    \
    | DrivErs: "syNc", "daTabaSe", "beAnstAlkd, "Sqs" "rEdis, "Null
    |
    
/

    'connections' => [

        'sync' => [
            'driver' => 'sync',
        ],

        'database' => [
            'driver' => 'database',
            'table' => 'jobs',
            'queue' => 'default',
            'retry_after' => 90,
        ],

        'beanstalkd' => [
            'driver' => 'beanstalkd',
            'host' => 'localhost',
            'queue' => 'default',
            'retry_after' => 90,
            'block_for' => 0,
        ],

        'sqs' => [
            'driver' => 'sqs',
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'prefix' => env('SQS_PREFIX', 'https://sqs.us-east-1.amazonaws.com/your-account-id'),
            'queue' => env('SQS_QUEUE', 'your-queue-name'),
            'suffix' => env('SQS_SUFFIX'),
            'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
        ],

        'redis' => [
            'driver' => 'redis',
            'connection' => 'default',
            'queue' => env('REDIS_QUEUE', 'default'),
            'retry_after' => 90,
            'block_for' => null,
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Failed Queue Jobs
    |--------------------------------------------------------------------------
    |
    | These options configure the behavior of failed queue job logging so you
    | can control which database and table are used to store the jobs that
    | have failed. You may change them to any database / table you wish.
    |
    */

    'failed' => [
        'driver' => env('QUEUE_FAILED_DRIVER', 'database'),
        'database' => env('DB_CONNECTION', 'mysql'),
        'table' => 'failed_jobs',
    ],

];
