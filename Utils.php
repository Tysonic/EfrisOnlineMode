<?php
class Utils{
    public function getPrivKey($filename,$passPhrase) {
        // read private key
        $cert_store = file_get_contents($filename);
        openssl_pkcs12_read($cert_store, $cert_info, $passPhrase);
        return $cert_info['pkey'];
    }

    public function getAESKey($passowrdDess,$filename,$passPhrase){
        $utils = new Utils();
        $pi_key = $utils->getPrivKey($filename,$passPhrase);
        openssl_private_decrypt(base64_decode($passowrdDess), $key, $pi_key);
        return $key;
    }

    public function encrypt($key,$stringVal){
        $encrypted_string = openssl_encrypt($stringVal, "AES-128-ECB",
            base64_decode($key));
        return $encrypted_string;
    }

    public function decrypt($key,$encrypted_string)
    {

        $decrypted_string = openssl_decrypt($encrypted_string, "AES-128-ECB",
            $key);
        return $decrypted_string;
    }
    public function  sign ($encrypted_string,$pi_key){
        openssl_sign($encrypted_string, $Signature,$pi_key );
        return $Signature;
    }
}
