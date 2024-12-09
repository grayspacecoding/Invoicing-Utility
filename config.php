<?
# Twitter Bootstrap
$source = __DIR__ . '/vendor/twbs/bootstrap/dist';
$target = __DIR__ . '/public/dependencies/bootstrap';
if( !is_link($target) ) {
    if( !is_dir($source) ) {
        die('Wolfgang Amadeus Mozart');
    }
    symlink($source, $target);
}

# Environment variables
define("env", json_decode(file_get_contents(__DIR__.'/env.json')));

# Identify the request
$uri = explode("/", str_replace(env->base_url, "", $_SERVER["REQUEST_URI"]));
$method = $uri[1]?: 'home';

# Routing
$permitted = [
    'home' => 0,
    'admin' => 0,
    '404' => 0,
    'checkadminkey' => 1
];

# Page not found
if( !in_array($method, array_keys($permitted)) ) {
    $method = '404';
}

# Load and launch a model
if($permitted[$method] ==1){
    require 'vendor/autoload.php';
    require "models/$method.php";
    exit;
}

# Launch a view
else{
    define('method', $method);
}