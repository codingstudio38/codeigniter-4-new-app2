<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <title>Adminty - Premium Admin Template by Colorlib </title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="#">
    <meta name="keywords"
        content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">

    <?php include_once('component/header-css.php'); ?>
</head>

<body>

    <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
            </div>
        </div>
    </div>

    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
           <?php include_once('component/header.php'); ?>

           

           

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                   <?php include_once('component/nav-bar.php'); ?>
<?php 
if(!session()->getFlashdata('reaponse')  == NULL) {
$reaponse = session()->getFlashdata('reaponse');
if($reaponse['status']== 'success') { ?>
    <br><br>
    <div class="alert alert-success col-md-6" style="text-align: center; margin: auto;" >
<button style="float: right;margin-top: -6px;" onclick="{$('.alert').toggle('slow');}" class="btn btn-info btn-sm">X</button>
    <?= $reaponse['message']; ?>
</div>
<?php } else if($reaponse['status'] == 'failed') { ?>
    <br><br>
    <div class="alert alert-danger col-md-6" style="text-align: center; margin: auto;" >
<button style="float: right;margin-top: -6px;" onclick="{$('.alert').toggle('slow');}" class="btn btn-info btn-sm">X</button>
    <?= $reaponse['message']; ?>
</div>
<?php } } ?>
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">

                            <div class="main-body">
                                <div class="page-wrapper">

                                    <div class="page-header">
                                        <div class="row align-items-end">
                                            <div class="col-lg-8">
                                                <div class="page-header-title">
                                                    <div class="d-inline">
                                                        <h4>User Profile</h4>
                                                        <span>lorem ipsum dolor sit amet, consectetur adipisicing
                                                            elit</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="page-header-breadcrumb">
                                                    <ul class="breadcrumb-title">
                                                        <li class="breadcrumb-item" style="float: left;">
                                                            <a
                                                                href="<?= base_url() ?>/user_panel/dashboard">
                                                                <i class="feather icon-home"></i> </a>
                                                        </li>
                                                        <li class="breadcrumb-item" style="float: left;"><a
                                                                href="<?= base_url() ?>/user_panel/user_profile">User Profile</a>
                                                        </li>
                                                        
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="page-body">

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="cover-profile">
                                                    <div class="profile-bg-img">
                                                        <img class="profile-bg-img img-fluid"
                                                            src="<?= base_url() ?>/assets/user_assets/images/user-profile/bg-img1.jpg"
                                                            alt="bg-img">
                                                        <div class="card-block user-info">
                                                            <div class="col-md-12">
                                                                <div class="media-left">
                                                                    <a href="#" class="profile-image">
                                                                        <img class="user-img img-radius"
                                                                            src="<?= base_url() ?>/assets/user_assets/images/user-profile/user-img.jpg"
                                                                            alt="user-img">
                                                                    </a>
                                                                </div>
                                                                <div class="media-body row">
                                                                    <div class="col-lg-12">
                                                                        <div class="user-title">
                                                                            <h2>Josephin Villa</h2>
                                                                            <span class="text-white">Web designer</span>
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                                                        <div class="pull-right cover-btn">
                                                                            <button type="button"
                                                                                class="btn btn-primary m-r-10 m-b-5"><i
                                                                                    class="icofont icofont-plus"></i>
                                                                                Follow</button>
                                                                            <button type="button"
                                                                                class="btn btn-primary"><i
                                                                                    class="icofont icofont-ui-messaging"></i>
                                                                                Message</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-12">

                                                <div class="tab-header card">
                                                    <ul class="nav nav-tabs md-tabs tab-timeline" role="tablist"
                                                        id="mytab">
                                                        <li class="nav-item">
                                                            <a class="nav-link active" data-toggle="tab"
                                                                href="#personal" role="tab">Personal Info</a>
                                                            <div class="slide"></div>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#binfo"
                                                                role="tab">User's Services</a>
                                                            <div class="slide"></div>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#contacts"
                                                                role="tab">User's Contacts</a>
                                                            <div class="slide"></div>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#review"
                                                                role="tab">Reviews</a>
                                                            <div class="slide"></div>
                                                        </li>
                                                    </ul>
                                                </div>


                                                <div class="tab-content">

                                                    <div class="tab-pane active" id="personal" role="tabpanel">

                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h5 class="card-header-text">About Me</h5>
                                                                <button id="edit-btn" type="button"
                                                                    class="btn btn-sm btn-primary waves-effect waves-light f-right">
                                                                    <i class="icofont icofont-edit"></i>
                                                                </button>
                                                            </div>
                                                            <div class="card-block">
                                                                <div class="view-info">
                                                                    <div class="row">
                    <div class="col-lg-12">
                        <div class="general-info">
                            <div class="row">
                                <div class="col-lg-12 col-xl-6">
                                    <div class="table-responsive">
                                        <table class="table m-0">
                                            <tbody>
                                                <tr>
                                                    <th scope="row">
                                                        Full Name
                                                    </th>
                                                    <td>Josephine
                                                        Villa</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">
                                                        Gender</th>
                                                    <td>Female</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">
                                                        Birth Date
                                                    </th>
                                                    <td>October
                                                        25th, 1990
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">
                                                        Marital
                                                        Status</th>
                                                    <td>Single</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">
                                                        Location
                                                    </th>
                                                    <td>New York,
                                                        USA</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-xl-6">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <th scope="row">
                                                        Email</th>
                                                    <td><a
                                                            href="#!"><span
                                                                class="__cf_email__"
                                                                data-cfemail="7236171f1d32170a131f021e175c111d1f">[email&#160;protected]</span></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">
                                                        Mobile
                                                        Number</th>
                                                    <td>(0123) -
                                                        4567891</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">
                                                        Twitter</th>
                                                    <td>@xyz</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">
                                                        Skype</th>
                                                    <td>demo.skype
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">
                                                        Website</th>
                                                    <td><a
                                                            href="#!">www.demo.com</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="edit-info">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="general-info">
                            <div class="row">
                                <div class="col-lg-6">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div
                                                        class="input-group">
                                                        <span
                                                            class="input-group-addon"><i
                                                                class="icofont icofont-user"></i></span>
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            placeholder="Full Name">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div
                                                        class="form-radio">
                                                        <div
                                                            class="group-add-on">
                                                            <div
                                                                class="radio radiofill radio-inline">
                                                                <label>
                                                                    <input
                                                                        type="radio"
                                                                        name="radio"
                                                                        checked><i
                                                                        class="helper"></i>
                                                                    Male
                                                                </label>
                                                            </div>
                                                            <div
                                                                class="radio radiofill radio-inline">
                                                                <label>
                                                                    <input
                                                                        type="radio"
                                                                        name="radio"><i
                                                                        class="helper"></i>
                                                                    Female
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input
                                                        id="dropper-default"
                                                        class="form-control"
                                                        type="text"
                                                        placeholder="Select Your Birth Date" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <select
                                                        id="hello-single"
                                                        class="form-control">
                                                        <option
                                                            value="">
                                                            ----
                                                            Marital
                                                            Status
                                                            ----
                                                        </option>
                                                        <option
                                                            value="married">
                                                            Married
                                                        </option>
                                                        <option
                                                            value="unmarried">
                                                            Unmarried
                                                        </option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div
                                                        class="input-group">
                                                        <span
                                                            class="input-group-addon"><i
                                                                class="icofont icofont-location-pin"></i></span>
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            placeholder="Address">
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="col-lg-6">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div
                                                        class="input-group">
                                                        <span
                                                            class="input-group-addon"><i
                                                                class="icofont icofont-mobile-phone"></i></span>
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            placeholder="Mobile Number">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div
                                                        class="input-group">
                                                        <span
                                                            class="input-group-addon"><i
                                                                class="icofont icofont-social-twitter"></i></span>
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            placeholder="Twitter Id">
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div
                                                        class="input-group">
                                                        <span
                                                            class="input-group-addon"><i
                                                                class="icofont icofont-social-skype"></i></span>
                                                        <input
                                                            type="email"
                                                            class="form-control"
                                                            placeholder="Skype Id">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div
                                                        class="input-group">
                                                        <span
                                                            class="input-group-addon"><i
                                                                class="icofont icofont-earth"></i></span>
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            placeholder="website">
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>

                            <div class="text-center">
                                <a href="#!"
                                    class="btn btn-primary waves-effect waves-light m-r-20">Save</a>
                                <a href="#!" id="edit-cancel"
                                    class="btn btn-default waves-effect">Cancel</a>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-header-text">Description About
                        Me</h5>
                    <button id="edit-info-btn" type="button"
                        class="btn btn-sm btn-primary waves-effect waves-light f-right">
                        <i class="icofont icofont-edit"></i>
                    </button>
                </div>
                <div class="card-block user-desc">
                    <div class="view-desc">
                        <p>But I must explain to you how all this
                            mistaken idea of denouncing pleasure and
                            praising pain was born and I will give
                            you a complete account of the system,
                            and expound the actual teachings of the
                            great explorer of the truth, the
                            master-builder of human happiness. No
                            one rejects, dislikes, or avoids
                            pleasure itself, because it is pleasure,
                            but because those who do not know how to
                            pursue pleasure rationally encounter
                            consequences that are extremely painful.
                            Nor again is there anyone who loves or
                            pursues or desires to obtain pain of
                            itself, because it is pain, but because
                            occasionally circumstances occur in
                            which toil and pain can procure him some
                            great pleasure. To take a trivial
                            example, which of us ever undertakes
                            laborious physical exercise, except to
                            obtain some advantage from it? But who
                            has any right to find fault with a man
                            who chooses to enjoy a pleasure that has
                            no annoying consequences, or one who
                            avoids a pain that produces no resultant
                            pleasure?" "On the other hand, we
                            denounce with righteous indignation and
                            dislike men who are so beguiled and
                            demoralized by the charms of pleasure of
                            the moment, so blinded by desire, that
                            they cannot foresee the pain and trouble
                            that are bound to ensue; and equal blame
                            belongs to those who fail in their duty
                            through weakness of will, which is the
                            same as saying through shrinking from
                            toil and pain. These cases are perfectly
                            simple and easy to distinguish. In a
                            free hour, when our power of choice is
                            untrammelled and when nothing prevents
                            our being able To Do what we like best,
                            every pleasure is to be welcomed and
                            every pain avoided. But in certain
                            circumstances and owing to the claims of
                            duty or the obligations of business it
                            will frequently occur that pleasures
                            have to be repudiated and annoyances
                            accepted. The wise man therefore always
                            holds in these matters to this principle
                            of selection: he rejects pleasures to
                            secure other greater pleasures, or else
                            he endures pains to avoid worse pain.
                        </p>
                    </div>
                    <div class="edit-desc">
                        <div class="col-md-12">
                            <textarea id="description">
        <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?" "On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able To Do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pain.</p>
    </textarea>
                        </div>
                        <div class="text-center">
                            <a href="#!"
                                class="btn btn-primary waves-effect waves-light m-r-20 m-t-20">Save</a>
                            <a href="#!" id="edit-cancel-btn"
                                class="btn btn-default waves-effect m-t-20">Cancel</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


<div class="tab-pane" id="binfo" role="tabpanel">

    <div class="card">
        <div class="card-header">
            <h5 class="card-header-text">User Services</h5>
        </div>
        <div class="card-block">
            <div class="row">
                <div class="col-md-6">
                    <div
                        class="card b-l-success business-info services m-b-20">
                        <div class="card-header">
                            <div class="service-header">
                                <a href="#">
                                    <h5 class="card-header-text">
                                        Shivani Hero</h5>
                                </a>
                            </div>
                            <span
                                class="dropdown-toggle addon-btn text-muted f-right service-btn"
                                data-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="true" role="tooltip">
                            </span>
                            <div
                                class="dropdown-menu dropdown-menu-right b-none services-list">
                                <a class="dropdown-item"
                                    href="#!"><i
                                        class="icofont icofont-edit"></i>
                                    Edit</a>
                                <a class="dropdown-item"
                                    href="#!"><i
                                        class="icofont icofont-ui-delete"></i>
                                    Delete</a>
                                <a class="dropdown-item"
                                    href="#!"><i
                                        class="icofont icofont-eye-alt"></i>
                                    View</a>
                            </div>
                        </div>
                        <div class="card-block">
                            <div class="row">
                                <div class="col-sm-12">
                                    <p class="task-detail">Lorem
                                        ipsum dolor sit amet,
                                        consectet ur adipisicing
                                        elit, sed do eiusmod temp or
                                        incidi dunt ut labore
                                        et.Lorem ipsum dolor sit
                                        amet, consecte.</p>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
                <div class="col-md-6">
                    <div
                        class="card b-l-danger business-info services">
                        <div class="card-header">
                            <div class="service-header">
                                <a href="#">
                                    <h5 class="card-header-text">
                                        Dress and Sarees</h5>
                                </a>
                            </div>
                            <span
                                class="dropdown-toggle addon-btn text-muted f-right service-btn"
                                data-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="true" role="tooltip">
                            </span>
                            <div
                                class="dropdown-menu dropdown-menu-right b-none services-list">
                                <a class="dropdown-item"
                                    href="#!"><i
                                        class="icofont icofont-edit"></i>
                                    Edit</a>
                                <a class="dropdown-item"
                                    href="#!"><i
                                        class="icofont icofont-ui-delete"></i>
                                    Delete</a>
                                <a class="dropdown-item"
                                    href="#!"><i
                                        class="icofont icofont-eye-alt"></i>
                                    View</a>
                            </div>
                        </div>
                        <div class="card-block">
                            <div class="row">
                                <div class="col-sm-12">
                                    <p class="task-detail">Lorem
                                        ipsum dolor sit amet,
                                        consectet ur adipisicing
                                        elit, sed do eiusmod temp or
                                        incidi dunt ut labore
                                        et.Lorem ipsum dolor sit
                                        amet, consecte.</p>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
                <div class="col-md-6">
                    <div
                        class="card b-l-info business-info services">
                        <div class="card-header">
                            <div class="service-header">
                                <a href="#">
                                    <h5 class="card-header-text">
                                        Shivani Auto Port</h5>
                                </a>
                            </div>
                            <span
                                class="dropdown-toggle addon-btn text-muted f-right service-btn"
                                data-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="true" role="tooltip">
                            </span>
                            <div
                                class="dropdown-menu dropdown-menu-right b-none services-list">
                                <a class="dropdown-item"
                                    href="#!"><i
                                        class="icofont icofont-edit"></i>
                                    Edit</a>
                                <a class="dropdown-item"
                                    href="#!"><i
                                        class="icofont icofont-ui-delete"></i>
                                    Delete</a>
                                <a class="dropdown-item"
                                    href="#!"><i
                                        class="icofont icofont-eye-alt"></i>
                                    View</a>
                            </div>
                        </div>
                        <div class="card-block">
                            <div class="row">
                                <div class="col-sm-12">
                                    <p class="task-detail">Lorem
                                        ipsum dolor sit amet,
                                        consectet ur adipisicing
                                        elit, sed do eiusmod temp or
                                        incidi dunt ut labore
                                        et.Lorem ipsum dolor sit
                                        amet, consecte.</p>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
                <div class="col-md-6">
                    <div
                        class="card b-l-warning business-info services">
                        <div class="card-header">
                            <div class="service-header">
                                <a href="#">
                                    <h5 class="card-header-text">
                                        Hair stylist</h5>
                                </a>
                            </div>
                            <span
                                class="dropdown-toggle addon-btn text-muted f-right service-btn"
                                data-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="true" role="tooltip">
                            </span>
                            <div
                                class="dropdown-menu dropdown-menu-right b-none services-list">
                                <a class="dropdown-item"
                                    href="#!"><i
                                        class="icofont icofont-edit"></i>
                                    Edit</a>
                                <a class="dropdown-item"
                                    href="#!"><i
                                        class="icofont icofont-ui-delete"></i>
                                    Delete</a>
                                <a class="dropdown-item"
                                    href="#!"><i
                                        class="icofont icofont-eye-alt"></i>
                                    View</a>
                            </div>
                        </div>
                        <div class="card-block">
                            <div class="row">
                                <div class="col-sm-12">
                                    <p class="task-detail">Lorem
                                        ipsum dolor sit amet,
                                        consectet ur adipisicing
                                        elit, sed do eiusmod temp or
                                        incidi dunt ut labore
                                        et.Lorem ipsum dolor sit
                                        amet, consecte.</p>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
                <div class="col-md-6">
                    <div
                        class="card b-l-danger business-info services">
                        <div class="card-header">
                            <div class="service-header">
                                <a href="#">
                                    <h5 class="card-header-text">BMW
                                        India</h5>
                                </a>
                            </div>
                            <span
                                class="dropdown-toggle addon-btn text-muted f-right service-btn"
                                data-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="true" role="tooltip">
                            </span>
                            <div
                                class="dropdown-menu dropdown-menu-right b-none services-list">
                                <a class="dropdown-item"
                                    href="#!"><i
                                        class="icofont icofont-edit"></i>
                                    Edit</a>
                                <a class="dropdown-item"
                                    href="#!"><i
                                        class="icofont icofont-ui-delete"></i>
                                    Delete</a>
                                <a class="dropdown-item"
                                    href="#!"><i
                                        class="icofont icofont-eye-alt"></i>
                                    View</a>
                            </div>
                        </div>
                        <div class="card-block">
                            <div class="row">
                                <div class="col-sm-12">
                                    <p class="task-detail">Lorem
                                        ipsum dolor sit amet,
                                        consectet ur adipisicing
                                        elit, sed do eiusmod temp or
                                        incidi dunt ut labore
                                        et.Lorem ipsum dolor sit
                                        amet, consecte.</p>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
                <div class="col-md-6">
                    <div
                        class="card b-l-success business-info services">
                        <div class="card-header">
                            <div class="service-header">
                                <a href="#">
                                    <h5 class="card-header-text">
                                        Shivani Hero</h5>
                                </a>
                            </div>
                            <span
                                class="dropdown-toggle addon-btn text-muted f-right service-btn"
                                data-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="true" role="tooltip">
                            </span>
                            <div
                                class="dropdown-menu dropdown-menu-right b-none services-list">
                                <a class="dropdown-item"
                                    href="#!"><i
                                        class="icofont icofont-edit"></i>
                                    Edit</a>
                                <a class="dropdown-item"
                                    href="#!"><i
                                        class="icofont icofont-ui-delete"></i>
                                    Delete</a>
                                <a class="dropdown-item"
                                    href="#!"><i
                                        class="icofont icofont-eye-alt"></i>
                                    View</a>
                            </div>
                        </div>
                        <div class="card-block">
                            <div class="row">
                                <div class="col-sm-12">
                                    <p class="task-detail">Lorem
                                        ipsum dolor sit amet,
                                        consectet ur adipisicing
                                        elit, sed do eiusmod temp or
                                        incidi dunt ut labore
                                        et.Lorem ipsum dolor sit
                                        amet, consecte.</p>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-header-text">Profit</h5>
                </div>
                <div class="card-block">
                    <div id="main"
                        style="height:300px;width: 100%;"></div>
                </div>
            </div>
        </div>
    </div>

</div>


<div class="tab-pane" id="contacts" role="tabpanel">
    <div class="row">
        <div class="col-xl-3">

            <div class="card">
                <div class="card-header contact-user">
                    <img class="img-radius img-40"
                        src="<?= base_url() ?>/assets/user_assets/images/avatar-4.jpg"
                        alt="contact-user">
                    <h5 class="m-l-10">John Doe</h5>
                </div>
                <div class="card-block">
                    <ul class="list-group list-contacts">
                        <li class="list-group-item active"><a
                                href="#">All Contacts</a></li>
                        <li class="list-group-item"><a
                                href="#">Recent Contacts</a></li>
                        <li class="list-group-item"><a
                                href="#">Favourite Contacts</a></li>
                    </ul>
                </div>
                <div class="card-block groups-contact">
                    <h4>Groups</h4>
                    <ul class="list-group">
                        <li
                            class="list-group-item justify-content-between">
                            Project
                            <span
                                class="badge badge-primary badge-pill">30</span>
                        </li>
                        <li
                            class="list-group-item justify-content-between">
                            Notes
                            <span
                                class="badge badge-success badge-pill">20</span>
                        </li>
                        <li
                            class="list-group-item justify-content-between">
                            Activity
                            <span
                                class="badge badge-info badge-pill">100</span>
                        </li>
                        <li
                            class="list-group-item justify-content-between">
                            Schedule
                            <span
                                class="badge badge-danger badge-pill">50</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Contacts<span
                            class="f-15"> (100)</span></h4>
                </div>
                <div class="card-block">
                    <div class="connection-list">
                        <a href="#"><img
                                class="img-fluid img-radius"
                                src="<?= base_url() ?>/assets/user_assets/images/user-profile/follower/f-1.jpg"
                                alt="f-1" data-toggle="tooltip"
                                data-placement="top"
                                data-original-title="Airi Satou">
                        </a>
                        <a href="#"><img
                                class="img-fluid img-radius"
                                src="<?= base_url() ?>/assets/user_assets/images/user-profile/follower/f-2.jpg"
                                alt="f-2" data-toggle="tooltip"
                                data-placement="top"
                                data-original-title="Angelica Ramos">
                        </a>
                        <a href="#"><img
                                class="img-fluid img-radius"
                                src="<?= base_url() ?>/assets/user_assets/images/user-profile/follower/f-3.jpg"
                                alt="f-3" data-toggle="tooltip"
                                data-placement="top"
                                data-original-title="Ashton Cox">
                        </a>
                        <a href="#"><img
                                class="img-fluid img-radius"
                                src="<?= base_url() ?>/assets/user_assets/images/user-profile/follower/f-4.jpg"
                                alt="f-4" data-toggle="tooltip"
                                data-placement="top"
                                data-original-title="Cara Stevens">
                        </a>
                        <a href="#"><img
                                class="img-fluid img-radius"
                                src="<?= base_url() ?>/assets/user_assets/images/user-profile/follower/f-5.jpg"
                                alt="f-5" data-toggle="tooltip"
                                data-placement="top"
                                data-original-title="Garrett Winters">
                        </a>
                        <a href="#"><img
                                class="img-fluid img-radius"
                                src="<?= base_url() ?>/assets/user_assets/images/user-profile/follower/f-1.jpg"
                                alt="f-6" data-toggle="tooltip"
                                data-placement="top"
                                data-original-title="Cedric Kelly">
                        </a>
                        <a href="#"><img
                                class="img-fluid img-radius"
                                src="<?= base_url() ?>/assets/user_assets/images/user-profile/follower/f-3.jpg"
                                alt="f-7" data-toggle="tooltip"
                                data-placement="top"
                                data-original-title="Brielle Williamson">
                        </a>
                        <a href="#"><img
                                class="img-fluid img-radius"
                                src="<?= base_url() ?>/assets/user_assets/images/user-profile/follower/f-5.jpg"
                                alt="f-8" data-toggle="tooltip"
                                data-placement="top"
                                data-original-title="Jena Gaines">
                        </a>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-xl-9">
            <div class="row">
                <div class="col-sm-12">

                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-header-text">Contacts
                            </h5>
                        </div>
                        <div class="card-block contact-details">
                            <div
                                class="data_table_main table-responsive dt-responsive">
                                <table id="simpletable"
                                    class="table  table-striped table-bordered nowrap">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Mobileno.</th>
                                            <th>Favourite</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection"
                                                    class="__cf_email__"
                                                    data-cfemail="5130333260636211363c30383d7f323e3c">[email&#160;protected]</a>
                                            </td>
                                            <td>9989988988</td>
                                            <td><i class="fa fa-star"
                                                    aria-hidden="true"></i>
                                            </td>
                                            <td class="dropdown">
                                                <button
                                                    type="button"
                                                    class="btn btn-primary dropdown-toggle"
                                                    data-toggle="dropdown"
                                                    aria-haspopup="true"
                                                    aria-expanded="false"><i
                                                        class="fa fa-cog"
                                                        aria-hidden="true"></i></button>
                                                <div
                                                    class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-edit"></i>Edit</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-ui-delete"></i>Delete</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-eye-alt"></i>View</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-tasks-alt"></i>Project</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-ui-note"></i>Notes</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-eye-alt"></i>Activity</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-badge"></i>Schedule</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection"
                                                    class="__cf_email__"
                                                    data-cfemail="2e4f4c4d1f1c1d6e49434f4742004d4143">[email&#160;protected]</a>
                                            </td>
                                            <td>9989988988</td>
                                            <td><i class="fa fa-star-o"
                                                    aria-hidden="true"></i>
                                            </td>
                                            <td class="dropdown">
                                                <button
                                                    type="button"
                                                    class="btn btn-primary dropdown-toggle"
                                                    data-toggle="dropdown"
                                                    aria-haspopup="true"
                                                    aria-expanded="false"><i
                                                        class="fa fa-cog"
                                                        aria-hidden="true"></i></button>
                                                <div
                                                    class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-edit"></i>Edit</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-ui-delete"></i>Delete</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-eye-alt"></i>View</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-tasks-alt"></i>Project</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-ui-note"></i>Notes</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-eye-alt"></i>Activity</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-badge"></i>Schedule</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection"
                                                    class="__cf_email__"
                                                    data-cfemail="1273707123202152757f737b7e3c717d7f">[email&#160;protected]</a>
                                            </td>
                                            <td>9989988988</td>
                                            <td><i class="fa fa-star"
                                                    aria-hidden="true"></i>
                                            </td>
                                            <td class="dropdown">
                                                <button
                                                    type="button"
                                                    class="btn btn-primary dropdown-toggle"
                                                    data-toggle="dropdown"
                                                    aria-haspopup="true"
                                                    aria-expanded="false"><i
                                                        class="fa fa-cog"
                                                        aria-hidden="true"></i></button>
                                                <div
                                                    class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-edit"></i>Edit</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-ui-delete"></i>Delete</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-eye-alt"></i>View</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-tasks-alt"></i>Project</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-ui-note"></i>Notes</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-eye-alt"></i>Activity</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-badge"></i>Schedule</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection"
                                                    class="__cf_email__"
                                                    data-cfemail="1071727321222350777d71797c3e737f7d">[email&#160;protected]</a>
                                            </td>
                                            <td>9989988988</td>
                                            <td><i class="fa fa-star"
                                                    aria-hidden="true"></i>
                                            </td>
                                            <td class="dropdown">
                                                <button
                                                    type="button"
                                                    class="btn btn-primary dropdown-toggle"
                                                    data-toggle="dropdown"
                                                    aria-haspopup="true"
                                                    aria-expanded="false"><i
                                                        class="fa fa-cog"
                                                        aria-hidden="true"></i></button>
                                                <div
                                                    class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-edit"></i>Edit</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-ui-delete"></i>Delete</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-eye-alt"></i>View</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-tasks-alt"></i>Project</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-ui-note"></i>Notes</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-eye-alt"></i>Activity</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-badge"></i>Schedule</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection"
                                                    class="__cf_email__"
                                                    data-cfemail="6001020351525320070d01090c4e030f0d">[email&#160;protected]</a>
                                            </td>
                                            <td>9989988988</td>
                                            <td><i class="fa fa-star-o"
                                                    aria-hidden="true"></i>
                                            </td>
                                            <td class="dropdown">
                                                <button
                                                    type="button"
                                                    class="btn btn-primary dropdown-toggle"
                                                    data-toggle="dropdown"
                                                    aria-haspopup="true"
                                                    aria-expanded="false"><i
                                                        class="fa fa-cog"
                                                        aria-hidden="true"></i></button>
                                                <div
                                                    class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-edit"></i>Edit</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-ui-delete"></i>Delete</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-eye-alt"></i>View</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-tasks-alt"></i>Project</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-ui-note"></i>Notes</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-eye-alt"></i>Activity</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-badge"></i>Schedule</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection"
                                                    class="__cf_email__"
                                                    data-cfemail="dfbebdbceeedec9fb8b2beb6b3f1bcb0b2">[email&#160;protected]</a>
                                            </td>
                                            <td>9989988988</td>
                                            <td><i class="fa fa-star"
                                                    aria-hidden="true"></i>
                                            </td>
                                            <td class="dropdown">
                                                <button
                                                    type="button"
                                                    class="btn btn-primary dropdown-toggle"
                                                    data-toggle="dropdown"
                                                    aria-haspopup="true"
                                                    aria-expanded="false"><i
                                                        class="fa fa-cog"
                                                        aria-hidden="true"></i></button>
                                                <div
                                                    class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-edit"></i>Edit</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-ui-delete"></i>Delete</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-eye-alt"></i>View</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-tasks-alt"></i>Project</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-ui-note"></i>Notes</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-eye-alt"></i>Activity</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-badge"></i>Schedule</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection"
                                                    class="__cf_email__"
                                                    data-cfemail="34555657050607745359555d581a575b59">[email&#160;protected]</a>
                                            </td>
                                            <td>9989988988</td>
                                            <td><i class="fa fa-star"
                                                    aria-hidden="true"></i>
                                            </td>
                                            <td class="dropdown">
                                                <button
                                                    type="button"
                                                    class="btn btn-primary dropdown-toggle"
                                                    data-toggle="dropdown"
                                                    aria-haspopup="true"
                                                    aria-expanded="false"><i
                                                        class="fa fa-cog"
                                                        aria-hidden="true"></i></button>
                                                <div
                                                    class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-edit"></i>Edit</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-ui-delete"></i>Delete</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-eye-alt"></i>View</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-tasks-alt"></i>Project</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-ui-note"></i>Notes</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-eye-alt"></i>Activity</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-badge"></i>Schedule</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection"
                                                    class="__cf_email__"
                                                    data-cfemail="6f0e0d0c5e5d5c2f08020e0603410c0002">[email&#160;protected]</a>
                                            </td>
                                            <td>9989988988</td>
                                            <td><i class="fa fa-star"
                                                    aria-hidden="true"></i>
                                            </td>
                                            <td class="dropdown">
                                                <button
                                                    type="button"
                                                    class="btn btn-primary dropdown-toggle"
                                                    data-toggle="dropdown"
                                                    aria-haspopup="true"
                                                    aria-expanded="false"><i
                                                        class="fa fa-cog"
                                                        aria-hidden="true"></i></button>
                                                <div
                                                    class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-edit"></i>Edit</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-ui-delete"></i>Delete</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-eye-alt"></i>View</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-tasks-alt"></i>Project</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-ui-note"></i>Notes</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-eye-alt"></i>Activity</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-badge"></i>Schedule</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection"
                                                    class="__cf_email__"
                                                    data-cfemail="28494a4b191a1b684f45494144064b4745">[email&#160;protected]</a>
                                            </td>
                                            <td>9989988988</td>
                                            <td><i class="fa fa-star"
                                                    aria-hidden="true"></i>
                                            </td>
                                            <td class="dropdown">
                                                <button
                                                    type="button"
                                                    class="btn btn-primary dropdown-toggle"
                                                    data-toggle="dropdown"
                                                    aria-haspopup="true"
                                                    aria-expanded="false"><i
                                                        class="fa fa-cog"
                                                        aria-hidden="true"></i></button>
                                                <div
                                                    class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-edit"></i>Edit</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-ui-delete"></i>Delete</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-eye-alt"></i>View</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-tasks-alt"></i>Project</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-ui-note"></i>Notes</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-eye-alt"></i>Activity</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-badge"></i>Schedule</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection"
                                                    class="__cf_email__"
                                                    data-cfemail="09686b6a383b3a496e64686065276a6664">[email&#160;protected]</a>
                                            </td>
                                            <td>9989988988</td>
                                            <td><i class="fa fa-star-o"
                                                    aria-hidden="true"></i>
                                            </td>
                                            <td class="dropdown">
                                                <button
                                                    type="button"
                                                    class="btn btn-primary dropdown-toggle"
                                                    data-toggle="dropdown"
                                                    aria-haspopup="true"
                                                    aria-expanded="false"><i
                                                        class="fa fa-cog"
                                                        aria-hidden="true"></i></button>
                                                <div
                                                    class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-edit"></i>Edit</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-ui-delete"></i>Delete</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-eye-alt"></i>View</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-tasks-alt"></i>Project</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-ui-note"></i>Notes</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-eye-alt"></i>Activity</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-badge"></i>Schedule</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection"
                                                    class="__cf_email__"
                                                    data-cfemail="1071727321222350777d71797c3e737f7d">[email&#160;protected]</a>
                                            </td>
                                            <td>9989988988</td>
                                            <td><i class="fa fa-star"
                                                    aria-hidden="true"></i>
                                            </td>
                                            <td class="dropdown">
                                                <button
                                                    type="button"
                                                    class="btn btn-primary dropdown-toggle"
                                                    data-toggle="dropdown"
                                                    aria-haspopup="true"
                                                    aria-expanded="false"><i
                                                        class="fa fa-cog"
                                                        aria-hidden="true"></i></button>
                                                <div
                                                    class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-edit"></i>Edit</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-ui-delete"></i>Delete</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-eye-alt"></i>View</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-tasks-alt"></i>Project</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-ui-note"></i>Notes</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-eye-alt"></i>Activity</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-badge"></i>Schedule</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection"
                                                    class="__cf_email__"
                                                    data-cfemail="a2c3c0c1939091e2c5cfc3cbce8cc1cdcf">[email&#160;protected]</a>
                                            </td>
                                            <td>9989988988</td>
                                            <td><i class="fa fa-star"
                                                    aria-hidden="true"></i>
                                            </td>
                                            <td class="dropdown">
                                                <button
                                                    type="button"
                                                    class="btn btn-primary dropdown-toggle"
                                                    data-toggle="dropdown"
                                                    aria-haspopup="true"
                                                    aria-expanded="false"><i
                                                        class="fa fa-cog"
                                                        aria-hidden="true"></i></button>
                                                <div
                                                    class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-edit"></i>Edit</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-ui-delete"></i>Delete</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-eye-alt"></i>View</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-tasks-alt"></i>Project</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-ui-note"></i>Notes</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-eye-alt"></i>Activity</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-badge"></i>Schedule</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection"
                                                    class="__cf_email__"
                                                    data-cfemail="afcecdcc9e9d9cefc8c2cec6c381ccc0c2">[email&#160;protected]</a>
                                            </td>
                                            <td>9989988988</td>
                                            <td><i class="fa fa-star"
                                                    aria-hidden="true"></i>
                                            </td>
                                            <td class="dropdown">
                                                <button
                                                    type="button"
                                                    class="btn btn-primary dropdown-toggle"
                                                    data-toggle="dropdown"
                                                    aria-haspopup="true"
                                                    aria-expanded="false"><i
                                                        class="fa fa-cog"
                                                        aria-hidden="true"></i></button>
                                                <div
                                                    class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-edit"></i>Edit</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-ui-delete"></i>Delete</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-eye-alt"></i>View</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-tasks-alt"></i>Project</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-ui-note"></i>Notes</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-eye-alt"></i>Activity</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-badge"></i>Schedule</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection"
                                                    class="__cf_email__"
                                                    data-cfemail="6100030250535221060c00080d4f020e0c">[email&#160;protected]</a>
                                            </td>
                                            <td>9989988988</td>
                                            <td><i class="fa fa-star"
                                                    aria-hidden="true"></i>
                                            </td>
                                            <td class="dropdown">
                                                <button
                                                    type="button"
                                                    class="btn btn-primary dropdown-toggle"
                                                    data-toggle="dropdown"
                                                    aria-haspopup="true"
                                                    aria-expanded="false"><i
                                                        class="fa fa-cog"
                                                        aria-hidden="true"></i></button>
                                                <div
                                                    class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-edit"></i>Edit</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-ui-delete"></i>Delete</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-eye-alt"></i>View</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-tasks-alt"></i>Project</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-ui-note"></i>Notes</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-eye-alt"></i>Activity</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-badge"></i>Schedule</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection"
                                                    class="__cf_email__"
                                                    data-cfemail="e9888b8ad8dbdaa98e84888085c78a8684">[email&#160;protected]</a>
                                            </td>
                                            <td>9989988988</td>
                                            <td><i class="fa fa-star-o"
                                                    aria-hidden="true"></i>
                                            </td>
                                            <td class="dropdown">
                                                <button
                                                    type="button"
                                                    class="btn btn-primary dropdown-toggle"
                                                    data-toggle="dropdown"
                                                    aria-haspopup="true"
                                                    aria-expanded="false"><i
                                                        class="fa fa-cog"
                                                        aria-hidden="true"></i></button>
                                                <div
                                                    class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-edit"></i>Edit</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-ui-delete"></i>Delete</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-eye-alt"></i>View</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-tasks-alt"></i>Project</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-ui-note"></i>Notes</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-eye-alt"></i>Activity</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-badge"></i>Schedule</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection"
                                                    class="__cf_email__"
                                                    data-cfemail="3b5a59580a09087b5c565a525715585456">[email&#160;protected]</a>
                                            </td>
                                            <td>9989988988</td>
                                            <td><i class="fa fa-star"
                                                    aria-hidden="true"></i>
                                            </td>
                                            <td class="dropdown">
                                                <button
                                                    type="button"
                                                    class="btn btn-primary dropdown-toggle"
                                                    data-toggle="dropdown"
                                                    aria-haspopup="true"
                                                    aria-expanded="false"><i
                                                        class="fa fa-cog"
                                                        aria-hidden="true"></i></button>
                                                <div
                                                    class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-edit"></i>Edit</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-ui-delete"></i>Delete</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-eye-alt"></i>View</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-tasks-alt"></i>Project</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-ui-note"></i>Notes</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-eye-alt"></i>Activity</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-badge"></i>Schedule</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection"
                                                    class="__cf_email__"
                                                    data-cfemail="74151617454647341319151d185a171b19">[email&#160;protected]</a>
                                            </td>
                                            <td>9989988988</td>
                                            <td><i class="fa fa-star-o"
                                                    aria-hidden="true"></i>
                                            </td>
                                            <td class="dropdown">
                                                <button
                                                    type="button"
                                                    class="btn btn-primary dropdown-toggle"
                                                    data-toggle="dropdown"
                                                    aria-haspopup="true"
                                                    aria-expanded="false"><i
                                                        class="fa fa-cog"
                                                        aria-hidden="true"></i></button>
                                                <div
                                                    class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-edit"></i>Edit</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-ui-delete"></i>Delete</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-eye-alt"></i>View</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-tasks-alt"></i>Project</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-ui-note"></i>Notes</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-eye-alt"></i>Activity</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-badge"></i>Schedule</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection"
                                                    class="__cf_email__"
                                                    data-cfemail="6d0c0f0e5c5f5e2d0a000c0401430e0200">[email&#160;protected]</a>
                                            </td>
                                            <td>9989988988</td>
                                            <td><i class="fa fa-star"
                                                    aria-hidden="true"></i>
                                            </td>
                                            <td class="dropdown">
                                                <button
                                                    type="button"
                                                    class="btn btn-primary dropdown-toggle"
                                                    data-toggle="dropdown"
                                                    aria-haspopup="true"
                                                    aria-expanded="false"><i
                                                        class="fa fa-cog"
                                                        aria-hidden="true"></i></button>
                                                <div
                                                    class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-edit"></i>Edit</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-ui-delete"></i>Delete</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-eye-alt"></i>View</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-tasks-alt"></i>Project</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-ui-note"></i>Notes</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-eye-alt"></i>Activity</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-badge"></i>Schedule</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection"
                                                    class="__cf_email__"
                                                    data-cfemail="0d6c6f6e3c3f3e4d6a606c6461236e6260">[email&#160;protected]</a>
                                            </td>
                                            <td>9989988988</td>
                                            <td><i class="fa fa-star"
                                                    aria-hidden="true"></i>
                                            </td>
                                            <td class="dropdown">
                                                <button
                                                    type="button"
                                                    class="btn btn-primary dropdown-toggle"
                                                    data-toggle="dropdown"
                                                    aria-haspopup="true"
                                                    aria-expanded="false"><i
                                                        class="fa fa-cog"
                                                        aria-hidden="true"></i></button>
                                                <div
                                                    class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-edit"></i>Edit</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-ui-delete"></i>Delete</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-eye-alt"></i>View</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-tasks-alt"></i>Project</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-ui-note"></i>Notes</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-eye-alt"></i>Activity</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-badge"></i>Schedule</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection"
                                                    class="__cf_email__"
                                                    data-cfemail="dfbebdbceeedec9fb8b2beb6b3f1bcb0b2">[email&#160;protected]</a>
                                            </td>
                                            <td>9989988988</td>
                                            <td><i class="fa fa-star-o"
                                                    aria-hidden="true"></i>
                                            </td>
                                            <td class="dropdown">
                                                <button
                                                    type="button"
                                                    class="btn btn-primary dropdown-toggle"
                                                    data-toggle="dropdown"
                                                    aria-haspopup="true"
                                                    aria-expanded="false"><i
                                                        class="fa fa-cog"
                                                        aria-hidden="true"></i></button>
                                                <div
                                                    class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-edit"></i>Edit</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-ui-delete"></i>Delete</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-eye-alt"></i>View</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-tasks-alt"></i>Project</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-ui-note"></i>Notes</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-eye-alt"></i>Activity</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-badge"></i>Schedule</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection"
                                                    class="__cf_email__"
                                                    data-cfemail="f1909392c0c3c2b1969c90989ddf929e9c">[email&#160;protected]</a>
                                            </td>
                                            <td>9989988988</td>
                                            <td><i class="fa fa-star"
                                                    aria-hidden="true"></i>
                                            </td>
                                            <td class="dropdown">
                                                <button
                                                    type="button"
                                                    class="btn btn-primary dropdown-toggle"
                                                    data-toggle="dropdown"
                                                    aria-haspopup="true"
                                                    aria-expanded="false"><i
                                                        class="fa fa-cog"
                                                        aria-hidden="true"></i></button>
                                                <div
                                                    class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-edit"></i>Edit</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-ui-delete"></i>Delete</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-eye-alt"></i>View</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-tasks-alt"></i>Project</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-ui-note"></i>Notes</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-eye-alt"></i>Activity</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-badge"></i>Schedule</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection"
                                                    class="__cf_email__"
                                                    data-cfemail="c2a3a0a1f3f0f182a5afa3abaeeca1adaf">[email&#160;protected]</a>
                                            </td>
                                            <td>9989988988</td>
                                            <td><i class="fa fa-star"
                                                    aria-hidden="true"></i>
                                            </td>
                                            <td class="dropdown">
                                                <button
                                                    type="button"
                                                    class="btn btn-primary dropdown-toggle"
                                                    data-toggle="dropdown"
                                                    aria-haspopup="true"
                                                    aria-expanded="false"><i
                                                        class="fa fa-cog"
                                                        aria-hidden="true"></i></button>
                                                <div
                                                    class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-edit"></i>Edit</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-ui-delete"></i>Delete</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-eye-alt"></i>View</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-tasks-alt"></i>Project</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-ui-note"></i>Notes</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-eye-alt"></i>Activity</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-badge"></i>Schedule</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection"
                                                    class="__cf_email__"
                                                    data-cfemail="94f5f6f7a5a6a7d4f3f9f5fdf8baf7fbf9">[email&#160;protected]</a>
                                            </td>
                                            <td>9989988988</td>
                                            <td><i class="fa fa-star-o"
                                                    aria-hidden="true"></i>
                                            </td>
                                            <td class="dropdown">
                                                <button
                                                    type="button"
                                                    class="btn btn-primary dropdown-toggle"
                                                    data-toggle="dropdown"
                                                    aria-haspopup="true"
                                                    aria-expanded="false"><i
                                                        class="fa fa-cog"
                                                        aria-hidden="true"></i></button>
                                                <div
                                                    class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-edit"></i>Edit</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-ui-delete"></i>Delete</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-eye-alt"></i>View</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-tasks-alt"></i>Project</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-ui-note"></i>Notes</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-eye-alt"></i>Activity</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-badge"></i>Schedule</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection"
                                                    class="__cf_email__"
                                                    data-cfemail="fd9c9f9ecccfcebd9a909c9491d39e9290">[email&#160;protected]</a>
                                            </td>
                                            <td>9989988988</td>
                                            <td><i class="fa fa-star"
                                                    aria-hidden="true"></i>
                                            </td>
                                            <td class="dropdown">
                                                <button
                                                    type="button"
                                                    class="btn btn-primary dropdown-toggle"
                                                    data-toggle="dropdown"
                                                    aria-haspopup="true"
                                                    aria-expanded="false"><i
                                                        class="fa fa-cog"
                                                        aria-hidden="true"></i></button>
                                                <div
                                                    class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-edit"></i>Edit</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-ui-delete"></i>Delete</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-eye-alt"></i>View</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-tasks-alt"></i>Project</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-ui-note"></i>Notes</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-eye-alt"></i>Activity</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-badge"></i>Schedule</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection"
                                                    class="__cf_email__"
                                                    data-cfemail="6e0f0c0d5f5c5d2e09030f0702400d0103">[email&#160;protected]</a>
                                            </td>
                                            <td>9989988988</td>
                                            <td><i class="fa fa-star"
                                                    aria-hidden="true"></i>
                                            </td>
                                            <td class="dropdown">
                                                <button
                                                    type="button"
                                                    class="btn btn-primary dropdown-toggle"
                                                    data-toggle="dropdown"
                                                    aria-haspopup="true"
                                                    aria-expanded="false"><i
                                                        class="fa fa-cog"
                                                        aria-hidden="true"></i></button>
                                                <div
                                                    class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-edit"></i>Edit</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-ui-delete"></i>Delete</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-eye-alt"></i>View</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-tasks-alt"></i>Project</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-ui-note"></i>Notes</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-eye-alt"></i>Activity</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-badge"></i>Schedule</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection"
                                                    class="__cf_email__"
                                                    data-cfemail="7213101143404132151f131b1e5c111d1f">[email&#160;protected]</a>
                                            </td>
                                            <td>9989988988</td>
                                            <td><i class="fa fa-star"
                                                    aria-hidden="true"></i>
                                            </td>
                                            <td class="dropdown">
                                                <button
                                                    type="button"
                                                    class="btn btn-primary dropdown-toggle"
                                                    data-toggle="dropdown"
                                                    aria-haspopup="true"
                                                    aria-expanded="false"><i
                                                        class="fa fa-cog"
                                                        aria-hidden="true"></i></button>
                                                <div
                                                    class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-edit"></i>Edit</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-ui-delete"></i>Delete</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-eye-alt"></i>View</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-tasks-alt"></i>Project</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-ui-note"></i>Notes</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-eye-alt"></i>Activity</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-badge"></i>Schedule</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection"
                                                    class="__cf_email__"
                                                    data-cfemail="3f5e5d5c0e0d0c7f58525e5653115c5052">[email&#160;protected]</a>
                                            </td>
                                            <td>9989988988</td>
                                            <td><i class="fa fa-star"
                                                    aria-hidden="true"></i>
                                            </td>
                                            <td class="dropdown">
                                                <button
                                                    type="button"
                                                    class="btn btn-primary dropdown-toggle"
                                                    data-toggle="dropdown"
                                                    aria-haspopup="true"
                                                    aria-expanded="false"><i
                                                        class="fa fa-cog"
                                                        aria-hidden="true"></i></button>
                                                <div
                                                    class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-edit"></i>Edit</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-ui-delete"></i>Delete</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-eye-alt"></i>View</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-tasks-alt"></i>Project</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-ui-note"></i>Notes</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-eye-alt"></i>Activity</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-badge"></i>Schedule</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection"
                                                    class="__cf_email__"
                                                    data-cfemail="1677747527242556717b777f7a3875797b">[email&#160;protected]</a>
                                            </td>
                                            <td>9989988988</td>
                                            <td><i class="fa fa-star"
                                                    aria-hidden="true"></i>
                                            </td>
                                            <td class="dropdown">
                                                <button
                                                    type="button"
                                                    class="btn btn-primary dropdown-toggle"
                                                    data-toggle="dropdown"
                                                    aria-haspopup="true"
                                                    aria-expanded="false"><i
                                                        class="fa fa-cog"
                                                        aria-hidden="true"></i></button>
                                                <div
                                                    class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-edit"></i>Edit</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-ui-delete"></i>Delete</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-eye-alt"></i>View</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-tasks-alt"></i>Project</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-ui-note"></i>Notes</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-eye-alt"></i>Activity</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-badge"></i>Schedule</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection"
                                                    class="__cf_email__"
                                                    data-cfemail="5b3a39386a69681b3c363a323775383436">[email&#160;protected]</a>
                                            </td>
                                            <td>9989988988</td>
                                            <td><i class="fa fa-star"
                                                    aria-hidden="true"></i>
                                            </td>
                                            <td class="dropdown">
                                                <button
                                                    type="button"
                                                    class="btn btn-primary dropdown-toggle"
                                                    data-toggle="dropdown"
                                                    aria-haspopup="true"
                                                    aria-expanded="false"><i
                                                        class="fa fa-cog"
                                                        aria-hidden="true"></i></button>
                                                <div
                                                    class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-edit"></i>Edit</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-ui-delete"></i>Delete</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-eye-alt"></i>View</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-tasks-alt"></i>Project</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-ui-note"></i>Notes</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-eye-alt"></i>Activity</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-badge"></i>Schedule</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection"
                                                    class="__cf_email__"
                                                    data-cfemail="2f4e4d4c1e1d1c6f48424e4643014c4042">[email&#160;protected]</a>
                                            </td>
                                            <td>9989988988</td>
                                            <td><i class="fa fa-star"
                                                    aria-hidden="true"></i>
                                            </td>
                                            <td class="dropdown">
                                                <button
                                                    type="button"
                                                    class="btn btn-primary dropdown-toggle"
                                                    data-toggle="dropdown"
                                                    aria-haspopup="true"
                                                    aria-expanded="false"><i
                                                        class="fa fa-cog"
                                                        aria-hidden="true"></i></button>
                                                <div
                                                    class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-edit"></i>Edit</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-ui-delete"></i>Delete</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-eye-alt"></i>View</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-tasks-alt"></i>Project</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-ui-note"></i>Notes</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-eye-alt"></i>Activity</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-badge"></i>Schedule</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection"
                                                    class="__cf_email__"
                                                    data-cfemail="89e8ebeab8bbbac9eee4e8e0e5a7eae6e4">[email&#160;protected]</a>
                                            </td>
                                            <td>9989988988</td>
                                            <td><i class="fa fa-star"
                                                    aria-hidden="true"></i>
                                            </td>
                                            <td class="dropdown">
                                                <button
                                                    type="button"
                                                    class="btn btn-primary dropdown-toggle"
                                                    data-toggle="dropdown"
                                                    aria-haspopup="true"
                                                    aria-expanded="false"><i
                                                        class="fa fa-cog"
                                                        aria-hidden="true"></i></button>
                                                <div
                                                    class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-edit"></i>Edit</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-ui-delete"></i>Delete</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-eye-alt"></i>View</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-tasks-alt"></i>Project</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-ui-note"></i>Notes</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-eye-alt"></i>Activity</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-badge"></i>Schedule</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection"
                                                    class="__cf_email__"
                                                    data-cfemail="accdcecf9d9e9feccbc1cdc5c082cfc3c1">[email&#160;protected]</a>
                                            </td>
                                            <td>9989988988</td>
                                            <td><i class="fa fa-star"
                                                    aria-hidden="true"></i>
                                            </td>
                                            <td class="dropdown">
                                                <button
                                                    type="button"
                                                    class="btn btn-primary dropdown-toggle"
                                                    data-toggle="dropdown"
                                                    aria-haspopup="true"
                                                    aria-expanded="false"><i
                                                        class="fa fa-cog"
                                                        aria-hidden="true"></i></button>
                                                <div
                                                    class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-edit"></i>Edit</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-ui-delete"></i>Delete</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-eye-alt"></i>View</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-tasks-alt"></i>Project</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-ui-note"></i>Notes</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-eye-alt"></i>Activity</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-badge"></i>Schedule</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td>abc123<a
                                                    href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection"
                                                    class="__cf_email__"
                                                    data-cfemail="5d1d3a303c3431733e3230">[email&#160;protected]</a>
                                            </td>
                                            <td>9989988988</td>
                                            <td><i class="fa fa-star"
                                                    aria-hidden="true"></i>
                                            </td>
                                            <td class="dropdown">
                                                <button
                                                    type="button"
                                                    class="btn btn-primary dropdown-toggle"
                                                    data-toggle="dropdown"
                                                    aria-haspopup="true"
                                                    aria-expanded="false"><i
                                                        class="fa fa-cog"
                                                        aria-hidden="true"></i></button>
                                                <div
                                                    class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-edit"></i>Edit</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-ui-delete"></i>Delete</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-eye-alt"></i>View</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-tasks-alt"></i>Project</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-ui-note"></i>Notes</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-eye-alt"></i>Activity</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-badge"></i>Schedule</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection"
                                                    class="__cf_email__"
                                                    data-cfemail="9bfaf9f8aaa9a8dbfcf6faf2f7b5f8f4f6">[email&#160;protected]</a>
                                            </td>
                                            <td>9989988988</td>
                                            <td><i class="fa fa-star"
                                                    aria-hidden="true"></i>
                                            </td>
                                            <td class="dropdown">
                                                <button
                                                    type="button"
                                                    class="btn btn-primary dropdown-toggle"
                                                    data-toggle="dropdown"
                                                    aria-haspopup="true"
                                                    aria-expanded="false"><i
                                                        class="fa fa-cog"
                                                        aria-hidden="true"></i></button>
                                                <div
                                                    class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-edit"></i>Edit</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-ui-delete"></i>Delete</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-eye-alt"></i>View</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-tasks-alt"></i>Project</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-ui-note"></i>Notes</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-eye-alt"></i>Activity</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-badge"></i>Schedule</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection"
                                                    class="__cf_email__"
                                                    data-cfemail="bcdddedf8d8e8ffcdbd1ddd5d092dfd3d1">[email&#160;protected]</a>
                                            </td>
                                            <td>9989988988</td>
                                            <td><i class="fa fa-star"
                                                    aria-hidden="true"></i>
                                            </td>
                                            <td class="dropdown">
                                                <button
                                                    type="button"
                                                    class="btn btn-primary dropdown-toggle"
                                                    data-toggle="dropdown"
                                                    aria-haspopup="true"
                                                    aria-expanded="false"><i
                                                        class="fa fa-cog"
                                                        aria-hidden="true"></i></button>
                                                <div
                                                    class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-edit"></i>Edit</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-ui-delete"></i>Delete</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-eye-alt"></i>View</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-tasks-alt"></i>Project</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-ui-note"></i>Notes</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-eye-alt"></i>Activity</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-badge"></i>Schedule</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection"
                                                    class="__cf_email__"
                                                    data-cfemail="bddcdfde8c8f8efddad0dcd4d193ded2d0">[email&#160;protected]</a>
                                            </td>
                                            <td>9989988988</td>
                                            <td><i class="fa fa-star"
                                                    aria-hidden="true"></i>
                                            </td>
                                            <td class="dropdown">
                                                <button
                                                    type="button"
                                                    class="btn btn-primary dropdown-toggle"
                                                    data-toggle="dropdown"
                                                    aria-haspopup="true"
                                                    aria-expanded="false"><i
                                                        class="fa fa-cog"
                                                        aria-hidden="true"></i></button>
                                                <div
                                                    class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-edit"></i>Edit</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-ui-delete"></i>Delete</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-eye-alt"></i>View</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-tasks-alt"></i>Project</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-ui-note"></i>Notes</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-eye-alt"></i>Activity</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-badge"></i>Schedule</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection"
                                                    class="__cf_email__"
                                                    data-cfemail="7a1b18194b48493a1d171b131654191517">[email&#160;protected]</a>
                                            </td>
                                            <td>9989988988</td>
                                            <td><i class="fa fa-star"
                                                    aria-hidden="true"></i>
                                            </td>
                                            <td class="dropdown">
                                                <button
                                                    type="button"
                                                    class="btn btn-primary dropdown-toggle"
                                                    data-toggle="dropdown"
                                                    aria-haspopup="true"
                                                    aria-expanded="false"><i
                                                        class="fa fa-cog"
                                                        aria-hidden="true"></i></button>
                                                <div
                                                    class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-edit"></i>Edit</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-ui-delete"></i>Delete</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-eye-alt"></i>View</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-tasks-alt"></i>Project</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-ui-note"></i>Notes</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-eye-alt"></i>Activity</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-badge"></i>Schedule</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection"
                                                    class="__cf_email__"
                                                    data-cfemail="f0919293c1c2c3b0979d91999cde939f9d">[email&#160;protected]</a>
                                            </td>
                                            <td>9989988988</td>
                                            <td><i class="fa fa-star"
                                                    aria-hidden="true"></i>
                                            </td>
                                            <td class="dropdown">
                                                <button
                                                    type="button"
                                                    class="btn btn-primary dropdown-toggle"
                                                    data-toggle="dropdown"
                                                    aria-haspopup="true"
                                                    aria-expanded="false"><i
                                                        class="fa fa-cog"
                                                        aria-hidden="true"></i></button>
                                                <div
                                                    class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-edit"></i>Edit</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-ui-delete"></i>Delete</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-eye-alt"></i>View</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-tasks-alt"></i>Project</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-ui-note"></i>Notes</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-eye-alt"></i>Activity</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-badge"></i>Schedule</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection"
                                                    class="__cf_email__"
                                                    data-cfemail="2c4d4e4f1d1e1f6c4b414d4540024f4341">[email&#160;protected]</a>
                                            </td>
                                            <td>9989988988</td>
                                            <td><i class="fa fa-star"
                                                    aria-hidden="true"></i>
                                            </td>
                                            <td class="dropdown">
                                                <button
                                                    type="button"
                                                    class="btn btn-primary dropdown-toggle"
                                                    data-toggle="dropdown"
                                                    aria-haspopup="true"
                                                    aria-expanded="false"><i
                                                        class="fa fa-cog"
                                                        aria-hidden="true"></i></button>
                                                <div
                                                    class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-edit"></i>Edit</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-ui-delete"></i>Delete</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-eye-alt"></i>View</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-tasks-alt"></i>Project</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-ui-note"></i>Notes</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-eye-alt"></i>Activity</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-badge"></i>Schedule</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection"
                                                    class="__cf_email__"
                                                    data-cfemail="a2c3c0c1939091e2c5cfc3cbce8cc1cdcf">[email&#160;protected]</a>
                                            </td>
                                            <td>9989988988</td>
                                            <td><i class="fa fa-star"
                                                    aria-hidden="true"></i>
                                            </td>
                                            <td class="dropdown">
                                                <button
                                                    type="button"
                                                    class="btn btn-primary dropdown-toggle"
                                                    data-toggle="dropdown"
                                                    aria-haspopup="true"
                                                    aria-expanded="false"><i
                                                        class="fa fa-cog"
                                                        aria-hidden="true"></i></button>
                                                <div
                                                    class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-edit"></i>Edit</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-ui-delete"></i>Delete</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-eye-alt"></i>View</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-tasks-alt"></i>Project</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-ui-note"></i>Notes</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-eye-alt"></i>Activity</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-badge"></i>Schedule</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection"
                                                    class="__cf_email__"
                                                    data-cfemail="f9989b9ac8cbcab99e94989095d79a9694">[email&#160;protected]</a>
                                            </td>
                                            <td>9989988988</td>
                                            <td><i class="fa fa-star"
                                                    aria-hidden="true"></i>
                                            </td>
                                            <td class="dropdown">
                                                <button
                                                    type="button"
                                                    class="btn btn-primary dropdown-toggle"
                                                    data-toggle="dropdown"
                                                    aria-haspopup="true"
                                                    aria-expanded="false"><i
                                                        class="fa fa-cog"
                                                        aria-hidden="true"></i></button>
                                                <div
                                                    class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-edit"></i>Edit</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-ui-delete"></i>Delete</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-eye-alt"></i>View</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-tasks-alt"></i>Project</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-ui-note"></i>Notes</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-eye-alt"></i>Activity</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-badge"></i>Schedule</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection"
                                                    class="__cf_email__"
                                                    data-cfemail="3d5c5f5e0c0f0e7d5a505c5451135e5250">[email&#160;protected]</a>
                                            </td>
                                            <td>9989988988</td>
                                            <td><i class="fa fa-star"
                                                    aria-hidden="true"></i>
                                            </td>
                                            <td class="dropdown">
                                                <button
                                                    type="button"
                                                    class="btn btn-primary dropdown-toggle"
                                                    data-toggle="dropdown"
                                                    aria-haspopup="true"
                                                    aria-expanded="false"><i
                                                        class="fa fa-cog"
                                                        aria-hidden="true"></i></button>
                                                <div
                                                    class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-edit"></i>Edit</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-ui-delete"></i>Delete</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-eye-alt"></i>View</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-tasks-alt"></i>Project</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-ui-note"></i>Notes</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-eye-alt"></i>Activity</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-badge"></i>Schedule</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection"
                                                    class="__cf_email__"
                                                    data-cfemail="45242726747776052228242c296b262a28">[email&#160;protected]</a>
                                            </td>
                                            <td>9989988988</td>
                                            <td><i class="fa fa-star"
                                                    aria-hidden="true"></i>
                                            </td>
                                            <td class="dropdown">
                                                <button
                                                    type="button"
                                                    class="btn btn-primary dropdown-toggle"
                                                    data-toggle="dropdown"
                                                    aria-haspopup="true"
                                                    aria-expanded="false"><i
                                                        class="fa fa-cog"
                                                        aria-hidden="true"></i></button>
                                                <div
                                                    class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-edit"></i>Edit</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-ui-delete"></i>Delete</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-eye-alt"></i>View</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-tasks-alt"></i>Project</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-ui-note"></i>Notes</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-eye-alt"></i>Activity</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-badge"></i>Schedule</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection"
                                                    class="__cf_email__"
                                                    data-cfemail="a9c8cbca989b9ae9cec4c8c0c587cac6c4">[email&#160;protected]</a>
                                            </td>
                                            <td>9989988988</td>
                                            <td><i class="fa fa-star"
                                                    aria-hidden="true"></i>
                                            </td>
                                            <td class="dropdown">
                                                <button
                                                    type="button"
                                                    class="btn btn-primary dropdown-toggle"
                                                    data-toggle="dropdown"
                                                    aria-haspopup="true"
                                                    aria-expanded="false"><i
                                                        class="fa fa-cog"
                                                        aria-hidden="true"></i></button>
                                                <div
                                                    class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-edit"></i>Edit</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-ui-delete"></i>Delete</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-eye-alt"></i>View</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-tasks-alt"></i>Project</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-ui-note"></i>Notes</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-eye-alt"></i>Activity</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-badge"></i>Schedule</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection"
                                                    class="__cf_email__"
                                                    data-cfemail="9efffcfdafacaddef9f3fff7f2b0fdf1f3">[email&#160;protected]</a>
                                            </td>
                                            <td>9989988988</td>
                                            <td><i class="fa fa-star"
                                                    aria-hidden="true"></i>
                                            </td>
                                            <td class="dropdown">
                                                <button
                                                    type="button"
                                                    class="btn btn-primary dropdown-toggle"
                                                    data-toggle="dropdown"
                                                    aria-haspopup="true"
                                                    aria-expanded="false"><i
                                                        class="fa fa-cog"
                                                        aria-hidden="true"></i></button>
                                                <div
                                                    class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-edit"></i>Edit</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-ui-delete"></i>Delete</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-eye-alt"></i>View</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-tasks-alt"></i>Project</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-ui-note"></i>Notes</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-eye-alt"></i>Activity</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-badge"></i>Schedule</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection"
                                                    class="__cf_email__"
                                                    data-cfemail="2e4f4c4d1f1c1d6e49434f4742004d4143">[email&#160;protected]</a>
                                            </td>
                                            <td>9989988988</td>
                                            <td><i class="fa fa-star"
                                                    aria-hidden="true"></i>
                                            </td>
                                            <td class="dropdown">
                                                <button
                                                    type="button"
                                                    class="btn btn-primary dropdown-toggle"
                                                    data-toggle="dropdown"
                                                    aria-haspopup="true"
                                                    aria-expanded="false"><i
                                                        class="fa fa-cog"
                                                        aria-hidden="true"></i></button>
                                                <div
                                                    class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-edit"></i>Edit</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-ui-delete"></i>Delete</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-eye-alt"></i>View</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-tasks-alt"></i>Project</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-ui-note"></i>Notes</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-eye-alt"></i>Activity</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-badge"></i>Schedule</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection"
                                                    class="__cf_email__"
                                                    data-cfemail="e4858687d5d6d7a48389858d88ca878b89">[email&#160;protected]</a>
                                            </td>
                                            <td>9989988988</td>
                                            <td><i class="fa fa-star"
                                                    aria-hidden="true"></i>
                                            </td>
                                            <td class="dropdown">
                                                <button
                                                    type="button"
                                                    class="btn btn-primary dropdown-toggle"
                                                    data-toggle="dropdown"
                                                    aria-haspopup="true"
                                                    aria-expanded="false"><i
                                                        class="fa fa-cog"
                                                        aria-hidden="true"></i></button>
                                                <div
                                                    class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-edit"></i>Edit</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-ui-delete"></i>Delete</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-eye-alt"></i>View</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-tasks-alt"></i>Project</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-ui-note"></i>Notes</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-eye-alt"></i>Activity</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-badge"></i>Schedule</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection"
                                                    class="__cf_email__"
                                                    data-cfemail="1273707123202152757f737b7e3c717d7f">[email&#160;protected]</a>
                                            </td>
                                            <td>9989988988</td>
                                            <td><i class="fa fa-star"
                                                    aria-hidden="true"></i>
                                            </td>
                                            <td class="dropdown">
                                                <button
                                                    type="button"
                                                    class="btn btn-primary dropdown-toggle"
                                                    data-toggle="dropdown"
                                                    aria-haspopup="true"
                                                    aria-expanded="false"><i
                                                        class="fa fa-cog"
                                                        aria-hidden="true"></i></button>
                                                <div
                                                    class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-edit"></i>Edit</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-ui-delete"></i>Delete</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-eye-alt"></i>View</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-tasks-alt"></i>Project</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-ui-note"></i>Notes</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-eye-alt"></i>Activity</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-badge"></i>Schedule</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection"
                                                    class="__cf_email__"
                                                    data-cfemail="9bfaf9f8aaa9a8dbfcf6faf2f7b5f8f4f6">[email&#160;protected]</a>
                                            </td>
                                            <td>9989988988</td>
                                            <td><i class="fa fa-star"
                                                    aria-hidden="true"></i>
                                            </td>
                                            <td class="dropdown">
                                                <button
                                                    type="button"
                                                    class="btn btn-primary dropdown-toggle"
                                                    data-toggle="dropdown"
                                                    aria-haspopup="true"
                                                    aria-expanded="false"><i
                                                        class="fa fa-cog"
                                                        aria-hidden="true"></i></button>
                                                <div
                                                    class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-edit"></i>Edit</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-ui-delete"></i>Delete</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-eye-alt"></i>View</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-tasks-alt"></i>Project</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-ui-note"></i>Notes</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-eye-alt"></i>Activity</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-badge"></i>Schedule</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection"
                                                    class="__cf_email__"
                                                    data-cfemail="f1909392c0c3c2b1969c90989ddf929e9c">[email&#160;protected]</a>
                                            </td>
                                            <td>9989988988</td>
                                            <td><i class="fa fa-star"
                                                    aria-hidden="true"></i>
                                            </td>
                                            <td class="dropdown">
                                                <button
                                                    type="button"
                                                    class="btn btn-primary dropdown-toggle"
                                                    data-toggle="dropdown"
                                                    aria-haspopup="true"
                                                    aria-expanded="false"><i
                                                        class="fa fa-cog"
                                                        aria-hidden="true"></i></button>
                                                <div
                                                    class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-edit"></i>Edit</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-ui-delete"></i>Delete</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-eye-alt"></i>View</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-tasks-alt"></i>Project</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-ui-note"></i>Notes</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-eye-alt"></i>Activity</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-badge"></i>Schedule</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection"
                                                    class="__cf_email__"
                                                    data-cfemail="f2939091c3c0c1b2959f939b9edc919d9f">[email&#160;protected]</a>
                                            </td>
                                            <td>9989988988</td>
                                            <td><i class="fa fa-star"
                                                    aria-hidden="true"></i>
                                            </td>
                                            <td class="dropdown">
                                                <button
                                                    type="button"
                                                    class="btn btn-primary dropdown-toggle"
                                                    data-toggle="dropdown"
                                                    aria-haspopup="true"
                                                    aria-expanded="false"><i
                                                        class="fa fa-cog"
                                                        aria-hidden="true"></i></button>
                                                <div
                                                    class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-edit"></i>Edit</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-ui-delete"></i>Delete</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-eye-alt"></i>View</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-tasks-alt"></i>Project</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-ui-note"></i>Notes</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-eye"></i>Activity</a>
                                                    <a class="dropdown-item"
                                                        href="#!"><i
                                                            class="icofont icofont-badge"></i>Schedule</a>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Mobileno.</th>
                                            <th>Favourite</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="tab-pane" id="review" role="tabpanel">
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h5 class="card-header-text">Review</h5>
                                                            </div>
                                                            <div class="card-block">
                                                                <ul class="media-list">
                                                                    <li class="media">
                                                                        <div class="media-left">
                                                                            <a href="#">
                                                                                <img class="media-object img-radius comment-img"
                                                                                    src="<?= base_url() ?>/assets/user_assets/images/avatar-1.jpg"
                                                                                    alt="Generic placeholder image">
                                                                            </a>
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <h6 class="media-heading">Sortino media<span
                                                                                    class="f-12 text-muted m-l-5">Just
                                                                                    now</span></h6>
                                                                            <div class="stars-example-css review-star">
                                                                                <i class="icofont icofont-star"></i>
                                                                                <i class="icofont icofont-star"></i>
                                                                                <i class="icofont icofont-star"></i>
                                                                                <i class="icofont icofont-star"></i>
                                                                                <i class="icofont icofont-star"></i>
                                                                            </div>
                                                                            <p class="m-b-0">Cras sit amet nibh libero,
                                                                                in gravida nulla. Nulla vel metus
                                                                                scelerisque ante sollicitudin commodo.
                                                                                Cras purus odio, vestibulum in vulputate
                                                                                at, tempus viverra turpis.</p>
                                                                            <div class="m-b-25">
                                                                                <span><a href="#!"
                                                                                        class="m-r-10 f-12">Reply</a></span><span><a
                                                                                        href="#!" class="f-12">Edit</a>
                                                                                </span>
                                                                            </div>
                                                                            <hr>

                                                                            <div class="media mt-2">
                                                                                <a class="media-left" href="#">
                                                                                    <img class="media-object img-radius comment-img"
                                                                                        src="<?= base_url() ?>/assets/user_assets/images/avatar-2.jpg"
                                                                                        alt="Generic placeholder image">
                                                                                </a>
                                                                                <div class="media-body">
                                                                                    <h6 class="media-heading">Larry
                                                                                        heading <span
                                                                                            class="f-12 text-muted m-l-5">Just
                                                                                            now</span></h6>
                                                                                    <div
                                                                                        class="stars-example-css review-star">
                                                                                        <i
                                                                                            class="icofont icofont-star"></i>
                                                                                        <i
                                                                                            class="icofont icofont-star"></i>
                                                                                        <i
                                                                                            class="icofont icofont-star"></i>
                                                                                        <i
                                                                                            class="icofont icofont-star"></i>
                                                                                        <i
                                                                                            class="icofont icofont-star"></i>
                                                                                    </div>
                                                                                    <p class="m-b-0"> Cras sit amet nibh
                                                                                        libero, in gravida nulla. Nulla
                                                                                        vel metus scelerisque ante
                                                                                        sollicitudin commodo. Cras purus
                                                                                        odio, vestibulum in vulputate
                                                                                        at, tempus viverra turpis.</p>
                                                                                    <div class="m-b-25">
                                                                                        <span><a href="#!"
                                                                                                class="m-r-10 f-12">Reply</a></span><span><a
                                                                                                href="#!"
                                                                                                class="f-12">Edit</a>
                                                                                        </span>
                                                                                    </div>
                                                                                    <hr>

                                                                                    <div class="media mt-2">
                                                                                        <div class="media-left">
                                                                                            <a href="#">
                                                                                                <img class="media-object img-radius comment-img"
                                                                                                    src="<?= base_url() ?>/assets/user_assets/images/avatar-3.jpg"
                                                                                                    alt="Generic placeholder image">
                                                                                            </a>
                                                                                        </div>
                                                                                        <div class="media-body">
                                                                                            <h6 class="media-heading">
                                                                                                Colleen Hurst <span
                                                                                                    class="f-12 text-muted m-l-5">Just
                                                                                                    now</span></h6>
                                                                                            <div
                                                                                                class="stars-example-css review-star">
                                                                                                <i
                                                                                                    class="icofont icofont-star"></i>
                                                                                                <i
                                                                                                    class="icofont icofont-star"></i>
                                                                                                <i
                                                                                                    class="icofont icofont-star"></i>
                                                                                                <i
                                                                                                    class="icofont icofont-star"></i>
                                                                                                <i
                                                                                                    class="icofont icofont-star"></i>
                                                                                            </div>
                                                                                            <p class="m-b-0">Cras sit
                                                                                                amet nibh libero, in
                                                                                                gravida nulla. Nulla vel
                                                                                                metus scelerisque ante
                                                                                                sollicitudin commodo.
                                                                                                Cras purus odio,
                                                                                                vestibulum in vulputate
                                                                                                at, tempus viverra
                                                                                                turpis.</p>
                                                                                            <div class="m-b-25">
                                                                                                <span><a href="#!"
                                                                                                        class="m-r-10 f-12">Reply</a></span><span><a
                                                                                                        href="#!"
                                                                                                        class="f-12">Edit</a>
                                                                                                </span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <hr>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="media mt-2">
                                                                                <div class="media-left">
                                                                                    <a href="#">
                                                                                        <img class="media-object img-radius comment-img"
                                                                                            src="<?= base_url() ?>/assets/user_assets/images/avatar-1.jpg"
                                                                                            alt="Generic placeholder image">
                                                                                    </a>
                                                                                </div>
                                                                                <div class="media-body">
                                                                                    <h6 class="media-heading">Cedric
                                                                                        Kelly<span
                                                                                            class="f-12 text-muted m-l-5">Just
                                                                                            now</span></h6>
                                                                                    <div
                                                                                        class="stars-example-css review-star">
                                                                                        <i
                                                                                            class="icofont icofont-star"></i>
                                                                                        <i
                                                                                            class="icofont icofont-star"></i>
                                                                                        <i
                                                                                            class="icofont icofont-star"></i>
                                                                                        <i
                                                                                            class="icofont icofont-star"></i>
                                                                                        <i
                                                                                            class="icofont icofont-star"></i>
                                                                                    </div>
                                                                                    <p class="m-b-0">Cras sit amet nibh
                                                                                        libero, in gravida nulla. Nulla
                                                                                        vel metus scelerisque ante
                                                                                        sollicitudin commodo. Cras purus
                                                                                        odio, vestibulum in vulputate
                                                                                        at, tempus viverra turpis.</p>
                                                                                    <div class="m-b-25">
                                                                                        <span><a href="#!"
                                                                                                class="m-r-10 f-12">Reply</a></span><span><a
                                                                                                href="#!"
                                                                                                class="f-12">Edit</a>
                                                                                        </span>
                                                                                    </div>
                                                                                    <hr>
                                                                                </div>
                                                                            </div>
                                                                            <div class="media mt-2">
                                                                                <a class="media-left" href="#">
                                                                                    <img class="media-object img-radius comment-img"
                                                                                        src="<?= base_url() ?>/assets/user_assets/images/avatar-4.jpg"
                                                                                        alt="Generic placeholder image">
                                                                                </a>
                                                                                <div class="media-body">
                                                                                    <h6 class="media-heading">Larry
                                                                                        heading <span
                                                                                            class="f-12 text-muted m-l-5">Just
                                                                                            now</span></h6>
                                                                                    <div
                                                                                        class="stars-example-css review-star">
                                                                                        <i
                                                                                            class="icofont icofont-star"></i>
                                                                                        <i
                                                                                            class="icofont icofont-star"></i>
                                                                                        <i
                                                                                            class="icofont icofont-star"></i>
                                                                                        <i
                                                                                            class="icofont icofont-star"></i>
                                                                                        <i
                                                                                            class="icofont icofont-star"></i>
                                                                                    </div>
                                                                                    <p class="m-b-0"> Cras sit amet nibh
                                                                                        libero, in gravida nulla. Nulla
                                                                                        vel metus scelerisque ante
                                                                                        sollicitudin commodo. Cras purus
                                                                                        odio, vestibulum in vulputate
                                                                                        at, tempus viverra turpis.</p>
                                                                                    <div class="m-b-25">
                                                                                        <span><a href="#!"
                                                                                                class="m-r-10 f-12">Reply</a></span><span><a
                                                                                                href="#!"
                                                                                                class="f-12">Edit</a>
                                                                                        </span>
                                                                                    </div>
                                                                                    <hr>

                                                                                    <div class="media mt-2">
                                                                                        <div class="media-left">
                                                                                            <a href="#">
                                                                                                <img class="media-object img-radius comment-img"
                                                                                                    src="<?= base_url() ?>/assets/user_assets/images/avatar-3.jpg"
                                                                                                    alt="Generic placeholder image">
                                                                                            </a>
                                                                                        </div>
                                                                                        <div class="media-body">
                                                                                            <h6 class="media-heading">
                                                                                                Colleen Hurst <span
                                                                                                    class="f-12 text-muted m-l-5">Just
                                                                                                    now</span></h6>
                                                                                            <div
                                                                                                class="stars-example-css review-star">
                                                                                                <i
                                                                                                    class="icofont icofont-star"></i>
                                                                                                <i
                                                                                                    class="icofont icofont-star"></i>
                                                                                                <i
                                                                                                    class="icofont icofont-star"></i>
                                                                                                <i
                                                                                                    class="icofont icofont-star"></i>
                                                                                                <i
                                                                                                    class="icofont icofont-star"></i>
                                                                                            </div>
                                                                                            <p class="m-b-0">Cras sit
                                                                                                amet nibh libero, in
                                                                                                gravida nulla. Nulla vel
                                                                                                metus scelerisque ante
                                                                                                sollicitudin commodo.
                                                                                                Cras purus odio,
                                                                                                vestibulum in vulputate
                                                                                                at, tempus viverra
                                                                                                turpis.</p>
                                                                                            <div class="m-b-25">
                                                                                                <span><a href="#!"
                                                                                                        class="m-r-10 f-12">Reply</a></span><span><a
                                                                                                        href="#!"
                                                                                                        class="f-12">Edit</a>
                                                                                                </span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <hr>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="media mt-2">
                                                                                <div class="media-left">
                                                                                    <a href="#">
                                                                                        <img class="media-object img-radius comment-img"
                                                                                            src="<?= base_url() ?>/assets/user_assets/images/avatar-2.jpg"
                                                                                            alt="Generic placeholder image">
                                                                                    </a>
                                                                                </div>
                                                                                <div class="media-body">
                                                                                    <h6 class="media-heading">Mark
                                                                                        Doe<span
                                                                                            class="f-12 text-muted m-l-5">Just
                                                                                            now</span></h6>
                                                                                    <div
                                                                                        class="stars-example-css review-star">
                                                                                        <i
                                                                                            class="icofont icofont-star"></i>
                                                                                        <i
                                                                                            class="icofont icofont-star"></i>
                                                                                        <i
                                                                                            class="icofont icofont-star"></i>
                                                                                        <i
                                                                                            class="icofont icofont-star"></i>
                                                                                        <i
                                                                                            class="icofont icofont-star"></i>
                                                                                    </div>
                                                                                    <p class="m-b-0">Cras sit amet nibh
                                                                                        libero, in gravida nulla. Nulla
                                                                                        vel metus scelerisque ante
                                                                                        sollicitudin commodo. Cras purus
                                                                                        odio, vestibulum in vulputate
                                                                                        at, tempus viverra turpis.</p>
                                                                                    <div class="m-b-25">
                                                                                        <span><a href="#!"
                                                                                                class="m-r-10 f-12">Reply</a></span><span><a
                                                                                                href="#!"
                                                                                                class="f-12">Edit</a>
                                                                                        </span>
                                                                                    </div>
                                                                                    <hr>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control"
                                                                        placeholder="Right addon">
                                                                    <div class="input-group-append">
                                                                        <span class="input-group-text"><i
                                                                                class="icofont icofont-send-mail"></i></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div id="styleSelector">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





   <?php include_once('component/footer-js.php'); ?>
</body>

</html>