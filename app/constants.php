<?php

define('USE_S3', true);
define('S3_ACCESS_KEY', '');
define('S3_SECRET_KEY', '');

define('S3_BUCKET', '');
define('S3_PATH', '');

define('S3_REGION', 'us-east-1');
define('S3_ENDPOINT', 'http://' . S3_BUCKET . '.s3-website-'.S3_REGION.'.amazonaws.com');

// utilizar na unicesumar apenas
// https://curl.haxx.se/docs/caextract.html
ini_set('curl.cainfo', "C:\tools\xampp\php\extras\ssl\cacert.pem");

?>