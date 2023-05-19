<?php
 if (isset($_GET['debegging'])){ $active='active';} else{$active=' ' ;}
 if(isset($_GET['concatenation'])){$active1='active';} else{$active1=' ' ;}
 if(isset($_GET['loop'])){$active2='active';} else{$active2=' ' ;}
 if(isset($_GET['function'])){$active3='active';} else{$active3=' ' ;}
 if(isset($_GET['del'])){$active4='active';} else{$active4=' ' ;}
?>

    <?php
    if(isset($_SESSION['table'])){?>
    <form method="post" action="index.php" enctype="multipart/form-data">
    <input type="submit" class="list-group-item list-group-item-action text-center" name ='home' value='Home'>
    </form>

    <form method="post" action="index.php?debegging" enctype="multipart/form-data">
    <input type="submit" class="list-group-item list-group-item-action <?php echo $active;?>" name='deb' value='Débogage'>
    </form>

    <form method="post" action="index.php?concatenation" enctype="multipart/form-data">
    <input type="submit" class="list-group-item list-group-item-action <?php echo $active1;?>" name='conca' value='Concaténation'>
    </form>

    <form method="post" action="index.php?loop" enctype="multipart/form-data">
    <input type="submit" class="list-group-item list-group-item-action <?php echo $active2;?>" name='boucle' value='Boucle'>
    </form>

    <form method="post" action="index.php?function" enctype="multipart/form-data">
    <input type="submit" class="list-group-item list-group-item-action <?php echo $active3;?>" name='fonction' value='Fonction'>
    </form> 

    <form method="post" action="index.php?del" enctype="multipart/form-data">
    <input type="submit" class="list-group-item list-group-item-action <?php echo $active4;?>" name='supprimer' value='Supprimer'>
    </form>

    <?php
    }
    else {?>
          <form method="post" action="index.php" enctype="multipart/form-data">
            <input type="submit" class="list-group-item list-group-item-action text-center" name ='home' value='Home'>
          </form> 
          
          <?php

}
   ?>