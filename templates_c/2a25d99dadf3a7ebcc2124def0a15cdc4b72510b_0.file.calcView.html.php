<?php
/* Smarty version 4.1.0, created on 2022-03-24 09:51:33
  from 'C:\xampp\htdocs\PAW\app\calcView.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_623c3115901c02_97550547',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a25d99dadf3a7ebcc2124def0a15cdc4b72510b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PAW\\app\\calcView.html',
      1 => 1648111890,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_623c3115901c02_97550547 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_807819525623c31158f6151_42002847', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1346231026623c31158f6911_10934695', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.html");
}
/* {block 'footer'} */
class Block_807819525623c31158f6151_42002847 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_807819525623c31158f6151_42002847',
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
class Block_1346231026623c31158f6911_10934695 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1346231026623c31158f6911_10934695',
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
                        <input type="text" name="amount" id="amount" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->amount;?>
" />
                    </div>
                    <div class="field half">
                        <label for="time">Czas (w latach)</label>
                        <input type="text" name="time" id="time" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->time;?>
" />
                    </div>
                    <div class="field half">
                        <label for="rate">Oprocentowanie (%)</label>
                        <input type="text" name="rate" id="rate" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->rate;?>
" />
                    </div>
                </div>
                <ul class="actions">
                    <li><input type="submit" value="Oblicz ratę miesięczną" class="primary" /></li>
                </ul>
            </form>
            <section>
                <div class="fields">
                    <?php if ($_smarty_tpl->tpl_vars['messages']->value->isError()) {?>
                    <h3 style="color:#e52424">Wystąpiły błędy:</h3>
                    <ol class="err">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value->getErrors(), 'err');
$_smarty_tpl->tpl_vars['err']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
$_smarty_tpl->tpl_vars['err']->do_else = false;
?>
                        <li style="color:#d5be1d"><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ol>
                    <?php }?>

                    <?php if ((isset($_smarty_tpl->tpl_vars['res']->value->result))) {?>
                    <h2 style="color: black">Wynik: <span style="color: #1d975efa"><?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>
</span> zł</h2>

                    <?php }?>

                </div>
            </section>
        </section>
        <section class="split">
            <section>
                <?php if ($_smarty_tpl->tpl_vars['res']->value->result != null) {?>
                <img src="https://i2.wp.com/channongray.com/wp-content/uploads/2015/07/bb6ibz.jpg" alt="" srcset="">
                <?php }?>
                <?php if (!(isset($_smarty_tpl->tpl_vars['res']->value->result))) {?>
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
