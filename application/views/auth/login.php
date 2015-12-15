<link type="text/css" rel="stylesheet" href="<?php echo site_url("assets/css/list.css"); ?>" media="screen" />

<style>
    body {
        font-family:        Verdana;
    }
    
    .login-box {
        width:      450px;
        margin-left:    auto;
        margin-right:   auto;
        margin-top:     75px;
    }
</style>

<?php echo form_open("auth/login");?>

<table class="login-box list-table">
    <tr>
        <th colspan="2">
            <h2><?php echo lang('login_heading');?></h2>
        </th>
    </tr>
    <tr>
        <th colspan="2">
            <?php echo lang('login_subheading');?>
        </th>
    </tr>
    <tr>
        <td colspan="2">
            <p><?php echo $message;?></p>
        </td>
    </tr>
    <tr>
        <td><?php echo lang('login_identity_label', 'identity');?></td>
        <td><?php echo form_input($identity);?></td>
    </tr>
    <tr>
        <td><?php echo lang('login_password_label', 'password');?></td>
        <td><?php echo form_input($password);?></td>
    </tr>
    <tr>
        <td><?php echo lang('login_remember_label', 'remember');?></td>
        <td><?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?></td>
    </tr>
    <tr>
        <td><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></td>
        <td><?php echo form_submit('submit', lang('login_submit_btn'));?></td>
    </tr>
</table>

<?php echo form_close();?>




<!--

<h1><?php echo lang('login_heading');?></h1>
<p><?php echo lang('login_subheading');?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("auth/login");?>

  <p>
    <?php echo lang('login_identity_label', 'identity');?>
    <?php echo form_input($identity);?>
  </p>

  <p>
    <?php echo lang('login_password_label', 'password');?>
    <?php echo form_input($password);?>
  </p>

  <p>
    <?php echo lang('login_remember_label', 'remember');?>
    <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
  </p>


  <p><?php echo form_submit('submit', lang('login_submit_btn'));?></p>

<?php echo form_close();?>

<p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p>

-->