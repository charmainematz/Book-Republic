<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\bootstrap\Modal;
use yii\widgets\Breadcrumbs;
use frontend\assets\BookwormAsset;
use common\widgets\Alert;
use common\models\User;

BookwormAsset::register($this);

$user=User::findIdentity(Yii::$app->user->getId());

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Welcome</title>

    <!-- Bootstrap Core CSS -->
    <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

   

</head>
<body>
<?php $this->beginBody() ?>
    


    <div class="wrapper" >    



        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0; background-color: black" >
            <div class="navbar-header navbar-brand" >
                 
               <a href="<?= Url::toRoute(['bookshelf/index','id'=>$user->id])?>"><img src="../images/banner.png" class=" pull-left" /> </a>
          
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
              
            </div>
            <!-- /.navbar-header -->
            

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown" >
                    <a style="color:#9ca9b7;" class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i  class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
               
                <li class="dropdown">
                    <a style="color:#9ca9b7;" class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a style="color:#9ca9b7;" class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="<?= Url::toRoute(['account/index','id' => Yii::$app->user->getId()])?>"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="<?= Url::toRoute(['site/logout'])?>"><i class="fa fa-sign-out fa-fw"></i> Logout 
                                    <?php
                                    echo $user->username;
                                    
                                    ?></a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">

                
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <span> 

                            <a title="Update your profile picture" href="<?= Url::toRoute(['account/changeprofilepic','id' => Yii::$app->user->getId()])?>"><i class="glyphicon glyphicon-pencil pull-right"></i></a>    
                         
                        </span>
                        <div id="profile">
                         
                               
                              <figure class="profile-userpic text-center">
                                <img src="<?php echo $user->picture ?>" class="img-responsive" alt="Profile Picture">
                                
                              </figure>


                              <div class="text-center profile-usertitle">
                                <div class="profile-usertitle-name">
                                 <a href="<?= Url::toRoute(['account/index','id' => Yii::$app->user->getId()])?>">
                                    <?php
                                    echo $user->first_name." ".$user->last_name;
                                    
                                    ?>
                                </a>
                                </div>
                                <div class="profile-usertitle-title">
                                     <?php 
                                    echo $user->role;
                                    
                                    ?>

                                </div>
                              </div>   
                             
                        </div>
                     
                        <li>
                     
                            <a href="<?= Url::toRoute(['admin/index','id' => Yii::$app->user->getId()])?>"><i class="fa fa-shield fa-fw"></i> Admin Panel</a>

                      </li>
                        <li class="active">
                            <a href="<?= Url::toRoute(['bookshelf/index','id' => Yii::$app->user->getId()])?>"><i class="fa fa-book fa-fw active"></i> My Bookshelf</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-users fa-fw"></i> Friends<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                
                                <li>
                                   <a href="#""><i class="fa fa-caret-right fa-fw"></i> Browse Books</a>
                                </li>
                                <li>
                                   <a href="#""><i class="fa fa-caret-right fa-fw"></i> Manage Friends</a>
                                </li>

                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="tables.html"><i class="fa fa-envelope fa-fw"></i> Messages</a>
                        </li>
                        <li>
                            <a href="forms.html"><i class="fa fa-edit fa-fw"></i> Activity Log</a>
                        </li>
                        <li>
                            <a href="<?= Url::toRoute(['account/index','id' => Yii::$app->user->getId()])?>"><i class="fa fa-wrench fa-fw"></i> Account Settings<span class="fa arrow"></span></a>
                           
                            <!-- /.nav-second-level -->
                        </li>
                    
            
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->

        </nav>
        <?= Alert::widget() ?>
        <div class="sidebar-nav pull-right">
        <a class="twitter-timeline" data-width="280" data-height="650"  href="https://twitter.com/PriBethCharm/lists/book-republic">A Twitter List by Book Republic</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
         </div>

         <div class= "col-9">
        <?= $content ?>
        </div>
    </div>

   <!-- jQuery -->
    <script src="../../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>



<?php $this->endBody() ?>
</body>
<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; Book Republc <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>
</html>
<?php $this->endPage() ?>
