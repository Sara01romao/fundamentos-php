<?php
$validacoes = [];
if(count($_POST) > 0){
    

    if(($_POST['nome'] == "")){
        $validacoes[]="Preencha seu nome";
    }


    if(($_POST['email'] == "")){
        $validacoes[]="Preencha seu email";
    }


    if(($_POST['senha'] != $_POST['confirmacao'])){
        $validacoes[]="Senha errada";
    }



}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php if(count($validacoes)):?>

    <ul>
        <?php foreach ($validacoes as $validacao): ?>
          <li><?= $validacao ?></li>
        <?php endforeach; ?>
    </ul>

<?php endif; ?>

<form action="validacao.php" method="POST">
    <div>
        <label for="">Nome</label>
        <input type="text" name="nome" placeholder="Digite seu nome">
    </div>
    <br>
    <div>
        <label for="">Email</label>
        <input type="email" name="email" placeholder="Digite seu email">
    </div>
    <br>
    <div>
         <label for="">Senha</label>
        <input type="text" name="senha" placeholder="Digite sua senha">
    </div>

    <br>
    <div>
         <label for="">Confirmar</label>
        <input type="text" name="confirmacao" placeholder="Confirmar senha senha">
    </div>
    <div>
        <input type="submit"  value="Enviar">
    </div>


  </form>

</body>
</html>