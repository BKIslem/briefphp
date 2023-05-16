
 <div class="list-group">
    <?php
    if(isset($_SESSION)){?>
    <button type="button" class="list-group-item list-group-item-action">HOME</button>
    <button type="button" class="list-group-item list-group-item-action">Débogage</button>
    <button type="button" class="list-group-item list-group-item-action">Concaténation</button>
    <button type="button" class="list-group-item list-group-item-action">Boucle</button>
    <button type="button" class="list-group-item list-group-item-action">Fonction</button>
    <button type="button" class="list-group-item list-group-item-action">Supprimer</button>
    <?php
    }
    else { ?>
    <button type="button" class="list-group-item list-group-item-action">HOME</button>
    <?php
    }
    ?>
</div>