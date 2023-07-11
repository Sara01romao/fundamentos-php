<?php

//METHODS 
//get - exibi os dados na url, vem padrão no form quando não é definido.
//post - não exibi os dados na url



$nome =$_POST['nome'];

$email =$_REQUEST['email']; //request pega o valor indepente do tipo de requisição estiver POST ou GET

echo $nome ;

echo "<br>";

echo $email;


//VALIDAÇÃO

if($nome != '' && strlen($nome) > 3){
    echo "nome correto   $nome ";

}else{
    echo "Nome incorreto";
    
    return; //não deita continuar código a baixo
}
?>