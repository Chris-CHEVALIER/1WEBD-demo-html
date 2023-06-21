<?php

require "./layout/header.php";

$pokemonController->delete($_GET["id"]);

echo "<script>window.location.href='./index.php'</script>";
