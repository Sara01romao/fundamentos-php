
<?php

echo '<pre>';

var_dump($_FILES);

$photos = $_FILES['photos'];


for($i = 0; $i < count($photos['name']); $i++){
    if(move_uploaded_file($photos['tmp_name'][$i], $photos['name'][$i])){
        echo "Sucesso ao mover o arquivo {$i}";
    }else{
        echo "Falha ao mover o arquivo {$i}";
    }

}



?>