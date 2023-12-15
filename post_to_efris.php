<?php

use models\Items;

include ("models/items.php");
include("Utils.php");
function post ()
{

    $utils = new Utils();

    $item = new  Items(
        "102",
"CFB 300ml",
"0130",
 "UN",
"350.99",
"101",
"96010101",
"1",
"10",
"102",
"102",
"",
"",
"",
"",
"",
"102"
    );

    $passowrdDess = "TY6f/TmApx048AVIeVVDh+riV/7tFbmGl83bblO52BeYCHnqcB5VQ7lwEQqAwyLR2yQR/AhsGMWHH3RX6oHaMTZg+mxKFr4OnZostVI6zl2ERG6rdCiHTwbw33vh9fBnvamkaeAGfMqklmSgcjsX7MsaLacke7W1K6lEaLTpRJd5WA8XUiGjbDxFB7DvhuEgqJUu+AguDASKkxCsA46yvix7hbPnGD10adBws2vYFwPQb8g6Q2gUqzz+H825KFKXQnTlUNdvldtxJzKZ6x1EQciufXqN5ODIeV7ctmH8mCkOQCgWw0OyH50ISB5dUE11aVHH8fRQTR4IXf9mgAQZIQ==";

    $filename = "./leader.p12";
    $passPhrase = "123";

    $string_content = json_encode($item->toArray());

    $aes = $utils->getAESKey($passowrdDess, $filename,$passPhrase);
    $private_key = $utils->getPrivKey($filename,$passPhrase);
    $encrypted_content = $utils->encrypt(base64_decode($aes), $string_content);
    $signature = $utils->sign($encrypted_content,$private_key);
echo ($signature);
}

post();
//
//$api_url = 'https://example.com/api';
//
//// Data to be sent in the POST request
//$post_data = array(
//    'key1' => 'value1',
//    'key2' => 'value2',
//    // Add more key-value pairs as needed
//);
//
//// Initialize cURL session
//$ch = curl_init($api_url);
//
//// Set cURL options
//curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Return response as a string
//curl_setopt($ch, CURLOPT_POST, true); // Set as POST request
//curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data); // Set POST data
//
//// Execute cURL session and store the response
//$response = curl_exec($ch);
//
//// Check for cURL errors
//if (curl_errno($ch)) {
//    echo 'Curl error: ' . curl_error($ch);
//}
//
//// Close cURL session
//curl_close($ch);
//
//// Handle the response as needed
//echo $response;
?>
