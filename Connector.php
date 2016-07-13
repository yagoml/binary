<?php

class Connector {

    public function connect() {
        return new PDO("mysql:host=localhost;dbname=pyramid", "root", "");
    }

}
