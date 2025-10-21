<?php

require_once("functions.php");

$pokemon = "";
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $pokemon = $_POST['pokemon'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Pokedex</title>
</head>
<body>
    <h1>Pokédex</h1>
    <div id="container-pokedex">
    <form action="" method="post">
       <div>
         <label for="pokemon">ESCOLHA UM POKEMON</label>
        </label>
         <select name="pokemon" id="pokemon">
                <option value=""></option>
                <?= optionsPokemon(); ?>
            </select>
       </div>
            <input type="submit" value="BUSCAR POKEMON">
    </form>

    <div id="info-pokemon">
        <?php if($pokemon !== ""){
            echo printInfoPokemon($pokemon);
        }?>
    </div>
    </div>
</body>
</html>