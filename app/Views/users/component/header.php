<?php 
$login_user = session()->get('user_data');
?>
 <nav class="navbar header-navbar pcoded-header">
                        <div class="navbar-wrapper">
                              <div class="navbar-logo">
                                    <a class="mobile-menu" id="mobile-collapse" href="#!">
                                          <i class="feather icon-menu"></i>
                                    </a>
                                    <a href="<?= base_url() ?>/user_panel/">
                                          <img class="img-fluid" src="<?= base_url() ?>/assets/user_assets/images/logo.png"
                                                alt="Theme-Logo" />
                                    </a>
                                    <a class="mobile-options">
                                          <i class="feather icon-more-horizontal"></i>
                                    </a>
                              </div>
                              <div class="navbar-container">
                                    <ul class="nav-left">
                                          <li class="header-search">
                                                <div class="main-search morphsearch-search">
                                                      <div class="input-group">
                                                            <span class="input-group-addon search-close"><i
                                                                        class="feather icon-x"></i></span>
                                                            <input type="text" class="form-control">
                                                            <span class="input-group-addon search-btn"><i
                                                                        class="feather icon-search"></i></span>
                                                      </div>
                                                </div>
                                          </li> 
                                          <li>
                                                <a href="#!" onclick="javascript:toggleFullScreen()">
                                                      <i class="feather icon-maximize full-screen"></i>
                                                </a>
                                          </li>
                                    </ul>
                                    <ul class="nav-right">
                                          <li class="user-profile header-notification">
                                                <div class="dropdown-primary dropdown">
                                                      <div class="dropdown-toggle" data-toggle="dropdown">
                                                            <img src="<?= base_url() ?>/assets/users/<?=$login_user['user']['picture']?>"
                                                                  class="img-radius" alt="User-Profile-Image">
                                                            <span><?=$login_user['user']['name']?></span>
                                                            <i class="feather icon-chevron-down"></i>
                                                      </div>
                                                      <ul class="show-notification profile-notification dropdown-menu"
                                                            data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                                            <li>
                                                                  <a href="<?= base_url('user_panel/user_profile'); ?>">
                                                                        <i class="feather icon-settings"></i> Settings
                                                                  </a>
                                                            </li>
                                                            <li>
                                                                  <a href="<?= base_url('user_panel/user_profile'); ?>">
                                                                        <i class="feather icon-user"></i> Profile
                                                                  </a>
                                                            </li>
                                                            <li>
                                                                  <a href="<?= base_url('user_panel/user_logout'); ?>">
                                                                        <i class="feather icon-log-out"></i> Logout
                                                                  </a>
                                                            </li>
                                                      </ul>
                                                </div>
                                          </li>
                                    </ul>
                              </div>
                        </div>
                  </nav>