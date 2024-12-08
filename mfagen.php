<?
require 'vendor/autoload.php';
use RobThree\Auth\TwoFactorAuth;
use RobThree\Auth\Providers\Qr\EndroidQrCodeProvider;
$tfa = new TwoFactorAuth(new EndroidQrCodeProvider());

$secret = $tfa->createSecret();

$env = json_decode(file_get_contents("env.json"));
$env->admin_secret = $secret;
$handle = fopen("env.json", "w");
fwrite($handle, json_encode($env, JSON_PRETTY_PRINT));
fclose($handle);

$img = $tfa->getQRCodeImageAsDataUri($env->company_handle.' Admin', $secret);
$b64 = explode(',', $img)[1];
$handle = fopen("qrcode.png", "wb");
fwrite($handle, base64_decode($b64));
fclose($handle);

echo "\nScan the QR code at qrcode.png with your authenticator app, or use this secret key: $secret\n\n";