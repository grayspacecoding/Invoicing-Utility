<?
use RobThree\Auth\TwoFactorAuth;
use RobThree\Auth\Providers\Qr\EndroidQrCodeProvider;

class checkadminkey{
    static public function default(){
        $tfa = new TwoFactorAuth(new EndroidQrCodeProvider());
        $validation = $tfa->verifyCode(env->admin_secret, $_POST['AdminKey']);
        if( $validation ){
            http_response_code(200);
        }
        else{
            http_response_code(401);
        }
    }
}

checkadminkey::default();