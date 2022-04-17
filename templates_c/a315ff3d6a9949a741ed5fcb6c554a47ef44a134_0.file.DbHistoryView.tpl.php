<?php
/* Smarty version 4.1.0, created on 2022-04-16 20:46:42
  from 'C:\xampp\htdocs\PAW\app\views\DbHistoryView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_625b0f12f10fa8_72590983',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a315ff3d6a9949a741ed5fcb6c554a47ef44a134' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PAW\\app\\views\\DbHistoryView.tpl',
      1 => 1650134802,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:db_records.tpl' => 1,
  ),
),false)) {
function content_625b0f12f10fa8_72590983 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1584216854625b0f12f08be3_56046042', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_1584216854625b0f12f08be3_56046042 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1584216854625b0f12f08be3_56046042',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->action_url;?>
logout" class="button ">Wyloguj</a>
        
                           <a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->action_url;?>
calcCompute" class="button ">Powrót do kalkulatora</a>
        



        <section id="split">
    <div class="inner">
        <section class="">
        <div class="row">
        <h1> Historia: </h1>
                <?php $_smarty_tpl->_subTemplateRender('file:db_records.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                </div>
    </section>
    </div>
    </section>

<?php
}
}
/* {/block 'content'} */
}
