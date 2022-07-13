<!DOCTYPE html>
<html>

<head>
	<title>User Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="<?= base_url() ?>/assets/rgform/css/demo.css">
	<link rel="stylesheet" href="<?= base_url() ?>/assets/rgform/css/font-awesome.css">
	<link rel="stylesheet" href="<?= base_url() ?>/assets/rgform/css/sky-forms.css">
	<link rel="stylesheet" href="<?= base_url() ?>/assets/rgform/css/sky-forms-purple.css">
	<link rel="stylesheet" href="<?= base_url() ?>/assets/rgform/css/loader.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="<?= base_url() ?>/assets/rgform/js/jquery.min.js"></script>
	<script src="<?= base_url() ?>/assets/rgform/js/jquery.validate.min.js"></script>
	<script src="<?= base_url() ?>/assets/rgform/js/jquery.maskedinput.min.js"></script>
	<style type="text/css">
		.sky-form .button {
			margin: auto !important;
		}
		.error{
			color: red;
		}
	</style>
</head>

<body class="bg-purple">
	<div class="container">
	</div>
	<div class="body">
<?php 
$validation = \Config\Services::validation();
if(!session()->getFlashdata('reaponse')  == NULL) {
$reaponse = session()->getFlashdata('reaponse');
if($reaponse['status']== 'success') { ?>
<div class="alert alert-success" style="text-align: center;" >
<button style="float: right;" onclick="{$('.alert').toggle('slow');}" class="btn btn-info btn-sm">X</button>
	<?= $reaponse['message']; ?>
</div>
<?php } else if($reaponse['status'] == 'failed') { ?>
<div class="alert alert-danger" style="cursor:pointer;" onclick="{$('.alert').toggle('slow');}"><?= $reaponse['message']; ?></div> 
<?php } } ?>

	<form action="<?= base_url('user/user_login') ?>" method="post" enctype="multipart/form-data" id="sky-form" class="sky-form">
		<?= csrf_field(); ?>
			<header>
				<div class="col-lg-12">
					<div class="row">
						<div class="col-md-7">
							User Login
						</div>
						<div class="col-md-3">
							<a href="<?= base_url('user/user_login') ?>" class="button">Cancel</a>
						</div>
					</div>
				</div>
			</header>
			<fieldset>
				<table width="100%" border="0" cellspacing="0" cellpadding="0">
					<tr>
						<td align="center">
							<img src="<?= base_url() ?>/assets/rgform/img/login.png" class="" alt="profile" id="imgProfile" style="width: 150px; height: 150px; ">
						</td>
					</tr>
				</table>
				<section>
					<label class="label"></label>
					<label class="input">
						<i class="icon-prepend fa fa-envelope"></i>
						<input type="email" name="email" id="email" value="<?=old('email') ?>" required placeholder="E-mail">
					<?php if($validation->getError('email')){ ?> 
                       <div class="error"><?= $validation->getError('email'); ?></div>
                    <?php }  ?>
					</label>
				</section>
				<section>
					<label class="label"></label>
					<label class="input">
						<i class="fa fa-key icon-prepend" aria-hidden="true"></i>
						<input type="password" name="password" id="password" required placeholder="Password">
					<?php if($validation->getError('password')){ ?> 
                       <div class="error"><?= $validation->getError('password'); ?></div>
                    <?php }  ?>
					</label>
				</section>
				<section>
					 <button style="float:inherit !important;width: -webkit-fill-available;" type="submit" name="submit_btn" id="submit_btn" class="button">Login</button>
				</section>
				
			</fieldset>


			<footer>
				
				<a href="javascript:void(0)" class="button" style="float: left;background-color: #a1b8de; color: black; font-weight: 500;">Forgot password ??</a>
				<a href="<?= base_url('user/user_register') ?>" class="button" style="float: right;background-color: #a1b8de; color: black; font-weight: 500;">Create Account</a>
			</footer>
		</form>
	</div>
	<div class="loading" id="loader">Loading&#8230;</div>

	<script type="text/javascript">
		//$("#loader").css('display','none');

		$(function() {
			$('#sky-form').validate({
				rules: {
					email: {
						required: true,
						email: true
					},
					password: {
						required: true
					}
				},
				messages: {
					email: {
						required: 'Please enter your email address',
						email: 'Please enter a VALID email address'
					},
					password: {
						required: 'Please enter your password'
					}
				},
				errorPlacement: function(error, element) {
					error.insertAfter(element.parent());
				}
			});
		});
	</script>
</body>

</html>
