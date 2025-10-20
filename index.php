<?php

require_once("functions.php");

$pokemon;
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $pokemon = $_POST['pokemon'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokedex</title>
</head>
<body>
    <form action="" method="post">
        <label for="pokemon">ESCOLHA UM POKEMON</label>
        </label>
         <select name="pokemon" id="pokemon">
                <option value=""></option>
                <?= optionsPokemon(); ?>
            </select>
            <input type="submit" value="BUSCAR POKEMON">
    </form>

    <div>
        <?=printInfoPokemon($pokemon)?>
    </div>
</body>
</html>