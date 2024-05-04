<?php 
return [ 
    'client_id' => env('PAYPAL_CLIENT_ID',''),
    'secret' => env('PAYPAL_SECRET',''),
    'settings' => array(
        'mode' => env('PAYPAL_MODE','sandbox'),
        'http.ConnectionTimeOut' => 30,
        'log.LogEnabled' => true,
        'log.FileName' => storage_path() . '/logs/paypal.log',
        'log.LogLevel' => 'ERROR'
    ),
];
/*

return [ 
    'client_id' => env('PAYPAL_CLIENT_ID','AREB4rMa7yWvVIjNj9wYRHDOeO0-KG8ertgjD62sX5sD-oaqH2XK7lk3EJPfRFAAoe-7Hn8NcxCm1zhQ'),
    'secret' => env('PAYPAL_SECRET','EORjbys6HuDlsREQfvn2J97wwrBZkN8zCLFCPfp_Z83EGySHgoZ0CGAeMMqBX-eOq1AB-ONOP9tN7VWL'),
    'settings' => array(
        'mode' => env('PAYPAL_MODE','live'),
        'http.ConnectionTimeOut' => 30,
        'log.LogEnabled' => true,
        'log.FileName' => storage_path() . '/logs/paypal.log',
        'log.LogLevel' => 'ERROR'
    ),
];

*/