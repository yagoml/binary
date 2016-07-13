<?php

include_once 'Connector.php';

class Model extends Connector {

    public function getAllMembers() {
        $stmt = $this->connect()->prepare('SELECT * FROM distribuidores');
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function getSubMembers($idSup) {
        $stmt = $this->connect()->prepare('SELECT * FROM distribuidores WHERE supervisor = ?');
        $stmt->bindParam(1, $idSup);
        $stmt->execute();
        return $stmt->fetchAll();
    }

}
