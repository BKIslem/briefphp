<?php
session_start();
$table = array();
error_reporting(E_ALL);
if (isset($_SESSION['table'])){
$table = $_SESSION['table'];}
?>
<!DOCTYPE html>
<?php
include "./includes/head.inc.html"
?>
<body> 
<?php
include "./includes/header.inc.html";
?>
    <div class="container-lg">
     <div class="row justify-content-center">
       <div class="col-md-3">
        <div class="list-group">
        
        <?php
          include "./includes/ul.inc.php";
        ?>
        </div>
       </div>
         <div class="col-md-9">
            <section>
              <?php
               if (isset($_GET['add'])) {
                include "./includes/form.inc.html";
                 }
                    elseif (isset($_POST ['enregister']))
                  {
                    $table ['first_name'] = isset($_POST['prenom']) ? $_POST['prenom'] : null;
                    $table ['last_name'] = isset($_POST['nom']) ? $_POST['nom'] : null;
                    $table ['age'] = isset($_POST['age']) ? $_POST['age'] : null;
                    $table ['size'] = isset($_POST['taille']) ? $_POST['taille'] : null;
                    $table ['civility'] = isset($_POST['radio']) ? $_POST['radio'] : null;
                  
                    $_SESSION['table'] = $table;
                  
                       ?>
                       <div class="alert alert-success text-center" role="alert">
                          Données sauvegardées
                        </div> 
                        <?php

                   }
                   elseif(isset($_POST['deb'])){
                    print_r($table);
                    }
                  elseif(isset($_POST['conca'])){
                          ?>
                          <h1 class='text-center'>Concaténation</h1>
                          <p class='text-dark'>===> Construction d'une phrases avec le contenu du tableau</p>
                          <?php
                          if($table['civility']=='Man'){
                          echo"Mr ";
                          }
                          else {
                            echo"Mme ";
                            
                          }
                          
                          echo ucfirst($table['first_name'])." ".ucfirst($table['last_name'])."<br>J'ai "
                          .$table['age']." ans et je mesure ".$table['size']." m.";
                          ?>
                          <br>
                          <br>
                          <p class='text-dark'>===> Construction d'une phrases après MAJ du tableau</p>
                          <?php
                          if($table['civility']=='homme'){
                            echo"Mr ";
                          }
                            else {
                              echo"Mme ";
                              
                            }
                            echo ucfirst($table['first_name'])." ".strtoupper($table['last_name'])
                            ."<br>J'ai ".$table['age']." ans et je mesure ".$table['size']." m.";
                            ?>
                          <br>
                          <br>
                          <p class='text-dark'>===> Affichage d'une virgule à la place du point pour la taille</p>
                          <?php
                          if($table['civility']=='homme'){
                            echo"Mr ";
                          }
                            else {
                              echo"Mme ";
                              
                            }
                            echo ucfirst($table['first_name'])." ".strtoupper($table['last_name'])
                            ."<br>J'ai ".$table['age']." ans et je mesure ".str_replace('.', ',', $table['size'])." m.";

                        }
                  elseif(isset($_POST['boucle'])){
                    ?>
                    <h1 class='text-center'>Boucle</h1>
                    <p class='text-dark'>===> Lecteur du tableau à l'aide d'une boucle foreach</p>
                    <?php 
                
                    $i = 0;
                    foreach ($table as $index => $element) {
                      echo 'à la ligne n° ' . $i . ' correspond la clé "' . $index . ' "et contient" '.$element .'"<br>';
                      $i++;
                  }
                  }
                  elseif(isset($_POST['fonction'])){
                    ?>
                    <h2 class='text-center'>Fonction</h2>
                    <h3>===> j'utilise ma fonction readTable</h3>
                    <?php 
                    function readTable() {
                      if (isset($_SESSION['table'])){
                        $table = $_SESSION['table'];
                      $i = 0;
                    foreach ($table as $index => $element) {
                      echo 'à la ligne n° ' . $i . ' correspond la clé "' . $index . ' "et contient" '.$element .'"<br>';
                      $i++;
                  }}}
                     readTable();
                   }
                
                  elseif(isset($_POST['supprimer'])){
                    session_destroy();
                    ?>
                    <div class="alert alert-success text-center" role="alert">
                      Données supprimées
                    </div> 
                    <?php
                  }
                 
                 else{   ?>
                 <form method="post" action="index.php?add">
                 <input type="submit" class="btn btn-primary" name="button1"
                 value="Ajouter des données"/>
                 </form>
                 <?php }
                  ?>
               
	         </section> 
        </div>
      </div>
    </div>
<footer>
  <?php
  include "./includes/footer.inc.html";
  ?>
</footer>
</body>

</html>
