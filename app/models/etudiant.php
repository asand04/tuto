<?php

use Phalcon\Mvc\Model;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of etudiant
 *
 * @author as-andchanou
 */
class etudiant extends Model {

    //put your code here
    private $id;
    private $nom;
    private $prenom;
    private $age;
    private $id_fil;

    function getId() {
        return $this->id;
    }

    function getNom() {
        return $this->nom;
    }

    function getPrenom() {
        return $this->prenom;
    }

    function getAge() {
        return $this->age;
    }

    function getId_fil() {
        return $this->id_fil;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    function setAge($age) {
        $this->age = $age;
    }

    function setId_fil($id_fil) {
        $this->id_fil = $id_fil;
    }

    public function initialize() {
        $this->setSource('etudiant');
        $this->belongsto('id', 'filiere', 'id_fil');
    }

}
