<?php
session_start();
$table = array();
$ext= ["image/jpg","image/png","image/jpeg"];

if (isset($_SESSION['table'])){
$table = $_SESSION['table'];}
function readTable() {
                      
  $table = $_SESSION['table'];
  $i = 0;
  foreach ($table as $index => $element) { 
  if(is_array($element)) {
    $element ='<img src="./uploaded/'.$table["img"]["name"].'"' .' style="max-width:100%">';
     }
  echo 'à la ligne n° ' . $i . ' correspond la clé "' . $index . ' "et contient" '.$element .'"<br>';
  $i++;}
}
?>
<!DOCTYPE html>
<?php
include "./includes/head.inc.html"
?>
<body> 

        <?php
        include "./includes/header.inc.html";
      ?>
<div class="container">
<div class="row justify-content-center">
       <div class="col-md-3 col-xl-2">
        <div class="list-group">
          <ul>
          <?php
          include "./includes/ul.inc.php";
          ?>
          </ul>
        </div>
       </div>
         <div class="col-md-9 col-xl-10">
            <section>
              <?php
               if (isset($_GET['add'])) {
                  ?><h1 class="text-center">Ajouter des données</h1>
                  <form method="post" action="/index.php" enctype="multipart/form-data">
                  <?php
                  include "./includes/form.inc.html";?>
                  <input type="submit" class="btn btn-primary float-end" name="enregister"
                  value="Enregistrer des données"/>
                    </form><?php
                    }
                
               elseif (isset($_POST ['enregister'])){
                if($_POST['age']>17){
                  if ((strlen($_POST['prenom'])< 3 ||strlen($_POST['nom'])< 3)){
                  echo '<div class="alert alert-danger text-center" role="alert">
                  bah non!<br>Au minimum 3 lettres dans le prénom et pareil pour le nom
                  </div>';}
                  else{
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

                     }}
                     else{
                      echo '<div class="alert alert-danger text-center" role="alert">
                  Oh PETIT!<br>Encore trop jeune pour s\'inscrire
                  </div>';}
                     }
               elseif(isset($_GET['addmore'])){
                      include "./includes/form2.inc.php";
                    }
               elseif (isset($_POST ['enregister_f2'])){
                if($_POST['age']>17){
                  if ((strlen($_POST['prenom'])< 3 ||strlen($_POST['nom'])< 3)){
                  echo '<div class="alert alert-danger text-center" role="alert">
                  bah non!<br>Au minimum 3 lettres dans le prénom et pareil pour le nom
                  </div>';}
                  else{
                    $table ['first_name'] = isset($_POST['prenom']) ? $_POST['prenom'] : null;
                    $table ['last_name'] = isset($_POST['nom']) ? $_POST['nom'] : null;
                    $table ['age'] = isset($_POST['age']) ? $_POST['age'] : null;
                    $table ['size'] = isset($_POST['taille']) ? $_POST['taille'] : null;
                    $table ['civility'] = isset($_POST['radio']) ? $_POST['radio'] : null; 
                    $table ['html'] = isset($_POST['HTML']) ? $_POST['HTML'] : null;
                    $table ['css'] = isset($_POST['CSS']) ? $_POST['CSS'] : null;
                    $table ['JavaScript'] = isset($_POST['JavaScript']) ? $_POST['JavaScript'] : null;
                    $table ['PHP'] = isset($_POST['PHP']) ? $_POST['PHP'] : null;
                    $table ['MySQL'] = isset($_POST['MySQL']) ? $_POST['MySQL'] : null;
                    $table ['Bootstrap'] = isset($_POST['Bootstrap']) ? $_POST['Bootstrap'] : null;
                    $table ['Symphony'] = isset($_POST['Symphony']) ? $_POST['Symphony'] : null;
                    $table ['color'] = isset($_POST['color']) ? $_POST['color'] : null;
                    $table ['dateNaissance'] = isset($_POST['dateNaissance']) ? $_POST['dateNaissance'] : null;
                    $_SESSION['table'] = $table;
                       ?>
                       <div class="alert alert-success text-center" role="alert">
                          Données sauvegardées
                        </div> 
                        <?php

                     }}
                     else{
                      echo '<div class="alert alert-danger text-center" role="alert">
                  Oh PETIT!<br>Encore trop jeune pour s\'inscrire
                  </div>';}
                      if(!empty($_FILES["img"]["type"])){ 
                        if($_FILES["img"]["size"]<2000000){
                            if(in_array($_FILES["img"]["type"],$ext)){
                              if($_FILES["img"]["error"]==0){
                                echo'<div class="alert alert-success text-center" role="alert">
                                Image sauvegardée
                                </div>';
                                $table ['img'] = $_FILES['img']; 
                                $table ['img'] = $_FILES['img']; 
                                $file= $table ['img']; 
                                $type = $file['type'];
                                $size = $file['size'];
                                $temp = $file['tmp_name'];
                                $name = $file["name"]; 
                                $path = 'uploaded/' .$name ;
                                move_uploaded_file($temp, $path);}
                                else{
                                  echo'<div class="alert alert-danger text-center" role="alert">error '.$_FILES["img"]["error"]
                                  .'</div>';}}
                              else 
                              {echo'<div class="alert alert-danger text-center" role="alert">Extension "'.$_FILES["img"]["type"].'" non prise en charge 
                              </div>';}}
                           
        
                          else
                          {echo'<div class="alert alert-danger text-center" role="alert">
                          la taille de l\'image doit être inférieure à 2Mo
                          </div>';}}
                         else
                        {echo'<div class="alert alert-danger text-center" role="alert">Aucun fichier n\'a été téléchargé 
                          </div>';}
                      
                      $_SESSION['table'] = $table;
                      }
               elseif(isset($_POST['deb'])){
                print"<pre>";
                    print_r($table);
                    print"</pre>";
                    }
               elseif(isset($_POST['conca'])){
                          ?>
                          <h2 class='text-center'>Concaténation</h2>
                          <h3 class='text-dark'>===> Construction d'une phrases avec le contenu du tableau</h3>
                          <p>
                          <?php
                          if (!empty ($table['civility'])){
                          if ($table['civility']=='Man'){
                          echo"Mr ";
                          }
                          else {
                            echo"Mme ";
                            
                          }
                          
                          echo ucfirst($table['first_name'])." ".ucfirst($table['last_name'])."<br>J'ai "
                          .$table['age']." ans et je mesure ".$table['size']." m.";
                          ?>
                          </p>
                          
                          <h3>===> Construction d'une phrases après MAJ du tableau</h3>
                          <p>
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
                            </p>
                         
                          
                          <h3>===> Affichage d'une virgule à la place du point pour la taille</h3>
                          <p>
                          <?php
                          if($table['civility']=='homme'){
                            echo"Mr ";
                           }
                            else {
                              echo"Mme ";
                              
                            }
                            echo ucfirst($table['first_name'])." ".strtoupper($table['last_name'])
                            ."<br>J'ai ".$table['age']." ans et je mesure ".str_replace('.', ',', $table['size'])." m.";
                            ?> </p><?php

                          }else{
                            echo '<div class="alert alert-danger text-center" role="alert">
                            Il n\'y a pas de données enregistrées
                          </div> ';
                          }}
               elseif(isset($_POST['boucle'])){
                    ?>
                    <h2 class='text-center'>Boucle</h2>
                    <h3>===> Lecteur du tableau à l'aide d'une boucle foreach</h3>
                    
                    <?php 
                
                    $i = 0;
                    
                    foreach ($table as $index => $element) { 
                      if(is_array($element)) {
                        $element ='<img src="./uploaded/'.$table["img"]["name"].'"' .' style="max-width:100%">';
                         }
                     echo 'à la ligne n° ' . $i . ' correspond la clé "' . $index . ' "et contient" '.$element .'"<br>';
                     
                      $i++;
                      
                    }
                  }
               elseif(isset($_POST['fonction'])){
                    ?>
                    <h2 class='text-center'>Fonction</h2>
                    <h3>===> J'utilise ma fonction readTable</h3>
                    <?php 
                     readTable();
                      }
                
               elseif(isset($_POST['supprimer'])){
                    session_unset();
                    ?>
                    <div class="alert alert-success text-center" role="alert">
                      Données supprimées
                    </div> 
                    <?php
               }
                 
               else{   ?>
                 <div class="d-flex">
                  
                  
                 <form method="post" action="index.php?add">
                 <input type="submit" class="btn btn-primary offset-1" name="button1"
                 value="Ajouter des données"/>
                 </form>
                
                 <form method="post" action="index.php?addmore">
                 <input type="submit" class="btn btn-secondary offset-1" name="button2"
                 value="Ajouter plus de données"/>
                 </form>
                 
                 </div>
                 
                 <?php }
                  ?>
               
	         </section> 
        </div>
      
    
      <footer>
        <?php
        include "./includes/footer.inc.html";
        ?>
        </footer>
        </div>
</div>
</body>

</html>
