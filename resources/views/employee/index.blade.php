@extends('home')

@section('content')
    <!--CONTENT CONTAINER-->
    <!--===================================================-->
    <div id="container" class="effect mainnav-full">
        <div class="boxed">
            <!--CONTENT CONTAINER-->
            <!--===================================================-->
            <div id="content-container">
                <div class="pageheader">
                    <h3><i class="fa fa-home"></i> Directory </h3>
                    <div class="breadcrumb-wrapper">
                        <span class="label">You are here:</span>
                        <ol class="breadcrumb">
                            <li> <a href="#"> Home </a> </li>
                            <li class="active"> Directory </li>
                        </ol>
                    </div>
                </div>
                <!--Page content-->
                <!--===================================================-->
                <div id="page-content">
                    <div class="well">
                        <div class="row">
                            <div class="col-sm-9">
                                <input placeholder="Who are you looking for?" class="form-control" type="text">
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group nm">
                                    <select class="form-control" id="source">
                                        <option value="Name">Full Name</option>
                                        <option value="position">Position</option>
                                        <option value="company">Company</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="panel panel-default">
                                <div class="panel-body np">
                                    <img src="https://media.npr.org/assets/img/2021/07/27/ap_21208518219388_wide-06f0255c1b5f661ebe5ba2fcf98e527b7e5c03a2-s800-c85.webp" alt="Cover" class="img-responsive">
                                    <div class="text-center pad-btm">
                                        <!-- panel body -->
                                        <h3>Semantha Armstrong</h3>
                                        <span>UX Designer</span>
                                        <!--/ panel body -->
                                    </div>
                                    <ul class="menu-items">
                                        <li>
                                            <a href="javascript:void(0)" class="clearfix">
                                                <i class="fa fa-bell-o fa-lg"></i> New notifications
                                                <span class="label label-danger label-circle pull-right">82</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="clearfix">
                                                <i class="fa fa-user fa-lg"></i> Edit profile
                                                <span class="label label-success label-circle pull-right">13</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="clearfix">
                                                <i class="fa fa-calendar fa-lg"></i> Calendar
                                                <span class="label label-warning label-circle pull-right">12</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="clearfix">
                                                <i class="fa fa-envelope fa-lg"></i> New message
                                                <span class="label label-primary label-circle pull-right">44</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="panel panel-default">
                                <div class="panel-body np">
                                    <img src="https://ps.w.org/metronet-profile-picture/assets/icon-128x128.png?rev=2464419" alt="Cover" class="img-responsive">
                                    <div class="text-center pad-btm">
                                        <!-- panel body -->
                                        <h3>Jonathan Smith</h3>
                                        <span>Web Designer</span>
                                        <!--/ panel body -->
                                    </div>
                                    <ul class="menu-items">
                                        <li>
                                            <a href="javascript:void(0)" class="clearfix">
                                                <i class="fa fa-bell-o fa-lg"></i> New notifications
                                                <span class="label label-danger label-circle pull-right">82</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="clearfix">
                                                <i class="fa fa-user fa-lg"></i> Edit profile
                                                <span class="label label-success label-circle pull-right">13</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="clearfix">
                                                <i class="fa fa-calendar fa-lg"></i> Calendar
                                                <span class="label label-warning label-circle pull-right">12</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="clearfix">
                                                <i class="fa fa-envelope fa-lg"></i> New message
                                                <span class="label label-primary label-circle pull-right">44</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="panel panel-default">
                                <div class="panel-body np">
                                    <img src="img/photos/big-user-image-3.jpg" alt="Cover" class="img-responsive">
                                    <div class="text-center pad-btm">
                                        <!-- panel body -->
                                        <h3>Jacob Armstrong</h3>
                                        <span>UI Designer</span>
                                        <!--/ panel body -->
                                    </div>
                                    <ul class="menu-items">
                                        <li>
                                            <a href="javascript:void(0)" class="clearfix">
                                                <i class="fa fa-bell-o fa-lg"></i> New notifications
                                                <span class="label label-danger label-circle pull-right">82</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="clearfix">
                                                <i class="fa fa-user fa-lg"></i> Edit profile
                                                <span class="label label-success label-circle pull-right">13</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="clearfix">
                                                <i class="fa fa-calendar fa-lg"></i> Calendar
                                                <span class="label label-warning label-circle pull-right">12</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="clearfix">
                                                <i class="fa fa-envelope fa-lg"></i> New message
                                                <span class="label label-primary label-circle pull-right">44</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="panel panel-default">
                                <div class="panel-body np">
                                    <img src="img/photos/big-user-image-4.jpg" alt="Cover" class="img-responsive">
                                    <div class="text-center pad-btm">
                                        <!-- panel body -->
                                        <h3>Ryan H. McJamer</h3>
                                        <span>Front end developer</span>
                                        <!--/ panel body -->
                                    </div>
                                    <ul class="menu-items">
                                        <li>
                                            <a href="javascript:void(0)" class="clearfix">
                                                <i class="fa fa-bell-o fa-lg"></i> New notifications
                                                <span class="label label-danger label-circle pull-right">82</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="clearfix">
                                                <i class="fa fa-user fa-lg"></i> Edit profile
                                                <span class="label label-success label-circle pull-right">13</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="clearfix">
                                                <i class="fa fa-calendar fa-lg"></i> Calendar
                                                <span class="label label-warning label-circle pull-right">12</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="clearfix">
                                                <i class="fa fa-envelope fa-lg"></i> New message
                                                <span class="label label-primary label-circle pull-right">44</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="panel panel-default">
                                <div class="panel-body np">
                                    <img src="img/photos/big-user-image-5.jpg" alt="Cover" class="img-responsive">
                                    <div class="text-center pad-btm">
                                        <!-- panel body -->
                                        <h3>Sandra Smith</h3>
                                        <span>Team Leader</span>
                                        <!--/ panel body -->
                                    </div>
                                    <ul class="menu-items">
                                        <li>
                                            <a href="javascript:void(0)" class="clearfix">
                                                <i class="fa fa-bell-o fa-lg"></i> New notifications
                                                <span class="label label-danger label-circle pull-right">82</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="clearfix">
                                                <i class="fa fa-user fa-lg"></i> Edit profile
                                                <span class="label label-success label-circle pull-right">13</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="clearfix">
                                                <i class="fa fa-calendar fa-lg"></i> Calendar
                                                <span class="label label-warning label-circle pull-right">12</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="clearfix">
                                                <i class="fa fa-envelope fa-lg"></i> New message
                                                <span class="label label-primary label-circle pull-right">44</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="panel panel-default">
                                <div class="panel-body np">
                                    <img src="img/photos/big-user-image-6.jpg" alt="Cover" class="img-responsive">
                                    <div class="text-center pad-btm">
                                        <!-- panel body -->
                                        <h3>Will DeBrandon</h3>
                                        <span>Back end developer</span>
                                        <!--/ panel body -->
                                    </div>
                                    <ul class="menu-items">
                                        <li>
                                            <a href="javascript:void(0)" class="clearfix">
                                                <i class="fa fa-bell-o fa-lg"></i> New notifications
                                                <span class="label label-danger label-circle pull-right">82</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="clearfix">
                                                <i class="fa fa-user fa-lg"></i> Edit profile
                                                <span class="label label-success label-circle pull-right">13</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="clearfix">
                                                <i class="fa fa-calendar fa-lg"></i> Calendar
                                                <span class="label label-warning label-circle pull-right">12</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="clearfix">
                                                <i class="fa fa-envelope fa-lg"></i> New message
                                                <span class="label label-primary label-circle pull-right">44</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="panel panel-default">
                                <div class="panel-body np">
                                    <img src="img/photos/big-user-image-7.jpg" alt="Cover" class="img-responsive">
                                    <div class="text-center pad-btm">
                                        <!-- panel body -->
                                        <h3>Alexander Flynn</h3>
                                        <span>Senior Manager</span>
                                        <!--/ panel body -->
                                    </div>
                                    <ul class="menu-items">
                                        <li>
                                            <a href="javascript:void(0)" class="clearfix">
                                                <i class="fa fa-bell-o fa-lg"></i> New notifications
                                                <span class="label label-danger label-circle pull-right">82</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="clearfix">
                                                <i class="fa fa-user fa-lg"></i> Edit profile
                                                <span class="label label-success label-circle pull-right">13</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="clearfix">
                                                <i class="fa fa-calendar fa-lg"></i> Calendar
                                                <span class="label label-warning label-circle pull-right">12</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="clearfix">
                                                <i class="fa fa-envelope fa-lg"></i> New message
                                                <span class="label label-primary label-circle pull-right">44</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="panel panel-default">
                                <div class="panel-body np">
                                    <img src="img/photos/big-user-image-8.jpg" alt="Cover" class="img-responsive">
                                    <div class="text-center pad-btm">
                                        <!-- panel body -->
                                        <h3>Angelina Smith</h3>
                                        <span>Team Leader</span>
                                        <!--/ panel body -->
                                    </div>
                                    <ul class="menu-items">
                                        <li>
                                            <a href="javascript:void(0)" class="clearfix">
                                                <i class="fa fa-bell-o fa-lg"></i> New notifications
                                                <span class="label label-danger label-circle pull-right">82</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="clearfix">
                                                <i class="fa fa-user fa-lg"></i> Edit profile
                                                <span class="label label-success label-circle pull-right">13</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="clearfix">
                                                <i class="fa fa-calendar fa-lg"></i> Calendar
                                                <span class="label label-warning label-circle pull-right">12</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="clearfix">
                                                <i class="fa fa-envelope fa-lg"></i> New message
                                                <span class="label label-primary label-circle pull-right">44</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="panel panel-default">
                                <div class="panel-body np">
                                    <img src="img/photos/big-user-image-9.jpg" alt="Cover" class="img-responsive">
                                    <div class="text-center pad-btm">
                                        <!-- panel body -->
                                        <h3>Stevan Flynn</h3>
                                        <span>Media Manager</span>
                                        <!--/ panel body -->
                                    </div>
                                    <ul class="menu-items">
                                        <li>
                                            <a href="javascript:void(0)" class="clearfix">
                                                <i class="fa fa-bell-o fa-lg"></i> New notifications
                                                <span class="label label-danger label-circle pull-right">82</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="clearfix">
                                                <i class="fa fa-user fa-lg"></i> Edit profile
                                                <span class="label label-success label-circle pull-right">13</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="clearfix">
                                                <i class="fa fa-calendar fa-lg"></i> Calendar
                                                <span class="label label-warning label-circle pull-right">12</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="clearfix">
                                                <i class="fa fa-envelope fa-lg"></i> New message
                                                <span class="label label-primary label-circle pull-right">44</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="panel panel-default">
                                <div class="panel-body np">
                                    <img src="img/photos/big-user-image-10.jpg" alt="Cover" class="img-responsive">
                                    <div class="text-center pad-btm">
                                        <!-- panel body -->
                                        <h3>Alena Decosta</h3>
                                        <span>Co-founder</span>
                                        <!--/ panel body -->
                                    </div>
                                    <ul class="menu-items">
                                        <li>
                                            <a href="javascript:void(0)" class="clearfix">
                                                <i class="fa fa-bell-o fa-lg"></i> New notifications
                                                <span class="label label-danger label-circle pull-right">82</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="clearfix">
                                                <i class="fa fa-user fa-lg"></i> Edit profile
                                                <span class="label label-success label-circle pull-right">13</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="clearfix">
                                                <i class="fa fa-calendar fa-lg"></i> Calendar
                                                <span class="label label-warning label-circle pull-right">12</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="clearfix">
                                                <i class="fa fa-envelope fa-lg"></i> New message
                                                <span class="label label-primary label-circle pull-right">44</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="panel panel-default">
                                <div class="panel-body np">
                                    <img src="img/photos/big-user-image-11.jpg" alt="Cover" class="img-responsive">
                                    <div class="text-center pad-btm">
                                        <!-- panel body -->
                                        <h3>Albert Decosta</h3>
                                        <span>Co-founder</span>
                                        <!--/ panel body -->
                                    </div>
                                    <ul class="menu-items">
                                        <li>
                                            <a href="javascript:void(0)" class="clearfix">
                                                <i class="fa fa-bell-o fa-lg"></i> New notifications
                                                <span class="label label-danger label-circle pull-right">82</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="clearfix">
                                                <i class="fa fa-user fa-lg"></i> Edit profile
                                                <span class="label label-success label-circle pull-right">13</span>
                                            </a>
                                        </li>
                                        <li>

                                            <a href="javascript:void(0)" class="clearfix">
                                                <i class="fa fa-calendar fa-lg"></i> Calendar
                                                <span class="label label-warning label-circle pull-right">12</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="clearfix">
                                                <i class="fa fa-envelope fa-lg"></i> New message
                                                <span class="label label-primary label-circle pull-right">44</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="panel panel-default">
                                <div class="panel-body np">
                                    <img src="img/photos/big-user-image-12.jpg" alt="Cover" class="img-responsive">
                                    <div class="text-center pad-btm">
                                        <!-- panel body -->
                                        <h3>Johnson</h3>
                                        <span>Sr.Developer</span>
                                        <!--/ panel body -->
                                    </div>
                                    <ul class="menu-items">
                                        <li>
                                            <a href="javascript:void(0)" class="clearfix">
                                                <i class="fa fa-bell-o fa-lg"></i> New notifications
                                                <span class="label label-danger label-circle pull-right">82</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="clearfix">
                                                <i class="fa fa-user fa-lg"></i> Edit profile
                                                <span class="label label-success label-circle pull-right">13</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="clearfix">
                                                <i class="fa fa-calendar fa-lg"></i> Calendar
                                                <span class="label label-warning label-circle pull-right">12</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="clearfix">
                                                <i class="fa fa-envelope fa-lg"></i> New message
                                                <span class="label label-primary label-circle pull-right">44</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--===================================================-->
                <!--End page content-->
            </div>
            <!--===================================================-->
            <!--END CONTENT CONTAINER-->
        </div>
        <!-- FOOTER -->
        <!--===================================================-->
        <footer id="footer">
            <!-- Visible when footer positions are fixed -->
            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            <div class="show-fixed pull-right">
                <ul class="footer-list list-inline">
                    <li>
                        <p class="text-sm">SEO Proggres</p>
                        <div class="progress progress-sm progress-light-base">
                            <div style="width: 80%" class="progress-bar progress-bar-danger"></div>
                        </div>
                    </li>
                    <li>
                        <p class="text-sm">Online Tutorial</p>
                        <div class="progress progress-sm progress-light-base">
                            <div style="width: 80%" class="progress-bar progress-bar-primary"></div>
                        </div>
                    </li>
                    <li>
                        <button class="btn btn-sm btn-dark btn-active-success">Checkout</button>
                    </li>
                </ul>
            </div>
            <!-- Visible when footer positions are static -->
            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            <div class="hide-fixed pull-right pad-rgt">Currently v2.2</div>
            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            <!-- Remove the class name "show-fixed" and "hide-fixed" to make the content always appears. -->
            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            <p class="pad-lft">&#0169; 2015 Your Company</p>
        </footer>
        <!--===================================================-->
        <!-- END FOOTER -->
        <!-- SCROLL TOP BUTTON -->
        <!--===================================================-->
        <button id="scroll-top" class="btn"><i class="fa fa-chevron-up"></i></button>
        <!--===================================================-->
    </div>
    <!--===================================================-->
    <!--END CONTENT CONTAINER-->


@endsection
