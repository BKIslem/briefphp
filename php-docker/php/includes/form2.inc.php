<h2 class='text-center'>Ajouter plus de données</h2>
<form method="post" action="../index.php" enctype="multipart/form-data">
<div class='row'>

    <div class='card col-md-7 mx-auto my-1'>
          <br>
          <input type="text" class="form-control" name="prenom" id="prenom" placeholder="Prénom" required>
          <br>
          <input type="text" class="form-control" name="nom" id="nom" placeholder="Nom" required>
          <br>
          <label for="nom">Age (18 à 70 ans)</label>
          <input type="number" name="age" id="typeNumber" class="form-control" placeholder="Renseignez votre age" min="18" max="70" required>
          <br>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Taille (1,26m à 3m)</span>
            </div>
              <input type="number" name="taille" id="typeNumber" class="form-control" step="0.01" min="1.26" max="3.00" required>
            <div class="input-group-append">
              <span class="input-group-text">m</span>
            </div>
          </div>
          
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="radio" id="radio1" value="Women" required>
            <label class="form-check-label" for="radio1">Femme</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="radio" id="radio2" value="Man" required>
            <label class="form-check-label" for="radio2">Homme</label>
        </div>
    </div>
        <div class='card col-md-4 mx-auto my-1 '>
            <h3>Connaissances</h3>
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name="HTML" value="HTML" id="defaultCheck1" require>
            <label class="form-check-label" for="defaultCheck1">HTML</label>
            </div>
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name="CSS" value="CSS" id="defaultCheck2">
            <label class="form-check-label" for="defaultCheck1">CSS</label>
            </div>
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name="JavaScript" value="JavaScript" id="defaultCheck3">
            <label class="form-check-label" for="defaultCheck1">JavaScript</label>
            </div>
            <div class="form-check">
            <input class="form-check-input" type="checkbox" value="PHP" name="PHP" id="defaultCheck4">
            <label class="form-check-label" for="defaultCheck1">PHP</label>
            </div>
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name="MySQL" value="MySQL" id="defaultCheck5">
            <label class="form-check-label" for="defaultCheck1">MySQL</label>
            </div>
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name="Bootstrap" value="Bootstrap" id="defaultCheck6">
            <label class="form-check-label" for="defaultCheck1">Bootstrap</label>
            </div>
            <div class="form-check">
            <input class="form-check-input" type="checkbox" value="Symphony" name="Symphony" id="defaultCheck7">
            <label class="form-check-label" for="defaultCheck1">Symphony</label>
            </div>
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name="React" value="React" id="defaultCheck8" >
            <label class="form-check-label" for="defaultCheck1">React</label>
            
            </div>
            <br>
            <label for="exampleColorInput" class="form-label">Couleur préferée</label>
            <input type="color" class="form-control form-control-color" name="color" id="exampleColorInput" value="#be86d4" title="Choose your color" required>
            <div class="form-group">
            <label for="dateNaissance">Date de naissance </label>
            <input type="date" id="dateNaissance" name="dateNaissance" class="form-control" required>
            </div>
         




        </div>





        </div>
            <div class='card col-md-11 mx-auto my-1'>
                <div class="mb-3 mx-1">
                    <label for="inputfile" class="form-label">Joindre une image (jpg ou png) </label>
                    <input type="file" class="form-control" name="inputfile" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Parcourir..."> 
                </div>


            </div>
            <br>
              <input type="submit" class="btn btn-primary float-end" name="enregister_f2"
              value="Enregistrer des données"/>
            </form>
        </div>


