<?php

class Connector {

    public static function connect() {
        return new PDO("mysql:host=localhost;dbname=binary", "root", "");
    }

}
