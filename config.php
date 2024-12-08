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
];
if( !in_array($method, array_keys($permitted)) ) {
    $method = '404';
}

define('method', $method);