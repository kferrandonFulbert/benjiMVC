<?php
/* Smarty version 4.3.1, created on 2023-03-29 12:51:54
  from 'D:\wamp64\www\Cours\SIO1\MVCSIO1\Views\client\list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6424346aa808a6_33220071',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c0f3275949ad94c62d2bba1efd36fbc5e985c938' => 
    array (
      0 => 'D:\\wamp64\\www\\Cours\\SIO1\\MVCSIO1\\Views\\client\\list.tpl',
      1 => 1680094303,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6424346aa808a6_33220071 (Smarty_Internal_Template $_smarty_tpl) {
?><h1>Liste de mes clients <a href="./index.php?page=client&action=form" class="btn btn-dark">+</a></h1>
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
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['view']->value['clients'], 'client');
$_smarty_tpl->tpl_vars['client']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['client']->value) {
$_smarty_tpl->tpl_vars['client']->do_else = false;
?>
      <tr>
        <td> <?php echo $_smarty_tpl->tpl_vars['client']->value['nom'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['client']->value['statut_juridique'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['client']->value['siret'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['client']->value['adresse'];?>
</td>
        <td><a href='index.php?page=client&action=form&id=<?php echo $_smarty_tpl->tpl_vars['client']->value['id'];?>
'>&#x270E;</a>
   <a href='index.php?page=client&action=delete&id=<?php echo $_smarty_tpl->tpl_vars['client']->value['id'];?>
'>&#128465;</a>
   </td>
      </tr>
      <?php
}
if ($_smarty_tpl->tpl_vars['client']->do_else) {
?>
        .. no results .. 
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </tbody>
</table><?php }
}
