<?php

require("./layout/header.php");

if ($_POST):
  echo "Vous venez de créer le Pokémon n°{$_POST['number']}, nommé {$_POST['name']}.<br>Voici son image"; ?>
  <img src="<?php echo $_POST["image"] ?>" alt="<?= $_POST['name'] ?>">
<?php endif ?>

<main class="container">
  <h3>Créer un Pokémon</h3>
  <form method="POST">
    <label for="number">Numéro</label>
    <input type="number" min="1" max="1050" name="number" id="number" placeholder="Le numéro du Pokémon" required value="1" class="form-control" />

    <label for="name">Nom</label>
    <input type="text" minlength="3" maxlength="50" name="name" id="name" placeholder="Le nom du Pokémon" required class="form-control" />

    <label for="image">Image</label>
    <input type="text" minlength="50" name="image" id="image" placeholder="L'image du Pokémon" required class="form-control" />
    <label for="type1">Type 1</label>
    <input type="radio" name="type1" id="fire" value="Feu" />
    <label for="fire">Feu</label>
    <input type="radio" name="type1" id="water" value="Eau" />
    <label for="water">Eau</label>
    <input type="radio" name="type1" id="grass" value="Plante" />
    <label for="grass">Plante</label>

    <label for="type2">Type 2</label>
    <select class="form-control" name="type2" id="type2">
      <option value="ice">Glace</option>
      <option value="dark" selected>Ténèbre</option>
      <option value="psy">Psy</option>
    </select>

    <label for="attacks">Attaques</label>
    <input type="checkbox" checked name="attacks" id="tackle" value="Charge" />
    <label for="tackle">Charge</label>
    <input type="checkbox" checked name="attacks" id="growl" value="Rugissement" />
    <label for="growl">Rugissement</label>
    <input type="checkbox" name="attacks" id="splash" value="Trempette" />
    <label for="splash">Trempette</label>
    <input type="checkbox" name="attacks" id="hyper-beam" value="Ultralaser" />
    <label for="hyper-beam">Ultralaser</label>
    <br>
    <input class="btn btn-success mt-3" type="submit" value="Créer" />
  </form>
</main>
<?php require("./layout/footer.php") ?>