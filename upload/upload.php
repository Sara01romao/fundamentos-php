<?php

 
$photo =$_FILES['photo'];

$path = 'imgs/';

//para pasta img
if(move_uploaded_file($photo['tmp_name'], $path . $photo['name'])){
    echo 'Sucesso!';
}else{
    echo 'Falha';
}




// if(move_uploaded_file($photo['tmp_name'], $photo['name'])){
//     echo 'Sucesso!';
// }else{
//     echo 'Falha';
// }








?>