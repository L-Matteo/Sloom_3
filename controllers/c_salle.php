<?php

require_once "models/salles.php";

class salleController {
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }
}