<?php

include_once 'Connector.php';
$connector = new Connector();

class Model extends Connector {

    public static function getAllMembers() {
        $stmt = Connector::connect()->prepare('SELECT * FROM distribuidores');
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public static function getSubMembers($idSup) {
        $stmt = Connector::connect()->prepare('SELECT * FROM distribuidores WHERE supervisor = ?');
        $stmt->bindParam(1, $idSup);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public static function getLevel($bonus) {
        $levels = [
            'Distribuidor' => 0,
            'Bronze' => 500,
            'Prata' => 1000,
            'Ouro' => 3000,
            'Diamante' => 10000
        ];
        $firstLvl = 'Distribuidor';

        foreach ($levels as $lvl => $minScore) {
            if ($bonus < $minScore) {
                return $firstLvl;
            } elseif ($bonus === $minScore || $lvl === 'Diamante') {
                return $lvl;
            }
        }
    }

    public static function register($member) {
        $stmt = $GLOBALS['connector']->connect()->prepare("INSERT INTO distribuidores (supervisor, nome, lado) VALUES (?, ?, ?)");
        $stmt->bindParam(1, $member['supervisor']);
        $stmt->bindParam(2, $member['nome']);
        $stmt->bindParam(3, $member['lado']);
        return $stmt->execute();
    }

    public static function delete($member) {
        $stmt = $GLOBALS['connector']->connect()->prepare("DELETE FROM distribuidores WHERE id=?");
        $stmt->bindParam(1, $member['delete']);
        return $stmt->execute();
    }

}
