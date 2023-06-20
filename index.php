<?php require("./layout/header.php");

/* $pokemon = new Pokemon([
  "id" => 3,
  "number" => 25,
  "name" => "Pikachu",
  "id_type1" => 3,
  "type2" => NULL,
  "image" => "https://upload.wikimedia.org/wikipedia/en/a/a6/Pok%C3%A9mon_Pikachu_art.png",
  "description" => "Ce Pikachu porte la casquette de son partenaire. Elle symbolise les liens étroits qu'ils ont tissés lors de leurs aventures à travers diverses régions."
]); */

$pokemons = $pokemonController->getAll();
?>

<main class="container">
  <h3>Liste des Pokémon</h3>
  <section class="d-flex gap-5 flex-wrap">
    <?php foreach ($pokemons as $pokemon) : ?>
      <div class="card" style="width: 18rem;">
        <img src="<?= $pokemon->getImage() ?>" class="card-img-top" alt="<?= $pokemon->getName() ?>">
        <div class="card-body">
          <h5 class="card-title"><?= $pokemon->getName() ?></h5>
          <p class="card-text"><?= $pokemon->getDescription() ?></p>
          <a href="#" class="btn btn-warning">Modifier</a>
        </div>
      </div>
    <?php endforeach ?>
  </section>

  <section>
    <h3>Liste des types</h3>
    <table>
      <tr>
        <th>Type</th>
        <th>Couleur</th>
      </tr>
      <tr>
        <td>Feu</td>
        <td style="background-color: #ee8130"></td>
      </tr>
      <tr>
        <td>Eau</td>
        <td style="background-color: #6390f0"></td>
      </tr>
      <tr>
        <td>Plante</td>
        <td style="background-color: #7ac74c"></td>
      </tr>
    </table>
  </section>

  <!--
  <video src="./assets/videos/planet.mp4" muted autoplay loop controls>
    Votre navigateur ne supporte la vidéo.
  </video>
  <audio src="./assets/audios/test.mp3" autoplay>
    Votre navigateur ne supporte l'audio.
  </audio> 

  <iframe width="560" height="315" src="https://www.youtube.com/embed/oEAuNzWXRjM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

  <iframe width="560" height="315" src="https://www.youtube.com/embed/2IH8tNQAzSs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    -->
</main>
<?php require("./layout/footer.php") ?>