<?php
/* Smarty version 4.3.1, created on 2023-03-29 12:56:52
  from 'D:\wamp64\www\Cours\SIO1\MVCSIO1\Views\client\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_642435940bcdf9_63446272',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c61c76327017263359146100535b0f493aea8fc6' => 
    array (
      0 => 'D:\\wamp64\\www\\Cours\\SIO1\\MVCSIO1\\Views\\client\\form.tpl',
      1 => 1680094605,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_642435940bcdf9_63446272 (Smarty_Internal_Template $_smarty_tpl) {
?><form method="post">
<input type="hidden" id="id" name="id" value="<?php echo $_smarty_tpl->tpl_vars['view']->value['form']->id;?>
" />
    <label for="nom">Entreprise</label>
    <input id="nom" name="nom" placeholder="Entreprise OVH" maxlength="40" value="<?php echo $_smarty_tpl->tpl_vars['view']->value['form']->nom;?>
" />
    <label for="status">Status</label>
    <input id="status" name="status" placeholder="S.A" value="<?php echo $_smarty_tpl->tpl_vars['view']->value['form']->statut_juridique;?>
" />    
    <label for="siret">SIRET</label>
    <input id="siret" name="siret" placeholder="01234567891013" value="<?php echo $_smarty_tpl->tpl_vars['view']->value['form']->siret;?>
" />
    <label for="adresse">Adresse</label>
    <input id="adresse" name="adresse" placeholder="2 rue de la pie" value="<?php echo $_smarty_tpl->tpl_vars['view']->value['form']->adresse;?>
" />
    <input type="submit" class="btn btn-primary" value="Enregistrer"/>
</form><?php }
}
