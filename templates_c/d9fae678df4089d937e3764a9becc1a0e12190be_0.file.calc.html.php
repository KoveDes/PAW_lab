<?php
/* Smarty version 4.1.0, created on 2022-03-17 21:31:59
  from 'C:\xampp\htdocs\PAW\app\calc.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62339abf05dfc9_02397931',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd9fae678df4089d937e3764a9becc1a0e12190be' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PAW\\app\\calc.html',
      1 => 1647549106,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62339abf05dfc9_02397931 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_99790933562339abf053113_31131386', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_78848660862339abf0539b7_74529762', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.html");
}
/* {block 'footer'} */
class Block_99790933562339abf053113_31131386 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_99790933562339abf053113_31131386',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

Wykonano jakimś cudem
<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_78848660862339abf0539b7_74529762 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_78848660862339abf0539b7_74529762',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<section id="contact">
    <div class="inner">
        <section>
            <form action="#main" method="post">
                <div class="fields">
                    <div class="field">
                        <label for="amount">Kwota (zł)</label>
                        <input type="text" name="amount" id="amount" />
                    </div>
                    <div class="field half">
                        <label for="time">Czas (w latach)</label>
                        <input type="text" name="time" id="time" />
                    </div>
                    <div class="field half">
                        <label for="rate">Oprocentowanie (%)</label>
                        <input type="text" name="rate" id="rate" />
                    </div>
                </div>
                <ul class="actions">
                    <li><input type="submit" value="Oblicz ratę miesięczną" class="primary" /></li>
                </ul>
            </form>
            <section>
                <div class="fields">
                    <?php if ((isset($_smarty_tpl->tpl_vars['messages']->value))) {?>
                    <?php if (count($_smarty_tpl->tpl_vars['messages']->value) > 0) {?>

                    <h3 style="color:#e52424">Wystąpiły błędy:</h3>
                    <ol class="err">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
                        <li style="color:#d5be1d"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ol>
                    <?php }?>
                    <?php }?>

                    <?php if ((isset($_smarty_tpl->tpl_vars['result']->value))) {?>
                    <h2 style="color: black">Wynik: <span style="color: #1d975efa"><?php echo $_smarty_tpl->tpl_vars['result']->value;?>
</span> zł</h2>

                    <?php }?>

                </div>
            </section>
        </section>
        <section class="split">
            <section>
                <?php if ($_smarty_tpl->tpl_vars['result']->value != null) {?>
                <img src="https://i2.wp.com/channongray.com/wp-content/uploads/2015/07/bb6ibz.jpg" alt="" srcset="">
                <?php }?>
                <?php if (!(isset($_smarty_tpl->tpl_vars['result']->value))) {?>
                <img src="https://media.thetab.com/blogs.dir/15/files/2021/05/179968839-277908557378446-3702554718123604703-n.jpg"
                    alt="" srcset="">
                <?php }?>
            </section>
        </section>
    </div>
</section>



<?php
}
}
/* {/block 'content'} */
}
