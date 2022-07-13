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
	</style>
</head>

<body class="bg-purple">
	<div class="container">
	</div>
	<div class="body">
		<?php 
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

		<form action="#" method="post" enctype="multipart/form-data" id="sky-form" class="sky-form">
	
			<fieldset style="height:300px; margin-top:10%;">
				<section style="margin-top:15%;">
					 <a style="float:inherit !important;width: -webkit-fill-available; text-align: center;"   href="<?= base_url('user/user_login') ?>" class="button">Login</a>
				</section>
				<section>
					 <a style="float:inherit !important;width: -webkit-fill-available; text-align: center;"   href="<?= base_url('user/user_register') ?>" class="button">Register</a>
				</section>
				
			</fieldset>


		</form>
	</div>
</body>

</html>
