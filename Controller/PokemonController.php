<?php

class PokemonController
{
    private PDO $db;

    public function __construct()
    {
        $dbName = "pokedex-CF";
        $port = 8889;
        $userName = "root";
        $password = "root";
        try {
            $this->db = new PDO("mysql:host=localhost;dbname=$dbName;port=$port;charset=utf8mb4", $userName, $password);
        } catch (PDOException $error) {
            echo "<p style='color:red'>{$error->getMessage()}</p>";
        }
    }

    public function create(Pokemon $pokemon): bool
    {
        try {
            $req = $this->db->prepare("INSERT INTO `pokemon` (`name`, `description`, `image`, `id_type1`, `id_type2`, `number`) VALUES (:name, :description, :image, :id_type1, :id_type2, :number);");

            $req->bindValue(":name", htmlspecialchars($pokemon->getName()), PDO::PARAM_STR);
            $req->bindValue(":description", htmlspecialchars($pokemon->getDescription()), PDO::PARAM_STR);
            $req->bindValue(":image", $pokemon->getImage(), PDO::PARAM_STR);
            $req->bindValue(":id_type1", $pokemon->getId_type1(), PDO::PARAM_INT);
            $req->bindValue(":id_type2", $pokemon->getId_type2(), PDO::PARAM_INT);
            $req->bindValue(":number", $pokemon->getNumber(), PDO::PARAM_INT);

            $req->execute();
            return true;
        } catch (Exception $error) {
            echo $error->getMessage();
            return false;
        }
    }

    public function getById(int $id): Pokemon
    {
        $req = $this->db->prepare("SELECT * FROM `pokemon` WHERE `id` = :id");
        $req->bindValue(":id", $id, PDO::PARAM_INT);
        $req->execute();
        return new Pokemon($req->fetch());
    }

    public function getAll(): array
    {
        $pokemons = [];
        $req = $this->db->query("SELECT * FROM `pokemon` ORDER BY `number`");
        $req->execute();
        $datas = $req->fetchAll();
        foreach ($datas as $data) {
            array_push($pokemons, new Pokemon($data));
        }
        return $pokemons;
    }

    public function update(Pokemon $pokemon): bool
    {
        try {
            $req = $this->db->prepare("UPDATE `pokemon` SET name = :name, description = :description, image = :image, id_type1 = :id_type1, id_type2 = :id_type2, number = :number WHERE id = :id");

            $req->bindValue(":id", $pokemon->getId(), PDO::PARAM_INT);
            $req->bindValue(":name", $pokemon->getName(), PDO::PARAM_STR);
            $req->bindValue(":description", $pokemon->getDescription(), PDO::PARAM_STR);
            $req->bindValue(":image", $pokemon->getImage(), PDO::PARAM_STR);
            $req->bindValue(":id_type1", $pokemon->getId_type1(), PDO::PARAM_INT);
            $req->bindValue(":id_type2", $pokemon->getId_type2(), PDO::PARAM_INT);
            $req->bindValue(":number", $pokemon->getNumber(), PDO::PARAM_INT);

            $req->execute();
            return true;
        } catch (Exception $error) {
            echo $error->getMessage();
            return false;
        }
    }

    public function delete(int $id): bool
    {
        try {
            $req = $this->db->prepare("DELETE FROM `pokemon` WHERE id = :id");

            $req->bindValue(":id", $id, PDO::PARAM_INT);

            $req->execute();
            return true;
        } catch (Exception $error) {
            echo $error->getMessage();
            return false;
        }
    }
}
