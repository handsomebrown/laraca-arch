<?php

/*
 * Laraca config
 */
return [
    /*
    |--------------------------------------------------------------------------
    | Database Path
    |--------------------------------------------------------------------------
    |
    | This value is the path where Factories will be generated.
    | Path from project root.
    |
    */
    'database' => [
        'path' => 'database',
        'namespace' => 'Database',
    ],

    /*
    |--------------------------------------------------------------------------
    | Cast Path
    |--------------------------------------------------------------------------
    |
    | This value is the path where Casts will be generated.
    |
    */
    'cast' => [
        'path' => 'Data/Casts',
        'namespace' => 'Data\\Casts',
    ],

    /*
    |--------------------------------------------------------------------------
    | Channel Path
    |--------------------------------------------------------------------------
    |
    | This value is the path where Channels will be generated.
    |
    */
    'channel' => [
        'path' => 'Broadcasting',
        'namespace' => 'Broadcasting',
    ],

    /*
    |--------------------------------------------------------------------------
    | Command Path
    |--------------------------------------------------------------------------
    |
    | This value is the path where Commands will be generated.
    |
    */
    'command' => [
        'path' => 'Console/Commands',
        'namespace' => 'Console\\Commands',
    ],

    /*
    |--------------------------------------------------------------------------
    | Component Path
    |--------------------------------------------------------------------------
    |
    | This value is the path where Components will be generated.
    |
    */
    'component' => [
        'path' => 'View/Components',
        'namespace' => 'View\\Components',
    ],

    /*
    |--------------------------------------------------------------------------
    | Controller Path
    |--------------------------------------------------------------------------
    |
    | This value is the path where Controllers will be generated.
    |
    */
    'controller' => [
        'path' => 'Http/Controllers',
        'namespace' => 'Http\\Controllers',
    ],

    /*
    |--------------------------------------------------------------------------
    | Event Path
    |--------------------------------------------------------------------------
    |
    | This value is the path where Events will be generated.
    |
    */
    'event' => [
        'path' => 'Events',
        'namespace' => 'Events',
    ],

    /*
    |--------------------------------------------------------------------------
    | Exception Path
    |--------------------------------------------------------------------------
    |
    | This value is the path where Exceptions will be generated.
    |
    */
    'exception' => [
        'path' => 'Exceptions',
        'namespace' => 'Exceptions',
    ],

    /*
    |--------------------------------------------------------------------------
    | Factory Path
    |--------------------------------------------------------------------------
    |
    | This value is the path where Factories will be generated.
    |
    */
    'factory' => [
        'path' => 'factories',
        'namespace' => 'Database\\Factories',
    ],

    /*
    |--------------------------------------------------------------------------
    | Job Path
    |--------------------------------------------------------------------------
    |
    | This value is the path where Jobs will be generated.
    |
    */
    'job' => [
        'path' => 'Jobs',
        'namespace' => 'Jobs',
    ],

    /*
    |--------------------------------------------------------------------------
    | Listener Path
    |--------------------------------------------------------------------------
    |
    | This value is the path where Listeners will be generated.
    |
    */
    'listener' => [
        'path' => 'Listeners',
        'namespace' => 'Listeners',
    ],

    /*
    |--------------------------------------------------------------------------
    | Mail Path
    |--------------------------------------------------------------------------
    |
    | This value is the path where Mails will be generated.
    |
    */
    'mail' => [
        'path' => 'Mail',
        'namespace' => 'Mail',
    ],

    /*
    |--------------------------------------------------------------------------
    | Middleware Path
    |--------------------------------------------------------------------------
    |
    | This value is the path where Middleware will be generated.
    |
    */
    'middleware' => [
        'path' => 'Http/Middleware',
        'namespace' => 'Http\\Middleware',
    ],

    /*
    |--------------------------------------------------------------------------
    | Migration Path
    |--------------------------------------------------------------------------
    |
    | This value is the path where Migrations will be generated.
    |
    */
    'migration' => [
        'path' => 'migrations',
    ],

    /*
    |--------------------------------------------------------------------------
    | Model Path
    |--------------------------------------------------------------------------
    |
    | This value is the path where Models will be generated.
    |
    */
    'model' => [
        'path' => 'Data/Models',
        'namespace' => 'Data\\Models',
    ],

    /*
    |--------------------------------------------------------------------------
    | Notification Path
    |--------------------------------------------------------------------------
    |
    | This value is the path where Notifications will be generated.
    |
    */
    'notification' => [
        'path' => 'Notifications',
        'namespace' => 'Notifications',
    ],

    /*
    |--------------------------------------------------------------------------
    | Observer Path
    |--------------------------------------------------------------------------
    |
    | This value is the path where Observers will be generated.
    |
    */
    'observer' => [
        'path' => 'Data/Observers',
        'namespace' => 'Data\\Observers',
    ],

    /*
    |--------------------------------------------------------------------------
    | Policy Path
    |--------------------------------------------------------------------------
    |
    | This value is the path where Policies will be generated.
    |
    */
    'policy' => [
        'path' => 'Policies',
        'namespace' => 'Policies',
    ],

    /*
    |--------------------------------------------------------------------------
    | Provider Path
    |--------------------------------------------------------------------------
    |
    | This value is the path where Providers will be generated.
    |
    */
    'provider' => [
        'path' => 'Providers',
        'namespace' => 'Providers',
    ],

    /*
    |--------------------------------------------------------------------------
    | Request Path
    |--------------------------------------------------------------------------
    |
    | This value is the path where Requests will be generated.
    |
    */
    'request' => [
        'path' => 'Http/Requests',
        'namespace' => 'Http\\Requests',
    ],

    /*
    |--------------------------------------------------------------------------
    | Resource Path
    |--------------------------------------------------------------------------
    |
    | This value is the path where Resources will be generated.
    |
    */
    'resource' => [
        'path' => 'Http/Resources',
        'namespace' => 'Http\\Resources',
    ],

    /*
    |--------------------------------------------------------------------------
    | Rule Path
    |--------------------------------------------------------------------------
    |
    | This value is the path where Rules will be generated.
    |
    */
    'rule' => [
        'path' => 'Rules',
        'namespace' => 'Rules',
    ],

    /*
    |--------------------------------------------------------------------------
    | Scope Path
    |--------------------------------------------------------------------------
    |
    | This value is the path where Scopes will be generated.
    |
    */
    'scope' => [
        'path' => 'Data/Models/Scopes',
        'namespace' => 'Data\\Models\\Scopes',
    ],

    /*
    |--------------------------------------------------------------------------
    | Seeder Path
    |--------------------------------------------------------------------------
    |
    | This value is the path where Seeders will be generated.
    |
    */
    'seeder' => [
        'path' => 'seeders',
        'namespace' => 'Database\\Seeders',
    ],

    /*
    |--------------------------------------------------------------------------
    | Test Path
    |--------------------------------------------------------------------------
    |
    | This value is the path where Tests will be generated.
    |
    */
    'test' => [
        'path' => 'tests',
        'namespace' => 'Tests',
    ],

    /*
    |--------------------------------------------------------------------------
    | View Path
    |--------------------------------------------------------------------------
    |
    | This value is the path where Views will be generated.
    |
    */
    'view' => [
        'path' => 'resources/views',
    ],
];
