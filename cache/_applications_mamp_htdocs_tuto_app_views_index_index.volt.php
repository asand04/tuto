<div class="container">
    
    <div id="accordion" role="tablist">
    <div class="card">
        <div class="card-header" role="tab" id="headingOne">
            <h5 class="mb-0">
                <a class="collapsed" data-toggle="collapse" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    Filière
                </a>
            </h5>
        </div>

        <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
                <form method="post" action="index/filiere">
                    <div class="form-group">
                        <label for="libfil">Libfil</label>
                        <input type="text" class="form-control" id="validationCustom01" placeholder=" Entrez le libellé de la filière" name="libfil" required autofocus>
                        <small id="passwordHelpInline" class="text-muted">
                            Soyez explicite Svp!!!
                        </small>
                        <button type="submit" class="btn btn-default">
                            Entrer
                        </button>
                    </div>
                </form>
            </div>
        
                <p>
                    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                        Etudiant
                    </button>
                </p>
                <div class="collapse" id="collapseExample">
                    <form method="post" action="index/etudiant">
                        <div class="card card-body">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom01">Nom</label>
                                <input type="text" class="form-control" id="validationCustom01" placeholder="Nom de l'étudiant" name="nom" required autofocus>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom01">Prenom</label>
                                <input type="text" class="form-control" id="validationCustom01" placeholder="Prénom de l'étudiant" name="prenom" required autofocus>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom01">Age</label>
                                <input type="text" class="form-control" id="validationCustom01" placeholder="Age de l'étudiant" name="age" required autofocus>
                            </div>
                        </div>
                
                <button type="submit" class="btn btn-default">
                    Entrer
                </button>
                </form>
            </div>
        </div>
    </div>


</div


</div
