<?php
/* Smarty version 4.1.0, created on 2022-04-16 20:03:53
  from 'C:\xampp\htdocs\PAW\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_625b05091f9bd1_12554602',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec1d6250ebe1534cf895adef731d7193640847eb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PAW\\app\\views\\templates\\main.tpl',
      1 => 1649673359,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_625b05091f9bd1_12554602 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<!--
	Forty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html lang="pl">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="<?php echo (($tmp = $_smarty_tpl->tpl_vars['page_description']->value ?? null)===null||$tmp==='' ? 'Opis domyślny' ?? null : $tmp);?>
">
   <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value->app_url;?>
/css/main.css" />

   <title><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "Nie działa :(" ?? null : $tmp);?>
</title>
</head>

<body>

   <div id="wrapper">
      <!-- HEADER -->
      <header id="header" class="alt">
         <a class="logo"><strong>Jacek</strong> <span>Czernecki</span></a>
      </header>


         <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1759085175625b05091f7bd5_79477850', 'content');
?>



         <!-- FOOTER -->
         <footer id="footer">
            <ul class="copyright">
               <li>Design: <a href="https://html5up.net">HTML5 UP</a></li>
               <li><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1719721980625b05091f8db6_31430874', 'footer');
?>
</li>
            </ul>
         </footer>
      </div>
   </div>

</body>

</html><?php }
/* {block 'content'} */
class Block_1759085175625b05091f7bd5_79477850 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1759085175625b05091f7bd5_79477850',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_1719721980625b05091f8db6_31430874 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1719721980625b05091f8db6_31430874',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść stopki .... <?php
}
}
/* {/block 'footer'} */
}
