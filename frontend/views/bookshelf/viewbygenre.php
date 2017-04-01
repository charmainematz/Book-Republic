<?php 

use yii\helpers\Url;
?>
    
    <div class="row " >

        <h4 align="center">Genre</h4>  
        <hr>                             
        <?php foreach($books as $book) {?>
        
           <div class="col-sm-3">
                 <a class="thumbnail" href="#">
                <img title="<?php echo $book->title?>" height="100" width="100" src="<?php echo $book->cover_photo?>"
                class="managebook" value="<?= Url::to(['bookshelf/managebook','id' => $book->book_number]) ?>">
                  
               
                </a>
             
            </div>                                     
        <?php } ?>
    </div>                                                       
      
 <!-- /#page-wrapper -->