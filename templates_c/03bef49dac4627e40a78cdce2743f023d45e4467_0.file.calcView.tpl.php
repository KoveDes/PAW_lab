<?php
/* Smarty version 4.1.0, created on 2022-04-16 20:09:49
  from 'C:\xampp\htdocs\PAW\app\views\calcView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_625b066d99f239_21943426',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '03bef49dac4627e40a78cdce2743f023d45e4467' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PAW\\app\\views\\calcView.tpl',
      1 => 1650132586,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_625b066d99f239_21943426 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1800751541625b066d981d77_47538636', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1267760447625b066d9830f4_12124487', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'footer'} */
class Block_1800751541625b066d981d77_47538636 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1800751541625b066d981d77_47538636',
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
class Block_1267760447625b066d9830f4_12124487 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1267760447625b066d9830f4_12124487',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


 <!-- BANNER -->
      <section id="banner" class="major">
         <div class="inner">
            <header class="major">
               <h1><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</h1>
            </header>
            <div class="content">
               <p>użytkownik: <?php echo $_smarty_tpl->tpl_vars['user']->value->login;?>
 </p>
               <br><br>
               <p> rola: <?php echo $_smarty_tpl->tpl_vars['user']->value->role;?>
</p>
               <ul class="actions">
                  <li><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->action_url;?>
logout" class="button ">Wyloguj</a></li>
                  <li><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->action_url;?>
showDbHistory" class="button ">Pokaż historię</a></li>
               </ul>
            </div>
         </div>
      </section>

      <!-- CONTENT -->
      <div id="main">


<section id="contact">
    <div class="inner">
        <section>
            <form action="<?php echo $_smarty_tpl->tpl_vars['config']->value->action_root;?>
calcCompute" method="post" autocomplete="on">
                <div class=" fields">
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
                    <?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

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
