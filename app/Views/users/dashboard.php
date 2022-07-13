<?php 
$login_user = session()->get('user_data');
?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
      <title>User - Daashboard</title>
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
                              <div class="pcoded-content">
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

                                    <div class="pcoded-inner-content">
                                          <div class="main-body">
                                          	

                                                <div class="page-wrapper">
                                                      <div class="page-body">
                                                            <div class="row">

                        <div class="col-xl-3 col-md-6">
                              <div class="card">
                                    <div class="card-block">
                                          <div class="row align-items-center">
                                                <div class="col-8">
                                                      <h4
                                                            class="text-c-yellow f-w-600">
                                                            $30200</h4>
                                                      <h6
                                                            class="text-muted m-b-0">
                                                            All Earnings</h6>
                                                </div>
                                                <div class="col-4 text-right">
                                                      <i
                                                            class="feather icon-bar-chart f-28"></i>
                                                </div>
                                          </div>
                                    </div>
                                    <div class="card-footer bg-c-yellow">
                                          <div class="row align-items-center">
                                                <div class="col-9">
                                                      <p
                                                            class="text-white m-b-0">
                                                            % change</p>
                                                </div>
                                                <div class="col-3 text-right">
                                                      <i
                                                            class="feather icon-trending-up text-white f-16"></i>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                              <div class="card">
                                    <div class="card-block">
                                          <div class="row align-items-center">
                                                <div class="col-8">
                                                      <h4
                                                            class="text-c-green f-w-600">
                                                            290+</h4>
                                                      <h6
                                                            class="text-muted m-b-0">
                                                            Page Views</h6>
                                                </div>
                                                <div class="col-4 text-right">
                                                      <i
                                                            class="feather icon-file-text f-28"></i>
                                                </div>
                                          </div>
                                    </div>
                                    <div class="card-footer bg-c-green">
                                          <div class="row align-items-center">
                                                <div class="col-9">
                                                      <p
                                                            class="text-white m-b-0">
                                                            % change</p>
                                                </div>
                                                <div class="col-3 text-right">
                                                      <i
                                                            class="feather icon-trending-up text-white f-16"></i>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                              <div class="card">
                                    <div class="card-block">
                                          <div class="row align-items-center">
                                                <div class="col-8">
                                                      <h4
                                                            class="text-c-pink f-w-600">
                                                            145</h4>
                                                      <h6
                                                            class="text-muted m-b-0">
                                                            Task Completed
                                                      </h6>
                                                </div>
                                                <div class="col-4 text-right">
                                                      <i
                                                            class="feather icon-calendar f-28"></i>
                                                </div>
                                          </div>
                                    </div>
                                    <div class="card-footer bg-c-pink">
                                          <div class="row align-items-center">
                                                <div class="col-9">
                                                      <p
                                                            class="text-white m-b-0">
                                                            % change</p>
                                                </div>
                                                <div class="col-3 text-right">
                                                      <i
                                                            class="feather icon-trending-up text-white f-16"></i>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                              <div class="card">
                                    <div class="card-block">
                                          <div class="row align-items-center">
                                                <div class="col-8">
                                                      <h4
                                                            class="text-c-blue f-w-600">
                                                            500</h4>
                                                      <h6
                                                            class="text-muted m-b-0">
                                                            Downloads</h6>
                                                </div>
                                                <div class="col-4 text-right">
                                                      <i
                                                            class="feather icon-download f-28"></i>
                                                </div>
                                          </div>
                                    </div>
                                    <div class="card-footer bg-c-blue">
                                          <div class="row align-items-center">
                                                <div class="col-9">
                                                      <p
                                                            class="text-white m-b-0">
                                                            % change</p>
                                                </div>
                                                <div class="col-3 text-right">
                                                      <i
                                                            class="feather icon-trending-up text-white f-16"></i>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </div>


                        <div class="col-xl-8 col-md-12">
                              <div class="card">
                                    <div class="card-header">
                                          <h5>Visitors</h5>
                                          <span class="text-muted">For more
                                                details about usage, please
                                                refer <a
                                                      href="https://www.amcharts.com/online-store/"
                                                      target="_blank">amCharts</a>
                                                licences.</span>
                                          <div class="card-header-right">
                                                <ul
                                                      class="list-unstyled card-option">
                                                      <li><i class="feather icon-maximize full-card"></i>
                                                      </li>
                                                      <li><i class="feather icon-minus minimize-card"></i>
                                                      </li>
                                                      <li><i class="feather icon-trash-2 close-card"></i>
                                                      </li>
                                                </ul>
                                          </div>
                                    </div>
                                    <div class="card-block">
                                          <div id="visitor"
                                                style="height:300px"></div>
                                    </div>
                              </div>
                        </div>
                        <div class="col-xl-4 col-md-12">
                              <div class="card">
                                    <div class="card-block bg-c-green">
                                          <div id="proj-earning"
                                                style="height: 230px"></div>
                                    </div>
                                    <div class="card-footer">
                                          <h6
                                                class="text-muted m-b-30 m-t-15">
                                                Total completed project and
                                                earning</h6>
                                          <div class="row text-center">
                                                <div
                                                      class="col-6 b-r-default">
                                                      <h6
                                                            class="text-muted m-b-10">
                                                            Completed Projects
                                                      </h6>
                                                      <h4
                                                            class="m-b-0 f-w-600 ">
                                                            175</h4>
                                                </div>
                                                <div class="col-6">
                                                      <h6
                                                            class="text-muted m-b-10">
                                                            Total Earnings
                                                      </h6>
                                                      <h4
                                                            class="m-b-0 f-w-600 ">
                                                            76.6M</h4>
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
      </div>






      <script src="<?= base_url() ?>/assets/user_assets/widget/amchart/amcharts.js"></script>
      <script src="<?= base_url() ?>/assets/user_assets/widget/amchart/serial.js"></script>

      <script type="text/javascript" src="<?= base_url() ?>/assets/user_assets/bower_components/jquery-ui/jquery-ui.min.js"></script>
      <script type="text/javascript"
            src="<?= base_url() ?>/assets/user_assets/bower_components/popper.js/dist/umd/popper.min.js"></script>
      <script type="text/javascript"
            src="<?= base_url() ?>/assets/user_assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
      <script type="text/javascript"
            src="<?= base_url() ?>/assets/user_assets/bower_components/jquery-slimscroll/jquery.slimscroll.js"></script>
      <script type="text/javascript" src="<?= base_url() ?>/assets/user_assets/bower_components/modernizr/modernizr.js"></script>
      <script type="text/javascript"
            src="<?= base_url() ?>/assets/user_assets/bower_components/modernizr/feature-detects/css-scrollbars.js"></script>
      <script type="text/javascript" src="<?= base_url() ?>/assets/user_assets/bower_components/chart.js/dist/Chart.js"></script>

      <script src="<?= base_url() ?>/assets/user_assets/pages/widget/amchart/light.js"></script>
      <script type="text/javascript" src="<?= base_url() ?>/assets/user_assets/js/SmoothScroll.js"></script>
      <script src="<?= base_url() ?>/assets/user_assets/js/pcoded.min.js"></script>
      <script src="<?= base_url() ?>/assets/user_assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="<?= base_url() ?>/assets/user_assets/js/vartical-layout.min.js"></script>
      <script type="text/javascript" src="<?= base_url() ?>/assets/user_assets/pages/dashboard/analytic-dashboard.min.js"></script>
      <script type="text/javascript" src="<?= base_url() ?>/assets/user_assets/js/script.js"></script>
</body>

</html>
