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
                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAALQAAAC0CAMAAAAKE/YAAAAAMFBMVEX6+vrR2eH///+vvczw8vTX3uXN1d60wc/n6+/19vfDzdjr7vHc4ui+ydW5xdLh5uuLqaxwAAAE2klEQVR4nO2c6ZqrIAyGcQARcbn/uz0J4NKpQltodM6T70ddgdcQAgozQvw9/VwN8IkYmkoMTSWGphJDU4mhqcTQVGJoKjE0lRiaSgxNJYamEkNTiaGpxNBUYmgqMTSVGHqVnXWD0rP9RvbfgHYROWC7+gVUh7Zqbh41q9rmrgxtfxNH7rrYNaFtNxwio4auInc1aKsSyAG7mpvUglZp4sit6hRWBfqp7Z1rrsFdDm3doPOwq/Tgir2kFNp27xBH7tJGWQbt3ieO3EVdTgH0J0auY+4S6BJmoL4EWrgi6AIHKfLpXH9yLuhpCsotjR5vhOhNpcG6QufyUme4M3J591IArXW0mN0PoNOC4XVof2rW+groUNE2cr+CrSNxHHNfBQ0gS23bLoO8BmYVH/A66GZrVzAKOSVeRxy7lnspNGBvSEduorfH2gebi6F3XrJWfv7S5dDoAdHa8A6zextf31fsk+/cAXqLZ2tXuXZ8h1HxFtBIub4H2q5bw4U97n/uAt0cfC44+axwK2h4odoNlW13/jJ2J+hmNyJKjqduBg3dn78l3UneDrpBW6v0LfeDRlNnRiMMzdAMzdAMzdAMzdAMzdAMzdAM/d9Apz+j56EvmQlIf0XPQl8z+YnfGc+tnYbWl07JnWKnoHVXVmiFpRPHaOfQ5QuDaixSOZy4PYEum6qNqrQc6NlLDqFL/SKq3sKrIQs93G3hFVA/zsj9hh6crbbIrepiwv2ylUfo4hVAD6q9bHP1kj10Nb+Iqr/WNJp7hQYj33ytqRfOs/gZT6V11eWai760flqFaKyqL+j14pXqVGJoKjE0lRiaSgxNJYamEkNTiaGpxNBUYmgqMTSVGJpKDE0lhqYSQwdJWenPw0+VhJZSh81bWaahe1k+w5WB9uXXgG7G+KXayOGt3I6Ugx5FHej1pK3w/z4y0AYdBKFta6RporWkgaMJrrSyNZMQroenm+FCN0rZI59n9D96wmtSxlqDJNonk2bWkMkcUk9+imaSpscCQ2EfQ+tAgK6IoP1yXva99KXDnnDGH87CAV8rH6AxXTsqONu2doOWYx8zUWKOW0jdj74Z9XJsJnlOnYEWIzgIbGZprFAyNiKfs5YTlA6noYw2HPqdeQ/dSaNikugeARq8bkQTTOjhPoshpJ7g8oyXXcIpc9DOWxsrVGDWeiOw8Nt6cxjp/KH1O2IP3fh0z9Ba7H6G3qAZfOpYEZs7fQINFjQeuokF/oLW+8Ml2GzQ7VLJCegGPGiErb8lXO416nRmLAsN1QibAWsMLLm4x4xuYOJTjN5ccIh1i3WjBN6Jz4BOk4OWYGHcelfBvHxhKeWhHUIDbz+MS2YQVbQ2S+noxY0/hFppMFpg+5v8DqQbB92iC7X6BBouNdKzGt3iji9saM/jeR5aoE8LN2FrX0Ieugx6a/QXjR6Ie1C4nAxAK7jdTBgSMJ20QBQb1jM0xkODbtTKGGNDog+jR9ftNm5bEwMmDEcqnrPLH0yqzsGN/vZ1p/N/D7rcilu/v/9xdsluRM/DRKnp6Y8GTN8ZEqmxGUIMzelG0A59bnqll/8IuquzFOlJ4Ekv3ccvAVRiaCoxNJUYmkoMTSWGphJDU4mhqcTQVGJoKjE0lRiaSgxNJYamEkNTiaGpxNBU+hE/f1D/AB15LBIOLRuUAAAAAElFTkSuQmCC" alt="Cover" class="img-responsive">
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
