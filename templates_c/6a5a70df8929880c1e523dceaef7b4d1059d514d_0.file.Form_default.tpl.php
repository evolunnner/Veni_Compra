<?php
/* Smarty version 3.1.30, created on 2018-11-14 14:54:50
  from "C:\xampp\htdocs\LittlePHP_VENI_COMPRA\LitlePHP\applications\veni_compra\web\html\Form_default.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5bec292ae00708_89101653',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a5a70df8929880c1e523dceaef7b4d1059d514d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\LittlePHP_VENI_COMPRA\\LitlePHP\\applications\\veni_compra\\web\\html\\Form_default.tpl',
      1 => 1542203629,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:htmlConfig/header.tpl' => 1,
    'file:htmlConfig/topnavbar.tpl' => 1,
    'file:htmlConfig/javascripts.tpl' => 1,
  ),
),false)) {
function content_5bec292ae00708_89101653 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<!DOCTYPE html>
<html>
<!--=====================================
   Here Document Heder Template
 ======================================-->  
 <?php $_smarty_tpl->_subTemplateRender("file:htmlConfig/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<body>

    <!-- =============================================
     Here Document Top Nav Bar Template
    ============================================= -->

    <?php $_smarty_tpl->_subTemplateRender("file:htmlConfig/topnavbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



    <!--=============================================
                BEGIN MAIN CONTENT
    =============================================-->

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_64835bec292adf1771_53609337', "content");
?>


    <!-- =============================================
                END MAIN CONTENT
    =============================================-->


     <!--=====================================
       Here Document Footer Template
     ======================================-->  
     <?php $_smarty_tpl->_subTemplateRender("file:htmlConfig/javascripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



 </body>

<?php }
/* {block "content"} */
class Block_64835bec292adf1771_53609337 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
  <?php
}
}
/* {/block "content"} */
}
