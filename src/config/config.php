<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Temporary File Path
    |--------------------------------------------------------------------------
    |
    | The temporary file path where html and pdf files are stored.
    |
    */

    'temporary_file_path' => storage_path(),

    /*
    |--------------------------------------------------------------------------
    | The url for the base tag
    |--------------------------------------------------------------------------
    |
    | Since the HTML file that is loaded into PhantomJS is loaded from the file system,
    | any relative references to assets will not work. We fix this by adding a base tag
    | to the html file.
    |
    */

    'base_url' => url(),

    /*
    |--------------------------------------------------------------------------
    | Ignore SSL Errors
    |--------------------------------------------------------------------------
    |
    | Ignore SSL errors, such as expired or self-signed certificate errors.
    |
    */

    'ignore_ssl_errors' => false
];