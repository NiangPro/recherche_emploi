<?php

class Emploi
{
    public $titre;
    public $description;
    public $user_id;

    public function __construct($titre, $description, $user_id)
    {
        $this->titre = $titre;
        $this->description = $description;
        $this->user_id = $user_id;
    }
}
