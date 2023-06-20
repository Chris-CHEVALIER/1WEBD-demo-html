<?php

require("./layout/header.php");

// $pikachu->setNumber(26)->setName("Raichu");

if ($_POST) :
  echo "Vous venez de créer le Pokémon n°{$_POST['number']}, nommé {$_POST['name']}.<br>Voici son image : "; ?>
  <img width="120px" src="<?php echo $_POST["image"] ?>" alt="<?= $_POST['name'] ?>">


<?php
  if ($_POST["id_type2"] === "0") {
    $_POST["id_type2"] = NULL;
  }
  $pokemonController->create(new Pokemon($_POST));
  echo "<script>window.location.href='index.php'</script>";
endif
?>

<main class="container">
  <h3>Créer un Pokémon</h3>
  <form method="POST">
    <label for="number">Numéro</label>
    <input type="number" min="1" max="1050" name="number" id="number" placeholder="Le numéro du Pokémon" required value="1" class="form-control" />

    <label for="name">Nom</label>
    <input type="text" minlength="3" maxlength="50" name="name" id="name" placeholder="Le nom du Pokémon" required class="form-control" />

    <label for="image">Image</label>
    <input type="url" minlength="50" name="image" id="image" placeholder="L'image du Pokémon" required class="form-control" />

    <label for="id_type1">Type 1</label>
    <input type="radio" checked name="id_type1" id="grass" value="1" />
    <label for="grass">Plante</label>
    <input type="radio" name="id_type1" id="psy" value="2" />
    <label for="water">Psy</label>
    <input type="radio" name="id_type1" id="electrik" value="3" />
    <label for="fire">Electrik</label><br>

    <label for="id_type2">Type 2</label>
    <select class="form-control" name="id_type2" id="id_type2">
      <option value="0">-</option>
      <option value="1">Plante</option>
      <option value="2">Psy</option>
      <option value="3">Electrik</option>
    </select>

    <label for="description">Description</label>
    <textarea name="description" id="description" class="form-control"></textarea>
    <br>
    <input class="btn btn-success mt-3" type="submit" value="Créer" />
  </form>
</main>
<?php require("./layout/footer.php") ?>