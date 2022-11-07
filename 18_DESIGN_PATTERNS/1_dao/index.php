<?php

    include_once("db.php");
    include_once("dao/CarDAO.php");
    $carDao = new CarDAO($conn);

    $cars = $carDao->findAll();

?>
<style>
    table{
        border: 1px solid purple;
        border-collapse: collapse;
    }
    table td{
        border: 1px solid purple;
        padding: 3px 5px;
    }
</style>
<h1>Insira um carro</h1>
<form action="process.php" method="POST">
    <div>
        <label for="brand">Marca do carro</label>
        <input type="text" name="brand" placeholder="Insira a marca" required>
    </div>
    <div>
        <label for="km">Kilometragem</label>
        <input type="text" name="km" placeholder="Insira a kilometragem" required>
    </div>
    <div>
        <label for="color">Marca do carro</label>
        <input type="text" name="color" placeholder="Insira a cor" required>
    </div>
    <input type="submit" value="Salvar">
</form>
<table >
    <thead>
        <tr>
        <td>Marca</td>
        <td>Kilometragem</td>
        <td>Cor</td>
        </tr>
    </thead>
    <?php foreach($cars as $car):?>
        <tbody>
        <tr>
            <td><?= $car->getBrand()?></td>
            <td><?= $car->getKm()?></td>
            <td><?= $car->getColor()?></td>
        </tr>
            
        </tbody> 
    <?php endforeach;?>     
</table>    