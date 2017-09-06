<?php

use Phalcon\Mvc\Model;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of filiere
 *
 * @author as-andchanou
 */
class filiere extends Model{

    //put your code here
    private $id_fil;
    private $libfil;

    function getId_fil() {
        return $this->id_fil;
    }

    function getLibfil() {
        return $this->libfil;
    }

    function setId_fil($id_fil) {
        $this->id_fil = $id_fil;
    }

    function setLibfil($libfil) {
        $this->libfil = $libfil;
    }

    public function initialize() {
        $this->setSource('filiere');
        $this->hasMany('id_fil', 'etudiant', 'id_fil');
    }

}
