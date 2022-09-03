<?php
include_once('viacep.php');
?>


<!DOCTYPE html>
<html lang="pt br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="principal.css">
    <title>Consulta Cep</title>
</head>
<body>
    <form action="." method="post">
        <h2>Digite o CEP para encontrar o endereço</h2>
        <input type="text" name="cep" id="" Digite o CEP value = "<?php echo $address->cep ?? ''?>" maxlength="9">
        <input type="submit" value="Enviar">
        <input type="text" name="rua" id="" placeholder="Rua" value = "<?php echo $address->logradouro?>">
        <input type="text" name="bairro" id="" placeholder="Bairro" value = "<?php echo $address->bairro?>">
        <input type="text" name="cidade" id="" placeholder="Cidade" value = "<?php echo $address->localidade?>">
        <input type="text" name="estado" id="" placeholder="Estado" value = "<?php echo $address->uf?>">
    </form>
    
</body>
</html>