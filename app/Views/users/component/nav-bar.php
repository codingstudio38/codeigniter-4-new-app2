<?php 
$url = explode('/',current_url());
?>                        
                        <nav class="pcoded-navbar">
                                    <div class="pcoded-inner-navbar main-menu">
                                          <div class="pcoded-navigatio-lavel">Navigation</div>
                                          <ul class="pcoded-item pcoded-left-item">

                              <li class="<?php if(end($url)=='user_panel'){echo 'active';}?>">
                                    <a href="<?= base_url() ?>/user_panel/">
                                          <span class="pcoded-micon"><i class=" feather icon-home"></i></span>
                                          <span class="pcoded-mtext">Dashboard</span>
                                    </a>
                              </li>
                              <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)">
                                          <span class="pcoded-micon"><i
                                                      class="feather icon-menu"></i></span>
                                          <span class="pcoded-mtext">Pages</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                          <li class="">
                                                <a href="dashboard-analytics.html">
                                                      <span class="pcoded-mtext">Send Email</span>
                                                </a>
                                          </li>
                                    </ul>
                              </li>
                        </ul>
                        <div class="pcoded-navigatio-lavel">User Profile</div>
                        <ul class="pcoded-item  ">
                              <li class="pcoded-hasmenu <?php if(in_array('user_profile',$url)){echo 'active pcoded-trigger';}?>">
                                    <a href="javascript:void(0)">
                                          <span class="pcoded-micon"><i class="feather icon-user"></i></span>
                                          <span class="pcoded-mtext">Profile</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                          <li class="<?php if(in_array('user_profile',$url)){echo 'active';}?>">
                                                <a href="<?= base_url('user_panel/user_profile'); ?>">
                                                      <span class="pcoded-mtext">Settings</span>
                                                </a>
                                          </li>
                                           <li class=" ">
                                                <a href="<?= base_url('user_panel/user_logout'); ?>">
                                                      <span class="pcoded-mtext">Logout</span>
                                                </a>
                                          </li>
                                          
                                    </ul>
                              </li>
                            
                        </ul>
            </div>
      </nav>