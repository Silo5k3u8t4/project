<?php
    $en="jkfuhrgh9urfurguh8987783r";
    function encdat($data,$key){
        $iv=openssl_random_pseudo_bytes(openssl_cipher_iv_length('aes-256-cbc'));
        $endd=openssl_encrypt($data,'aes-256-cbc',$key,0,$iv);
        $enddd=base64_encode($endd);
        $encodediv=base64_encode($iv);
        return array("data"=>$enddd,"iv"=>$encodediv);
    }
    function decdat($encdata,$key,$iv){
        $deddata=base64_decode($encdata);
        $decodediv=base64_decode($iv);
        $decrypted=openssl_decrypt($deddata,'aes-256-cbc',$key,0,$decodediv);
        return $decrypted;
    }
    function en($a,$en)
    {
        $endd=encdat($a,$en);
        return decdat($endd['data'],$en,$endd['iv']);
    }
?>