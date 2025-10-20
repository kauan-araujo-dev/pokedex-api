<?php
function arrayUrl($url)
{
  $archiveJson = file_get_contents($url);
  $arrayInfos = json_decode($archiveJson, true);

  return $arrayInfos;
}

function infoPokemons()
{
  return arrayUrl("https://pokeapi.co/api/v2/pokemon?limit=100000&offset=0");
}

function namesPokemons()
{
  $infoPokemons = infoPokemons();
  $names = [];
  for ($i = 0; $i < $infoPokemons['count']; $i++) {
    $names[$i] = $infoPokemons['results'][$i]["name"];
  }
  return $names;
}


function optionsPokemon()
{
  $options = "";
  $namesPokemons = namesPokemons();
  foreach ($namesPokemons as $namePokemon) {
    $options = $options . "<option value='$namePokemon'>$namePokemon</option>";
  }

  return $options;
}
function infoPokemon($pokemon)
{
  return arrayUrl("https://pokeapi.co/api/v2/pokemon/$pokemon");
}

function printInfoPokemon($pokemon)
{
  $infoPokemon = infoPokemon($pokemon);

  return "<p>Nome: " . $infoPokemon['name'] . "</p>" .
    "<p>Tipo: " . $infoPokemon['types'][0]['type']['name'] . "</p>" .
    "<img src='" . $infoPokemon['sprites']['front_default'] . "' alt='Foto do pokemon $pokemon'>";


}
?>