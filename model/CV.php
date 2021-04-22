<?php

class CV
{
    public $prenom;
    public $nom;
    public $age;
    public $adresse;
    public $email;
    public $tel;
    public $experience;
    public $level;
    public $user_id;

    public function __construct($prenom, $nom, $age, $adresse, $email, $tel, $level, $experience, $user_id)
    {
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->age = $age;
        $this->adresse = $adresse;
        $this->email = $email;
        $this->tel = $tel;
        $this->experience = $experience;
        $this->level = $level;
        $this->user_id = $user_id;
    }

}
