<h1>Liste de mes clients <a href="./index.php?page=client&action=form" class="btn btn-dark">+</a></h1>
<table class="table">
  <thead>
    <tr>
      <td>Nom</td>
      <td>Status</td>
      <td>SIRET</td>
      <td>Adresse</td>
      <td>Action</td>
    </tr>
  </thead>
  <tbody>
  {foreach $view.clients as $client}
      <tr>
        <td> {$client['nom']}</td>
        <td>{$client['statut_juridique']}</td>
        <td>{$client['siret']}</td>
        <td>{$client['adresse']}</td>
        <td><a href='index.php?page=client&action=form&id={$client['id']}'>&#x270E;</a>
   <a href='index.php?page=client&action=delete&id={$client['id']}'>&#128465;</a>
   </td>
      </tr>
      {foreachelse}
        .. no results .. 
    {/foreach}
  </tbody>
</table>