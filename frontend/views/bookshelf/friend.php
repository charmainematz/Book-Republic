<?php
 use common\models\User;

 $user=User::findIdentity(Yii::$app->user->getId());?>

<div class="row">

    <div class="col-lg-6">
     
         <div class="media" style="margin: 10px; overflow: visible;">
            <a class="pull-left" href="#">
                <img class="media-object dp img-circle" src="<?php echo $user->picture?>" style="width: 75px;height:75px; margin:5px">
            </a>
            <div class="media-body>
                <h4 class="media-heading"> <?php echo $user->first_name." ".$user->last_name ?> <small> <?php echo $user->location ?></small></h4>
                <h5><?php echo $user->bio ?></h5>
                <hr style="margin:8px auto">

                <span class="label label-default">View Bookshelf</span>
                <span class="dropdown" >  
                <span class="label label-default">Manage
                                 
                        <a  href="#" class=" dropdown-toggle caret" type="button" data-toggle="dropdown"></a>
                        <ul class="dropdown-menu">
                            <li> <a href="#">Send Message</a></li>
                            <li> <a href="#">Unfriend</a></li>  
                        </ul>  
                         </span> 
                    </span>  
               
            </div>
        </div>


    </div>

    

</div>