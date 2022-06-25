<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@designermadsen.com
     * Description:
     * Tags: 
     * License: MIT License
        * (https://github.com/KentVejrupMadsen/EASV.Exam.2.Backend/blob/main/License.md)
        * (https://opensource.org/licenses/MIT)
     * Copyright: Kent vejrup Madsen, 2022
     */
    use Illuminate\Support\Str;

	
    return 
    [
        'default' => env( 'DB_CONNECTION', 'mysql' ),
        'connections' =>
        [
            'mysql' =>
            [
                'driver' => 'mysql',
                'url' => env( 'DATABASE_URL' ),
                'host' => env( 'DB_HOST', '127.0.0.1' ),
                'port' => env( 'DB_PORT', '3306' ),
                'database' => env( 'DB_DATABASE', 'forge' ),
                'username' => env( 'DB_USERNAME', 'forge' ),
                'password' => env( 'DB_PASSWORD', '' ),
                'unix_socket' => env( 'DB_SOCKET', '' ),
                'charset' => 'utf8mb4',
                'collation' => 'utf8mb4_unicode_ci',
                'prefix' => '',
                'prefix_indexes' => true,
                'strict' => true,
                'engine' => null,
                'options' => extension_loaded( 'pdo_mysql' ) ? array_filter([
                    PDO::MYSQL_ATTR_SSL_CA => env( 'MYSQL_ATTR_SSL_CA' ),
                ]) : [],
            ],
        ],
        'migrations' => 'migrations',
        
        'redis' =>
        [
            'client' => env( 'REDIS_CLIENT', 'predis' ),

            'options' =>
            [
                'cluster' => env( 'REDIS_CLUSTER', 'redis' ),
                'prefix' => env( 'REDIS_PREFIX', Str::slug( env( 'APP_NAME', 'laravel' ), '_' ).'_database_' ),
            ],

            'default' =>
            [
                'scheme'=>'tls',
                'url' => env( 'REDIS_URL' ),
                'host' => env( 'REDIS_HOST', '127.0.0.1' ),
                'username' => env( 'REDIS_USERNAME', 'default' ),
                'password' => env( 'REDIS_PASSWORD' ),
                'port' => env( 'REDIS_PORT', '6379' ),
                'database' => env( 'REDIS_DB', '0' ),
            ],

            'cache' =>
            [
                'url' => env( 'REDIS_URL' ),
                'host' => env( 'REDIS_HOST', '127.0.0.1' ),
                'username' => env( 'REDIS_USERNAME' ),
                'password' => env( 'REDIS_PASSWORD' ),
                'port' => env( 'REDIS_PORT', '6379' ),
                'database' => env( 'REDIS_CACHE_DB', '1' ),
            ],
        ],
    ];
?>
