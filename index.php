<?php require("./layout/header.php") ?>

<h3>Liste des Pokémon</h3>
<nav>
  <ul class="sumup">
    <img src="./assets/images/logo.png" alt="Logo Pokédex" width="60px" />
    <li>
      <a class="link" href="#bulbasaur">Bulbizarre</a>
    </li>
    <li>
      <a class="link" href="#ivysaur">Herbizarre</a>
    </li>
    <li>
      <a class="link" href="#venusaur">Florizarre</a>
    </li>
  </ul>
</nav>
<main>
  <section>
    <ol>
      <li id="bulbasaur">
        <a href="https://www.pokepedia.fr/Bulbizarre" target="_blank">
          Bulbizarre
        </a>
        <img src="https://www.pokepedia.fr/images/thumb/e/ef/Bulbizarre-RFVF.png/500px-Bulbizarre-RFVF.png" alt="Bulbizarre" width="180px" />
      </li>
      <li id="ivysaur">
        <a href="https://www.pokepedia.fr/Herbizarre" target="_blank">
          Herbizarre
        </a>
        <img src="https://www.pokepedia.fr/images/thumb/4/44/Herbizarre-RFVF.png/500px-Herbizarre-RFVF.png" alt="Herbizarre" width="180px" />
      </li>

      <li id="venusaur">
        <a href="https://www.pokepedia.fr/Florizarre" target="_blank">
          Florizarre
        </a>
        <img src="https://www.pokepedia.fr/images/thumb/4/42/Florizarre-RFVF.png/500px-Florizarre-RFVF.png" alt="Herbizarre" width="180px" />
      </li>
    </ol>
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

  <video src="./assets/videos/planet.mp4" muted autoplay loop controls>
    Votre navigateur ne supporte la vidéo.
  </video>
  <audio src="./assets/audios/test.mp3" autoplay>
    Votre navigateur ne supporte l'audio.
  </audio>

  <iframe width="560" height="315" src="https://www.youtube.com/embed/oEAuNzWXRjM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

  <iframe width="560" height="315" src="https://www.youtube.com/embed/2IH8tNQAzSs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
</main>
<?php require("./layout/footer.php") ?>