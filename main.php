<?php
include("Utils.php");
$utils = new Utils();
$passowrdDess = "TY6f/TmApx048AVIeVVDh+riV/7tFbmGl83bblO52BeYCHnqcB5VQ7lwEQqAwyLR2yQR/AhsGMWHH3RX6oHaMTZg+mxKFr4OnZostVI6zl2ERG6rdCiHTwbw33vh9fBnvamkaeAGfMqklmSgcjsX7MsaLacke7W1K6lEaLTpRJd5WA8XUiGjbDxFB7DvhuEgqJUu+AguDASKkxCsA46yvix7hbPnGD10adBws2vYFwPQb8g6Q2gUqzz+H825KFKXQnTlUNdvldtxJzKZ6x1EQciufXqN5ODIeV7ctmH8mCkOQCgWw0OyH50ISB5dUE11aVHH8fRQTR4IXf9mgAQZIQ==";

$filename = "./leader.p12";
$passPhrase = "123";

$stringVal="{\"invoiceNo\":\"321017996188\"}";
$aes = $utils->getAESKey($passowrdDess, $filename,$passPhrase);
//$encrypted_string = $utils->encrypt($aes, $stringVal);
$pi_key = $utils->getPrivKey($filename,$passPhrase);

$resp = "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";
$decrypted_string = $utils->decrypt(base64_decode($aes), $resp);
//echo "The Encrypted String is:". $encrypted_string;

echo "The Decrypted String is:" . $decrypted_string;

//$Signature = $utils->sign($encrypted_string,$pi_key);
echo "\n------------\n";
//echo "The signature is ". base64_encode($Signature);
