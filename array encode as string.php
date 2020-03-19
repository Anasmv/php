<?php

$orders  = array("name", "price", "qty");
echo $enc=  encode_arr($orders);
//encript data 
echo '<br>';
echo '<pre>';
print_r(decode_arr($enc));
echo '</pre>';
function encode_arr($data) {
    return base64_encode(serialize($data));
}

function decode_arr($data) {
    return unserialize(base64_decode($data));
}
?>
