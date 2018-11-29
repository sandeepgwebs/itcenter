<?php
use yii\widgets\ListView;
use yii\data\ActiveDataProvider;
use yii\helpers\Html;
?>


<div class="container">
    <?php

    $Newsresults = $Newsprovider;
   // echo "<pre>";print_r($Newsprovider);die;
    foreach ($Newsresults as $key) {?>

       <?=$key->name;?><br>
       <?=$key->description;?><br>
       <?=$key->teacher;?><br>

       <?=$key->image;?>

<?php }?>
</div>
