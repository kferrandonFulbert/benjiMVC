<form method="post">
<input type="hidden" id="id" name="id" value="<?=$view['form']->id; ?>" />
    <label for="nom">Entreprise</label>
    <input id="nom" name="nom" placeholder="Entreprise OVH" maxlength="40" value="<?=$view['form']->nom; ?>" />
    <label for="status">Status</label>
    <input id="status" name="status" placeholder="S.A" value="<?=$view['form']->statut_juridique; ?>" />    
    <label for="siret">SIRET</label>
    <input id="siret" name="siret" placeholder="01234567891013" pattern="[0-9]{1,13}" value="<?=$view['form']->siret; ?>" />
    <label for="adresse">Adresse</label>
    <input id="adresse" name="adresse" placeholder="2 rue de la pie" value="<?=$view['form']->adresse; ?>" />
    <input type="submit" class="btn btn-primary" value="Enregistrer"/>
</form>