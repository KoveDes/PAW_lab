<?php
/* Smarty version 4.1.0, created on 2022-03-17 21:12:21
  from 'C:\xampp\htdocs\PAW\app\calc.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_623396256d8750_25269286',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '395719f10e7fbe989453cd11597a336e334b5ef8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PAW\\app\\calc.html',
      1 => 1647547935,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_623396256d8750_25269286 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1848450359623396256cb6d8_91429486', 'footer');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_38329958623396256cbe70_61860891', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.html");
}
/* {block 'footer'} */
class Block_1848450359623396256cb6d8_91429486 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1848450359623396256cb6d8_91429486',
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
class Block_38329958623396256cbe70_61860891 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_38329958623396256cbe70_61860891',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<section id="contact">
    <div class="inner">
        <section>
            <form action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calc.php" method="post">
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
                        <label for="rate">Oprocentowanie</label>
                        <input type="text" name="rate" id="rate" />
                    </div>
                </div>
                <ul class="actions">
                    <li><input type="submit" value="Oblicz ratę miesięczną" class="primary" /></li>
                </ul>
            </form>
            <section>
                <div class="contact-method">
                    <?php if ((isset($_smarty_tpl->tpl_vars['messages']->value))) {?>
                    <?php if (count($_smarty_tpl->tpl_vars['messages']->value) > 0) {?>

                    <h3>Wystąpiły błędy:</h3>
                    <ol class="err">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
                        <li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ol>
                    <?php }?>
                    <?php }?>

                    <?php if ((isset($_smarty_tpl->tpl_vars['result']->value))) {?>
                    <h4>Wynik: </h4>
                    <span>
                        <?php echo $_smarty_tpl->tpl_vars['result']->value;?>

                    </span>
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

<!-- 
<form action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calc.php" method="post">
    <label for="amount">Kwota:</label>
    <input type="text" name="amount" id="amount" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['amount'];?>
" size="4"> <br>
    <label for="time">Czas(w latach):</label>
    <input type="text" name="time" id="time" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['time'];?>
" size="3"><br>
    <label for="rate">Oprocentowanie:</label>
    <input type="text" name="rate" id="rate" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['rate'];?>
" placeholder="%" size="3"><br>
    <input type="submit" value="Oblicz ratę miesięczną">
</form>

<div>
    <?php if ((isset($_smarty_tpl->tpl_vars['messages']->value))) {?>
    <?php if (count($_smarty_tpl->tpl_vars['messages']->value) > 0) {?>
    <h4>Wystąpiły błędy: </h4>
    <ol class="err">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
        <li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ol>
    <?php }?>
    <?php }?>

    <?php if ((isset($_smarty_tpl->tpl_vars['result']->value))) {?>
    <h4>Wynik</h4>
    <p class="res">
        <?php echo $_smarty_tpl->tpl_vars['result']->value;?>

    </p>
    <?php }?>
</div> -->

<?php
}
}
/* {/block 'content'} */
}
