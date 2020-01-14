<?php
if(env('IOS_USER_ENV')=='development'){
    $crt_user_path=app_path().'/apns/user/user.pem';
    $crt_provider_path=app_path().'/apns/provider/user.pem';
}
else{
    $crt_user_path=app_path().'/apns/user/user.pem';
    $crt_provider_path=app_path().'/apns/provider/Driver.pem';
}


return array(

    'IOSUser'     => array(
        'environment' => env('IOS_USER_ENV', 'production'),
        'certificate' => $crt_user_path,
        'passPhrase'  => env('IOS_USER_PUSH_PASS', ''),
        'service'     => 'apns'
    ),
    'IOSProvider' => array(
        'environment' => env('IOS_PROVIDER_ENV', 'production'),
        'certificate' => $crt_provider_path,
        'passPhrase'  => env('IOS_PROVIDER_PUSH_PASS', ''),
        'service'     => 'apns'
    ),
    'AndroidUser' => array(
        'environment' => env('ANDROID_USER_ENV', 'production'),
        'apiKey'      => env('ANDROID_USER_PUSH_KEY', 'yourAPIKey'),
        'service'     => 'gcm'
    ),
    'AndroidProvider' => array(
        'environment' => env('ANDROID_PROVIDER_ENV', 'production'),
        'apiKey'      => env('ANDROID_PROVIDER_PUSH_KEY', 'yourAPIKey'),
        'service'     => 'gcm'
    )

);