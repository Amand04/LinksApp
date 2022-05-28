<?php

class TitlesManager extends BaseManager
{

    public function create(Title $title)
    {
        $req = $this->pdo->prepare("INSERT INTO `title` (theme, name, description) VALUES (:theme, :name, :description)");

        $req->bindValue(":theme", $title->getTheme(), PDO::PARAM_STR);
        $req->bindValue(":name", $title->getName(), PDO::PARAM_STR);
        $req->bindValue(":description", $title->getDescription(), PDO::PARAM_STR);


        $req->execute();
    }

    public function update(Title $title)
    {
        $req = $this->pdo->prepare("UPDATE `title` SET  theme = :theme, name = :name, description = :description WHERE id= :id");

        $req->bindValue(":theme", $title->getTheme(), PDO::PARAM_STR);
        $req->bindValue(":name", $title->getName(), PDO::PARAM_STR);
        $req->bindValue(":description", $title->getDescription(), PDO::PARAM_STR);
        $req->bindValue(":id", $title->getId(), PDO::PARAM_INT);

        $req->execute();
    }

    public function delete(int $id)
    {
        $req = $this->pdo->prepare("DELETE FROM `title` WHERE id = :id");

        $req->bindValue(":id", $id, PDO::PARAM_INT);
        $req->execute();
    }

    public function getById(int $id)
    {
        $sql = "SELECT * FROM `title` WHERE id = $id";
        $req = $this->pdo->query($sql);

        /* $req->bindParam(":id", $id, PDO::PARAM_INT);*/
        $data = $req->fetch();

        return new Title($data);
    }

    public function getAll()
    {

        $req = $this->pdo->query("SELECT * FROM title ORDER BY id DESC");
        $titles = array();


        while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
            $titles[] = new Title($data);
        }

        return $titles;
    }
}
