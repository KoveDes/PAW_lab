<?php
/* Smarty version 4.1.0, created on 2022-04-16 20:35:58
  from 'C:\xampp\htdocs\PAW\app\views\templates\db_records.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_625b0c8eaeed55_73599535',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a149a7f89d186198fcf01027571e20409574e2a5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PAW\\app\\views\\templates\\db_records.tpl',
      1 => 1650134157,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_625b0c8eaeed55_73599535 (Smarty_Internal_Template $_smarty_tpl) {
?>
<table id="tab_people">
<thead>
	<tr>
		<th>Kwota</th>
		<th>Czas (lata)</th>
		<th>Oprocentowanie (%)</th>
		<th>Rata miesięczna</th>
		<th>Data</th>
	</tr>
</thead>
<tbody>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
<tr><td><?php echo $_smarty_tpl->tpl_vars['item']->value['kwota'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['item']->value['lat'];?>
 </td><td><?php echo $_smarty_tpl->tpl_vars['item']->value['procent'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['item']->value['rata'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['item']->value['data'];?>
</td></tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</tbody>
</table><?php }
}
