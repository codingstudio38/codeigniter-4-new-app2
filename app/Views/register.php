<!DOCTYPE html>
<html>

<head>
	<title>User Registretion</title>
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
		.error{
			color: red;
		}
	</style>
</head>

<body class="bg-purple">
	<div class="body"> 
<?php 
$validation = \Config\Services::validation();
if(!session()->getFlashdata('reaponse')  == NULL) {
$reaponse = session()->getFlashdata('reaponse');
if($reaponse['status']== 'success') { ?>
<div class="alert alert-success" style="text-align: center;" >
<button style="float: right;" onclick="{$('.alert').toggle('slow');}" class="btn btn-info btn-sm">X</button>
	<?= $reaponse['message']; ?> <br>
Username: <?= $reaponse['email']; ?> and Password: <?= $reaponse['password']; ?><br>
	<a class="btn btn-success btn-sm" target="_blank" href="<?= base_url() ?>/user_email_active/<?= $reaponse['email_encode']; ?>/<?= $reaponse['user_id']; ?>">Click here</a>
</div>
<?php } else if($reaponse['status'] == 'failed') { ?>
<div class="alert alert-danger" style="cursor:pointer;" onclick="{$('.alert').toggle('slow');}"><?= $reaponse['message']; ?></div> 
<?php } } ?>
		<form action="<?= base_url('user/user_register') ?>" method="post" enctype="multipart/form-data" id="sky-form" class="sky-form">
			<?= csrf_field(); ?>
			<header>
				<div class="col-lg-12">
					<div class="row">
						<div class="col-md-7">
							Please Kindly Fill All Inputs
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
							<img src="<?= base_url() ?>/assets/rgform/img/img.png" class="" alt="profile" id="imgProfile" style="width: 150px; height: 150px; border: 4px solid #5607a5;">
						</td>
					</tr>
				</table>
				<section>
					<label class="label">Profile Picture</label>
					<label for="file" class="input input-file state-success">
						<div class="button"><input required accept="image/png, image/gif, image/jpeg" type="file" id="file" name="picture"  onchange="this.parentNode.nextSibling.value = this.value">Browse</div><input type="text" >
					<?php if($validation->getError('picture')){ ?> 
                    <div class="error"><?= $validation->getError('picture'); ?></div>
                    <?php }  ?>
					</label>
				</section>
				<div class="row">
					<section class="col col-6">
						Full Name
						<label class="input">
							<i class="icon-prepend fa fa-user"></i>
							<input type="text" name="name" id="name" required value="<?=old('name') ?>" placeholder="Full Name" >
					<?php if($validation->getError('name')){ ?> 
                    <div class="error"><?= $validation->getError('name'); ?></div>
                    <?php }  ?>
						</label>
					</section>
					<section class="col col-6">
						E-mail Id
						<label class="input">
							<i class="icon-prepend fa fa-envelope"></i>
							<input type="email" name="email" id="email" required value="<?=old('email') ?>" placeholder="E-mail">
					<?php if($validation->getError('email')){ ?> 
                    <div class="error"><?= $validation->getError('email'); ?></div>
                    <?php }  ?>
							<div id="emailPoint" style="color: red;"></div>
						</label>
					</section>
				</div>

				<div class="row">
					<section class="col col-6">
						Phone No
						<label class="input">
							<i class="icon-prepend fa fa-phone"></i>
							<input type="number" name="phone" id="phone" required minlength="10" maxlength="10" value="<?=old('phone') ?>" placeholder="Phone">
					<?php if($validation->getError('phone')){ ?> 
                    <div class="error"><?= $validation->getError('phone'); ?></div>
                    <?php }  ?>
							<div id="phonePoint" style="color: red;"></div>
						</label>
					</section>
					<section class="col col-6">
						DOB
						<label class="input">
							<input type="date" name="dob" id="dob" required value="<?=old('dob') ?>" placeholder="DOB">
					<?php if($validation->getError('dob')){ ?> 
                    <div class="error"><?= $validation->getError('dob'); ?></div>
                    <?php }  ?>
						</label>
					</section>
				</div>
				<div class="row">
					<section class="col col-6">
						Gender
						<label class="select">
							<select name="gender" id="gender" required>
								<option value="0" selected disabled>Select Gender</option>
								<option value="Male">Male</option>
								<option value="Female">Female</option>
								<select>
					<?php if($validation->getError('gender')){ ?> 
                    <div class="error"><?= $validation->getError('gender'); ?></div>
                    <?php }  ?>
						</label>
					</section>
					<section class="col col-6">
						Pin Code
						<label class="input">
							<input type="text" name="pincode" id="pincode" required value="<?=old('pincode') ?>" minlength="6" maxlength="6"  onkeypress="return /[0-9.]/i.test(event.key)" placeholder="Pin Code">
					<?php if($validation->getError('pincode')){ ?> 
                    <div class="error"><?= $validation->getError('pincode'); ?></div>
                    <?php }  ?>
						</label>
					</section>
				</div>
			</fieldset>

			<fieldset>
				<section id="post_section">
					<label class="select">
						<select name="postoffice" id="postoffice" required>
							<?php if(old('postoffice')){ ?> 
			                    <option value="<?=old('postoffice')?>" selected ><?=old('postoffice')?></option>
		                    <?php } else{ ?>
		                    	<option value="0" selected disabled>Select Post Office</option>
							<?php } ?>		
							<select>
					<?php if($validation->getError('postoffice')){ ?> 
                    <div class="error"><?= $validation->getError('postoffice'); ?></div>
                    <?php }  ?>
					</label>
				</section>
				<section id="dist_section">
					<label class="select">
						<select name="district" id="district" required>
							<?php if(old('district')){ ?> 
			                    <option value="<?=old('district')?>" selected ><?=old('district')?></option>
		                    <?php } else{ ?>
		                    	<option value="0" selected disabled>Select District</option>
							<?php } ?>
							<select>
					<?php if($validation->getError('district')){ ?> 
                    <div class="error"><?= $validation->getError('district'); ?></div>
                    <?php }  ?>
					</label>
				</section>
				<section id="state_section">
					<label class="select">
						<select name="state" id="state" required>
							<?php if(old('state')){ ?> 
			                    <option value="<?=old('state')?>" selected ><?=old('state')?></option>
		                    <?php } else{ ?>
		                    	<option value="0" selected disabled>Select State</option>
							<?php } ?>
							<select>
					<?php if($validation->getError('state')){ ?> 
                    <div class="error"><?= $validation->getError('state'); ?></div>
                    <?php }  ?>
					</label>
				</section>
				<section id="country_section">
					<label class="select">
						<select name="country" id="country" required>
							<?php if(old('country')){ ?> 
			                    <option value="<?=old('country')?>" selected ><?=old('country')?></option>
		                    <?php } else{ ?>
		                    	<option value="0" selected disabled>Select Country</option>
							<?php } ?>
							<select>
					<?php if($validation->getError('country')){ ?> 
                    <div class="error"><?= $validation->getError('country'); ?></div>
                    <?php }  ?>
					</label>
				</section>
				<label class="textarea">
					<textarea rows="3" name="address" id="address" required placeholder="Address (Village/Road)"><?=old('address') ?></textarea>
					<?php if($validation->getError('address')){ ?> 
                    <div class="error"><?= $validation->getError('address'); ?></div>
                    <?php }  ?>
				</label>
				</section>
			</fieldset>


			<footer>
				<button type="submit" name="submit_btn" id="submit_btn" class="button">Continue</button>
				<a href="<?= base_url('user/user_login') ?>" class="button" style="float: left;background-color: #a1b8de; color: black; font-weight: 500;">Already have an account</a>
			</footer>
		</form>
	</div>
	<div class="loading" id="loader">Loading&#8230;</div>

	<script type="text/javascript">
		var bas_URL = '<?= base_url() ?>';
		$(document).ready(function() {
			$('#file').on('change', function() {
				var fileName = $(this).val().split("\\").pop();
				$("#imgname").html(fileName);
				if (this.files && this.files[0]) {
					var reader = new FileReader();
					reader.onload = function(e) {
						$('#imgProfile').attr('src', e.target.result);
					};
					reader.readAsDataURL(this.files[0]);
				}
			});

			$("#email").change(() => {
				let email = $("#email").val();
				if (email == "") {
					$("#emailPoint").html("");
					return;
				} else {
					$.ajax({
						url: bas_URL+"/validation/user_emailCheck",
						type: "POST",
						data: {'email': email},
						success: function(data, textStatus, jQxhr) {
							let api = JSON.parse(data);
							console.clear();
							//console.log(api);return;
							if (api.status === 400) {
								//console.log(api);return;
								$("#email").val("");
								$("#emailPoint").html(api.message);
							} else {
								//console.log(api);return;
								$("#emailPoint").html("");
							}
						}
					})
				}
			});

			$("#phone").change(() => {
				let phone = $("#phone").val();
				if (phone == "") {
					$("#phonePoint").html("");
					return;
				} else {
					$.ajax({
						url: bas_URL+"/validation/user_phoneCheck",
						type: "POST",
						data: {'phone': phone},
						success: function(data, textStatus, jQxhr) {
							let api = JSON.parse(data);
							console.clear();
							if (api.status === 400) {
								//console.log(api);return;
								$("#phone").val("");
								$("#phonePoint").html(api.message);
							} else {
								//console.log(api);return;
								$("#phonePoint").html("");
							}
						}
					})
				}
			});




			$("#pincode").change(() => {
				let pincode = $("#pincode").val();
				if (pincode == "") {
					alert("Please Enter 6 digit Pin Code");
					$("#post_section").html("").append(`
<label class="select">
	<select name="postoffice" id="postoffice">
		<option value="0" selected disabled>Select Post Office</option>
	<select>
</label>`);
					$("#dist_section").html("").append(`
<label class="select">
	<select name="district" id="district">
		<option value="0" selected disabled>Select District</option>
	<select>
</label>`);
					$("#state_section").html("").append(`
<label class="select">
	<select name="state" id="state">
		<option value="0" selected disabled>Select State</option>
	<select>
</label>`);
					$("#country_section").html("").append(`
<label class="select">
	<select name="country" id="country">
		<option value="0" selected disabled>Select Country</option>
	<select>
</label>`);
					return;
				} else if (pincode.length > 6) {
					alert("Pin Code Should Be 6 Digit");
					$("#post_section").html("").append(`
<label class="select">
	<select name="postoffice" id="postoffice">
		<option value="0" selected disabled>Select Post Office</option>
	<select>
</label>`);
					$("#dist_section").html("").append(`
<label class="select">
	<select name="district" id="district">
		<option value="0" selected disabled>Select District</option>
	<select>
</label>`);
					$("#state_section").html("").append(`
<label class="select">
	<select name="state" id="state">
		<option value="0" selected disabled>Select State</option>
	<select>
</label>`);
					$("#country_section").html("").append(`
<label class="select">
	<select name="country" id="country">
		<option value="0" selected disabled>Select Country</option>
	<select>
</label>`);
					return;
				} else {
					$("#loader").css('display', 'block');
					$.ajax({
						url: `https://api.postalpincode.in/pincode/${pincode}`,
						method: "GET",
						success: function(data, textStatus, jQxhr) {
							$("#loader").css('display', 'none');
							console.clear();
							//console.log(data);
							// return;
							if (data[0].Status == "Success") {
								$("#post_section").html("").append(`
<label class="select">
	<select name="postoffice" id="postoffice">
		<option value="0" selected disabled>Select Post Office</option>
	<select>
</label>`);
								$("#dist_section").html("").append(`
<label class="select">
	<select name="district" id="district">
		<option value="0" selected disabled>Select District</option>
	<select>
</label>`);
								$("#state_section").html("").append(`
<label class="select">
	<select name="state" id="state">
		<option value="0" selected disabled>Select State</option>
	<select>
</label>`);
								$("#country_section").html("").append(`
<label class="select">
	<select name="country" id="country">
		<option value="0" selected disabled>Select Country</option>
	<select>
</label>`);
								let alldata = data[0].PostOffice;
								let view1 = "";
								let view2 = "";
								let view3 = "";
								let view4 = "";
								post = [];
								for (var i = 0; i < alldata.length; i++) {
									post.push(alldata[i].Name)
								}
								unique_post = [...new Set(post)];
								for (var i = 0; i < unique_post.length; i++) {
									view1 += `<option value="${unique_post[i]}">${unique_post[i]}</option>`;
								}
								Dist = [];
								for (var i = 0; i < alldata.length; i++) {
									Dist.push(alldata[i].District)
								}
								unique_Dist = [...new Set(Dist)];
								for (var i = 0; i < unique_Dist.length; i++) {
									view2 += `<option value="${unique_Dist[i]}">${unique_Dist[i]}</option>`;
								}

								State = [];
								for (var i = 0; i < alldata.length; i++) {
									State.push(alldata[i].State)
								}
								unique_State = [...new Set(State)];
								for (var i = 0; i < unique_State.length; i++) {
									view3 += `<option value="${unique_State[i]}">${unique_State[i]}</option>`;
								}
								country = [];
								for (var i = 0; i < alldata.length; i++) {
									country.push(alldata[i].Country)
								}
								unique_country = [...new Set(country)];
								for (var i = 0; i < unique_country.length; i++) {
									view4 += `<option value="${unique_country[i]}">${unique_country[i]}</option>`;
								}
								$("#postoffice").append(view1);
								$("#district").append(view2);
								$("#state").append(view3);
								$("#country").append(view4);
							} else {
								alert("Sorry No Records Found..!! Please manually type your address details");
								$("#post_section").html("").append(`
<label class="input">
	<input type="text" name="postoffice" id="postoffice" placeholder="Post Office">
</label>`);
								$("#dist_section").html("").append(`
<label class="input">
	<input type="text" name="district" id="district" placeholder="District">
</label>`);
								$("#state_section").html("").append(`
<label class="input">
	<input type="text" name="state" id="state" placeholder="State">
</label>`);
								$("#country_section").html("").append(`
<label class="select">
	<select name="country" id="country">
		<option value="India" selected>India</option>
	<select>
</label>`);
							}

						}
					})
				}
			});

		});



		$(function() {
			$('#sky-form').validate({
				rules: {
					name: {
						required: true
					},
					email: {
						required: true,
						email: true
					},
					phone: {
						required: true
					},
					dob: {
						required: true
					},
					gender: {
						required: true
					},
					pincode: {
						required: true,
						digits: true
					},
					postoffice: {
						required: true
					},
					district: {
						required: true
					},
					state: {
						required: true
					},
					country: {
						required: true
					},
					address: {
						required: true
					}
				},
				messages: {
					name: {
						required: 'Please enter your name'
					},
					email: {
						required: 'Please enter your email address',
						email: 'Please enter a VALID email address'
					},
					phone: {
						required: 'Please enter your phone number'
					},
					dob: {
						required: 'Please enter your dob'
					},
					gender: {
						required: 'Please select your gender'
					},
					pincode: {
						required: 'Please enter pin code',
						digits: 'Digits only please'
					},
					postoffice: {
						required: 'Please select your post office'
					},
					district: {
						required: 'Please select your district'
					},
					state: {
						required: 'Please select your state'
					},
					country: {
						required: 'Please select your country'
					},
					address: {
						required: 'Please enter your address'
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