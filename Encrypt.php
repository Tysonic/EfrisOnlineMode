<?php
function getAESKey()
{
    $private_key = '-----BEGIN ENCRYPTED PRIVATE KEY-----
MIIE6jAcBgoqhkiG9w0BDAEEMA4ECKH4GxnDkjHqAgIF8QSCBMjkOSQFpGSX1E88
jSYJDbiVT72OWtUaaAdbniOEcrDj/rp/qQDmMaWatR48XxNpOAXQcRdHuB8ZFnS3
7CYgwb1ukCxz7HFeEXNaNAtBiLAtIPJTwhjgsIJsb7MW90pmP6Jc5r/7CqpFc+H+
fcqq6bF0sl4rKdTdHw+0inBT0z5sqG2aIA68wo2mpfnU3EPaqXwT9xjUIb1F76Ap
KvH7ZXpeZqbZlADWzGkoqBsYQYCdUmlofZEXq9m04hbswMIr1AhhFjySllveBpVT
6zajqCbK/Ez7/dvlSmNfy+vJuwb+PCFhhlD5kpB9AcUeF7tL3GQUeFCIY+HFcL9+
2zm1vyGKt41Iv20FI9DaxWlrviWOm5Tc5vSY9v3U1wPRivhTHUQByE40IsUr6khM
W3756aXKDjYEZR8rct9024zggO9OQpqU92l6IaSJfBDEDGi3pxqkjgNKJUHPJeFL
rcanQQpBO1xJuUrIKnTDoL/rozEavgCtrZHMS+TPORjtDsgxp2BB0t2c/5CKWi1z
0X7mopsW9n8wpxE6kjSQ59MkSbYDyityqitr6a/XDkzKyDz7lzZWncN32P8My2px
xjDMr4URnNQdQwoGzlMo+ODwYPDOHj4W7y1IlhKD+RvZl1xZsPteC6Dkz8vZ/Yzw
MlS/poE+be+3P3R41Ltkqy1GTZPxNwYXPFF3kEiMqXeM6R93DPeUkgRKdVvwP3M0
0gaJnY4q3HKjNomoFDRTL6/o5es7/SZYF+yuV3/FCueR7M7tV7r8myZTEerq/IVH
v0Vkch/S4D+R/8uMocpJJh6S9Mvxb/jRx+bV2LJbrJhtT7gaVEod9tXfXTxEZqg0
slqkJNZnoSh2JxcKZX0GzNi8DWkRAZaSsmUVm12ZkmaK7F7X75O9/4Pl0ti1WtFO
hVNXALunOkz4QViLOzQNwgzePNqKJn4CWZvAzUJbNN38bCDXPy1hcdHtX0JslK2Z
6NseA0c7gM4kHnUwmPfqsM78VaXbk+z5lEbVOAfhW7tF2NxiiwLD3TaddwJk56Z3
J2CcMNiIK2bkmkG3/+RLeeybbXsDi+j1sBt7lruSRwDe6k/jf5S++1at/n1S7c6r
+5/iCCTa2kgxX0Db4BH8+kjLEBHrrIbY7vX6MpbxZ49KEM/UlFkgOcfIVhgq5xVT
T3C2/0TSz1xPyH/YsGAaKg5xSzEK/KWW23hZ0uquTN/wRNP4sNF3lhLlZKq+QwY6
1xXRcRKjQZzHZZRzvybvk2/3cxjtASYuMPHVh1JL1NfgxfCsejRFG8pmyqXUBlED
cWxP0fgtoTRvGXW55LBCToPO3/sOPM0CZFnbvrtIOQ4wRTzOb0M44wdWvCsVDe/r
LTe/mqnEY31naXGp92ur5BFgY5SMcDUB9YcLLfBhQ9z2/qhw4SKAw2NucY+R6pwu
NTaM4PAm+sU7zt2UZoT7k4yUd5ID7ApEfRZtl96/Fz1Go8qrhRCvjwLOFbTH3vz8
aI2wf5nlxcbj6y/cw9VkS6ly727zSFq4o0K2kAvN7YD6xYdyj9U0E2CYLfXb2/WX
qBGAQyPHXS3Xv/PrLsjA8dr2NseBeR5R7JcbUTobDyrZm7wlKAxXaRtueLXCIbrg
1qEmRvbEp0KwEQ2FBWI=
-----END ENCRYPTED PRIVATE KEY-----
';


    //$pi_key = openssl_pkey_get_private($private_key, '123');//This function can be used to determine whether the private key is available, and the available return resource id Resource id
    $pi_key = getPrivKey();//This function can be used to determine whether the private key is available, and the available return resource id Resource id

    $encrypted = "yxQQSoW8UxfjGCvxvgHNkwsWfmRw4ZQLax2bRS0QkyqwIwQC81u4QDhdcnx3KWJXmtJlXa4aN9n4sLI7KAe/W/lyVMvCEUdfZLF6BE6hxJsWDj2vV8clvYQNVl3hNzOIblovO2eg4yGoX/snZGpETdgyiuatZf4nCqRCMncJeTalkQqcNuLOQ4EhHxlgLMftHjG6Bc+9jgdefSh6Pi1u1ZbaMI2mKgbSSswBs08mjgLnIEd3VgtHvW1lLBTUFRD7pdzarO6yE5JgZuyWlAnGBCMXDrhEx7KoeB3p4haKzG3rysvOWe+bhxi+NeeWq3CR7u0BU03/kH2AFDk7tvt89A==";

    openssl_private_decrypt(base64_decode($encrypted), $key, $pi_key);
    echo $key, "\n";

//Encryption
    //$data = ;
    //$original_string = ; // Plain text/String
    //$cipher_algo = ; //The cipher method, in our case, AES
// Use openssl_encrypt() encrypt the given string
    $encrypted_string = openssl_encrypt("{\"invoiceNo\":\"321017996188\"}", "AES-128-ECB",
        base64_decode($key));

// Use openssl_decrypt() to decrypt the string
    $decrypted_string=openssl_decrypt ($encrypted_string, "AES-128-ECB",
        $key);

//Display Strings
    echo "The Encrypted String is:". $encrypted_string ;
    echo "\n------------\n";
    echo "The Decrypted String is:" . $decrypted_string;

    openssl_sign($encrypted_string, $Signature,$pi_key );
    echo "\n------------\n";
    echo "The signature is ". base64_encode($Signature);
}
getAESKey();