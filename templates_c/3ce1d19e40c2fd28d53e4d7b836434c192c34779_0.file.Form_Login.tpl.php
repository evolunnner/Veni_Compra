<?php
/* Smarty version 3.1.30, created on 2018-10-16 23:17:35
  from "C:\xampp\htdocs\LitlePHP\applications\launcher\web\html\Form_Login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5bc6556f2f10b2_47882686',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ce1d19e40c2fd28d53e4d7b836434c192c34779' => 
    array (
      0 => 'C:\\xampp\\htdocs\\LitlePHP\\applications\\launcher\\web\\html\\Form_Login.tpl',
      1 => 1539723861,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bc6556f2f10b2_47882686 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_messagebox')) require_once 'C:\\xampp\\htdocs\\LitlePHP\\applications\\launcher\\web\\plugins\\function.messagebox.php';
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "Templates.lan", "login", 0);
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'TITLE3');?>
</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="web/template/AdminLTE/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="web/template/AdminLTE/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="web/template/AdminLTE/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="web/template/AdminLTE/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="web/template/AdminLTE/plugins/iCheck/square/blue.css">


  <!-- Alertify -->  
  <?php echo '<script'; ?>
 src="./web/template/AdminLTE/plugins/alertify/alertify.min.js"><?php echo '</script'; ?>
>
  <link rel="stylesheet" href="./web/template/AdminLTE/plugins/alertify/alertify.css" />
  <link rel="stylesheet" href="./web/template/AdminLTE/plugins/alertify/alertify.core.css" />			 
  <link rel="stylesheet" href="./web/template/AdminLTE/plugins/alertify/alertify.default.css" />	
  
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
<![endif]-->

<!-- Google Font -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <p><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'TITLE');?>
</p>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
      <p class="login-box-msg"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'TITLE2');?>
</p>

      <form action="index.php" method="post">
        <input type="hidden" name="action" value="CmdLogin">
        <div class="form-group has-feedback">
          <input type="email" name="email" class="form-control" placeholder="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'USERNAME');?>
">
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="password" name="password" class="form-control" placeholder="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'PASSWORD');?>
">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row">
          <div class="col-xs-8">

          </div>
          <!-- /.col -->
          <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'BTNSINGIN');?>
</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <a href="#">I forgot my password</a><br>
      <a href="index.php?action=CmdDefaultRegister" class="text-center">Register a new membership</a>

    </div>
    <!-- /.login-box-body -->
  </div>
  <!-- /.login-box -->

  <!-- jQuery 3 -->
  <?php echo '<script'; ?>
 src="web/template/AdminLTE/bower_components/jquery/dist/jquery.min.js"><?php echo '</script'; ?>
>
  <!-- Bootstrap 3.3.7 -->
  <?php echo '<script'; ?>
 src="web/template/AdminLTE/bower_components/bootstrap/dist/js/bootstrap.min.js"><?php echo '</script'; ?>
>
  <!-- iCheck -->
  <?php echo '<script'; ?>
 src="web/template/AdminLTE/plugins/iCheck/icheck.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
>
    $(function () {
      $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' /* optional */
      });
    });
  <?php echo '</script'; ?>
>
  <!-- Plugin de mensajes emergentes -->
  <?php echo smarty_function_messagebox(array('id'=>$_smarty_tpl->tpl_vars['cod_message']->value),$_smarty_tpl);?>

</body>
</html>
<?php }
}
