<?php

use Phalcon\Mvc\Controller;

class IndexController extends Controller {

    public function indexAction() {
        
    }

    public function filiereAction() {
        if ($this->request->isPost()) {
            $libfil = $this->request->getPost("libfil");
        }

        $newfiliere = new filiere();
        $newfiliere->libfil = $libfil;
        // Store and check for errors
        $success = $newfiliere->save();
        if ($success) {
            $this->flash->success("Enregistrement effectuer avec succès");
            return $this->response->redirect("http://localhost:8888/tuto", true);
        } else {
            $this->flash->error("Enregistrement non effectuer veuiller vérifier le formulaire");
        }

        //echo "hello";
    }

    public function etudiantAction() {
        if ($this->request->isPost()) {
            $nom = $this->request->getPost("nom");
            $prenom = $this->request->getPost("prenom");
            $age = $this->request->getPost("age");
            $id_fil = $this->request->getPost("id_fil");
        }

        $newetudiant = new etudiant();
        $newetudiant->setNom($nom) ;
        $newetudiant->setPrenom($prenom);
        $newetudiant->setAge($age);
        $newetudiant->setId_fil($id_fil);
        // Store and check for errors
        $success = $newetudiant->save();
        if ($success) {
            $this->flash->success("Enregistrement effectuer avec succès");
        } else {
            $this->flash->error("Enregistrement non effectuer veuiller vérifier le formulaire");
        }
    }

    public function deleteAction() {

        $req1 = filiere::find();
        $this->view->tab = $req1;
        
        if ($this->request->isPost()) {
            $liste = $this->request->getPost("liste");
            //die(var_dump($liste));
            
            foreach ($liste as $value){
                $req = filiere::findById_fil($value);
                $req->delete();
            }
            
            if ($req) {
                $this->flash->success("Supression effectue avec sucess");
                return $this->response->redirect("http://localhost:8888/tuto", true);
                
            } else {
                $this->flash->error("Echec de supression");
            }
        }
    }
    
    public function etudiantdeleteAction() {

        $req1 = etudiant::find();
        $this->view->tab = $req1;
        
        if ($this->request->isPost()) {
            $liste = $this->request->getPost("liste");
            //die(var_dump($liste));
            
            foreach ($liste as $value){
                $req = etudiant::findById_fil($value);
                $req->delete();
            }
            
            if ($req) {
                $this->flash->success("Supression effectue avec sucess");
                return $this->response->redirect("http://localhost:8888/tuto", true);
                
            } else {
                $this->flash->error("Echec de supression");
            }
        }
    }
    
    public function modifierAction() {
        
    }
    
    public function updateAction() {
        if ($this->request->isPost()) {
            $id_fil = $this->request->getPost("id_fil");
            $mod = $this->request->getPost("newlibfil");
            $req = filiere::findById_fil($id_fil);
            $req->update(['libfil' => $mod]);
            if ($req){
                $this->flash->success("Mise à jour effectué avec sucess");
                
                return $this->response->redirect("http://localhost:8888/tuto", true);
                
            } else {
                $this->flash->error("Echec de mise à jour");
            }
        }
        
    }
    public function dashboardAction() {
        $etudiant = etudiant::find();
        $this->view->tab = $etudiant;
    }
    
}