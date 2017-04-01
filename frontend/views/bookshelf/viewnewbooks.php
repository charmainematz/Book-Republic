<?php 

use yii\helpers\Url;
use common\models\Books;
?>


    
    <div class="row " >
        <h4 align="center">New on the Shelf</h4>  
        <hr>                          
        <?php
            $latest = Books::findLatestbook();
            foreach($latest as $item){?>
                <div  class="col-sm-3">                            
                    <a class="thumbnail" href="#">
                        <img title="<?php echo $item->title?>" height="100" width="100" src="<?php echo $item->cover_photo?>"   class="tradebook" value="<?= Url::to(['bookshelf/tradebook','id' => $item->book_number]) ?>">                                            
                    </a>
                </div>
        <?php }?> 
    </div>                                                       
      
 <!-- /#page-wrapper -->