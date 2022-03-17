<?php
/* Smarty version 4.1.0, created on 2022-03-17 21:12:21
  from 'C:\xampp\htdocs\PAW\templates\main.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_623396256e9938_06607224',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b7f8eacb5fc4b054a2301f7b4ea8b7156921a009' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PAW\\templates\\main.html',
      1 => 1647547855,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_623396256e9938_06607224 (Smarty_Internal_Template $_smarty_tpl) {
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
   <link rel="stylesheet" href="css/main.css" />

   <title><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "Nie działa :(" ?? null : $tmp);?>
</title>
</head>

<body>
   <div id="wrapper">
      <!-- HEADER -->
      <header id="header" class="alt">
         <a class="logo"><strong>Jacek</strong> <span>Czernecki</span></a>
      </header>

      <!-- BANNER -->
      <section id="banner" class="major">
         <div class="inner">
            <header class="major">
               <h1><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</h1>
            </header>
            <div class="content">
               <p><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_header']->value ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
 </p>
               <ul class="actions">
                  <li><a href="#main" class="button next scrolly"></a></li>
               </ul>
            </div>
         </div>
      </section>

      <!-- CONTENT -->
      <div id="main">
         <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1627382177623396256e8bb2_53471985', 'content');
?>




         <!-- FOOTER -->
         <footer id="footer">
            <ul class="copyright">
               <li>Design: <a href="https://html5up.net">HTML5 UP</a></li>
               <li><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1927369721623396256e9305_45500032', 'footer');
?>
</li>
            </ul>
         </footer>
      </div>
   </div>

</body>

</html><?php }
/* {block 'content'} */
class Block_1627382177623396256e8bb2_53471985 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1627382177623396256e8bb2_53471985',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_1927369721623396256e9305_45500032 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1927369721623396256e9305_45500032',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść stopki .... <?php
}
}
/* {/block 'footer'} */
}
