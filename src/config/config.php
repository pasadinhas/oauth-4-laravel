<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | oAuth Config
    |--------------------------------------------------------------------------
    */

    /**
     * Storage
     */
    'storage'   => 'Session',

    /**
     * Consumers
     */
    'consumers' => array(

        /**
         * Facebook
         */
        'Facebook' => array(
            'client_id'     => '',
            'client_secret' => '',
            'scope'         => array(),
        ),

        /**
         * FenixEdu
         */
        'FenixEdu' => [
            'client_id'         => '', // your app client id
            'client_secret'     => '', // your app client secret
            'redirect_url'      => '', // your app redirect url
            'automatic_refresh' => true // or false if you want to refresh the token explicitly
        ]

    )

);