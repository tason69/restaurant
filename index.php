
    <?php require 'vue/header.php';
    function chargerClasse ($classe){
      require $classe. '.php';
  }
  
  spl_autoload_register('chargerClasse');
  ?>
    <title>les recettes de mamy</title>
  </head>

  <body>  
        <form method="post" action="ajouter.php">
          <button type="submit" class="btn btn-primary">AJOUTE TA RECETTE</button>
        <div class="form-group">
            <label for="nom_recette">Nom de la recette</label>
            <input type="text" class="form" name="nom_recette" id="nom_recette" placeholder="nom de la recette" required>
        </div>
        <div class="form-group">
            <label for="temps_recette">Temps de la recette</label>
            <input type="text" class="form" name="temps_recette" id="temps_recette" placeholder="temps de la recette" required>
        </div>
        <div class="form-group">
            <label for="desc_recette">Description de la recette</label>
            <input type="text" class="form" name="desc_recette" id="desc_recette" placeholder="description de la recette" required>
        </div>
        
    </form>
    <section class="d-flex justify-content-between flex-wrap smartph"> 
  <?php
    require 'vue/bdd.php';
    $reponse = $dbh->query("SELECT * from recette");

  while($req = $reponse -> fetch()){
    ?>

    <article class="w-25 recette">
   
    <p class="text-center w-100"><?php echo $req['id_recette'];?></p>
    <h3 class="text-center w-100"><?php echo $req['nom_recette'];?></h3>
    <p class="text-center w-100"><?php echo $req['temps_recette'];?></p>
    <p class="text-center w-100"><?php echo $req['desc_recette'];?></p>
    
      <p class="text-center w-100">
       <a href="scriptdelete.php?id=<?php echo $req['id_recette']; ?>" class="btn btn-primary">SUPPRIMER</a>
       <a href="scriptupdate.php?id=<?php echo $req['id_recette']; ?>" class="btn btn-primary">MODIFIER</a>
       </p> 
    
   
    <?php
    $id=$req['id_recette'];

    $reponse2= $dbh ->query("SELECT * from contenir
                              INNER JOIN ingredients
                              ON ingredients.id_ingre=contenir.fk_ing
                              WHERE fk_rec = $id");
    ?></article>
    <?php
   while($req2 = $reponse2 -> fetch()){
     echo $req2['nom_ingre'];
   }
   echo "</br>";
  }
?> 
</section>
  <script src="js/jquery-3.4.1.js"></script>
<script src="js/tooltip.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>

</body>
</html>

