<?php
/* Smarty version 4.1.0, created on 2022-04-06 22:38:56
  from 'C:\xampp\htdocs\PAW\app\views\Loginview.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_624dfa60cb4600_52814183',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd20d3ec765c7bedc89dca016e909bd7ef068dc0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PAW\\app\\views\\Loginview.tpl',
      1 => 1649255444,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_624dfa60cb4600_52814183 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_169127297624dfa60cac988_23218729', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_169127297624dfa60cac988_23218729 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_169127297624dfa60cac988_23218729',
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
