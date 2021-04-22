<?php

class User
{
    public $prenom;
    public $nom;
    public $password;
    public $role;
    public $email;

    public function __construct($prenom, $nom, $role, $email, $password)
    {
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->role = $role;
        $this->email = $email;
        $this->password = $password;
    }
}
