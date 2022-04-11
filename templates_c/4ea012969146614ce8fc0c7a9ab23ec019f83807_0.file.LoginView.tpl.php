<?php
/* Smarty version 4.1.0, created on 2022-04-06 16:30:46
  from 'C:\xampp\htdocs\PAW\app\views\LoginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_624da416ba3e05_44358482',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4ea012969146614ce8fc0c7a9ab23ec019f83807' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PAW\\app\\views\\LoginView.tpl',
      1 => 1649255444,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_624da416ba3e05_44358482 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_276021597624da416b9c967_07145351', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_276021597624da416b9c967_07145351 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_276021597624da416b9c967_07145351',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<section id="contact">
    <div class="inner">
        <section>
            <form action="<?php echo $_smarty_tpl->tpl_vars['config']->value->action_url;?>
login" method="post" autocomplete="on">
                <div class=" fields">
                    <div class="field">
                        <label for="login">Login:</label>
                                    <input type="text" name="login" id="login"  />
                    </div>
                    <div class="field">
                        <label for="pass">Hasło:</label>
                                    <input type="password" name="pass" id="pass"  />
                    </div>
                </div>
                <ul class="actions">
                    <li><input type="submit" value="zaloguj" id="pass" class="primary"  /></li>
                </ul>
            </form>
            </section>
            </div>
            </section>


<?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php
}
}
/* {/block 'content'} */
}
