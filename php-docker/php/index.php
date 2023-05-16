<?php
$table = [];
session_start();

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
       <div class="col-md-2">
        <?php
        include "./includes/ul.inc.php";
        ?>
       </div>
         <div class="col-md-10">
            <section>
              <?php
               if (isset($_GET['add'])) {
                include "./includes/form.inc.html";
                 }
                 elseif (isset($_POST ['enregister']))
                 {$table['prenom'] =htmlspecialchars ( isset($_POST['prenom']) ? $_POST['prenom'] : null);
                  $table['nom'] =htmlspecialchars ($_POST['nom']);
                  $table['age'] =htmlspecialchars ($_POST['age']);
                  $table['taille'] =htmlspecialchars ($_POST['taille']);
                  $table['sexe'] =htmlspecialchars ($_POST['radio']);
                  $_SESSION['table']=$table;
                  var_dump ($_SESSION);
                  ?>
                 <div class="alert alert-success text-center" role="alert">
                      Données sauvegardées
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

</body>
</html>
