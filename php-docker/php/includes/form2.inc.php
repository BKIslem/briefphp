<form method="post" action="../index.php" enctype="multipart/form-data">
<h2 class='text-center'>Ajouter plus de données</h2>
<div class='row'>
    <div class='card col-md-7 mx-auto my-1'>
        <br>
          <?php
          include "./includes/form.inc.html";?>
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
            <label for="exampleColorInput" class="form-label">Couleur préferée</label>
            <input type="color" class="form-control form-control-color" name="color" id="exampleColorInput" value="#be86d4" title="Choose your color" required>
            <div class="form-group">
            <label for="dateNaissance">Date de naissance </label>
            <input type="date" id="dateNaissance" name="dateNaissance" class="form-control" required>
            </div>
         
        </div>
            <div class='card col-md-11 mx-auto my-1'>
                <div class="mb-3 mx-1">
                    <label for="image" class="form-label">Joindre une image (jpg ou png) </label>
                    <input type="file" class="form-control" name="img"  aria-label="Parcourir..."> 
                </div>
        </div>
               <br>
</div>
                 <input type="submit" class="btn btn-primary float-end" name="enregister_f2"
                  value="Enregistrer des données">
                  

</form>

