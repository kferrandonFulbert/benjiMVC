<h1>Liste de mes clients</h1>
<?php 

foreach  ($view['clients'] as $client) {
  //  var_dump($client);
   echo "nom: ".$client['nom'];
}
?>