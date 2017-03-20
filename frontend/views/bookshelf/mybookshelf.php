<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Books */


?>
<div id="page-wrapper">
<div class="books-view">
<?php
   foreach($books as $book) {
            echo "Title = ". $book->title."</br>";
            echo "Author = ".$book->author."</br>";
            echo "Genre = ". $book->genre."</br>";
            echo "Description = ".$book->description."</br>";
             echo "</br>";
             
    }
          
   ?>


</div>
</div>

