<h1>Liste de des projets</h1>
<?php 

foreach  ($view['projets'] as $projet) {
  //  var_dump($client);
   echo "<br>nom: ".$projet['nom'];
}
?>