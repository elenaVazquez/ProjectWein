<?php 
$this->load->helper('url');
$this->lang->load('base', 'english');
$this->load->helper('form');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Login</title>

<link href="<?php echo base_url();?>css/weinweb.css" rel="stylesheet" type="text/css" />
</head>

<body>

<div id="login-box">

<H2><?=$this->lang->line('login');?></H2>

<br />
<br />
<?php echo form_open('loginController/userLogin'); ?>
<div id="login-box-name" style="margin-top:20px;"><?=$this->lang->line('username');?>:</div><div id="login-box-field" style="margin-top:20px;"><input name="usernamelogin" class="form-login" title="Username" value="<?= set_value('usernamelogin'); ?>" size="30" maxlength="2048" /></div>
<div id="login-box-name"><?=$this->lang->line('password');?>:</div><div id="login-box-field"><input name="passwordlogin" type="password" class="form-login" title="Password" value="<?= set_value('passwordlogin'); ?>" size="30" maxlength="2048" /></div>
<br />
<span class="login-box-options"><input type="checkbox" name="1" value="1"> <?=$this->lang->line('rememberMe');?></span>
<br />
<br />
<input id="loginButton" value="<?=$this->lang->line('login');?>" type="submit"/>

<?php echo form_close();?>
</div>


</body>
</html>