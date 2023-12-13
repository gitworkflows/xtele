<?php
// Ramdom Code Generator_____________________________________________
function random_code(){
    $characters = '123456789ABCDEFGHJKLMNPRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < 8; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
// END______________________________________________________________
?>

