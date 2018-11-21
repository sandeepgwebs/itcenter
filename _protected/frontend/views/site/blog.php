<?php
use common\components\blogpage;
?>
<div class="pagers">
    <div class="container">
        <ul>
            <li><a href="#">home</a></li>
            <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
            <li>blog</li>
        </ul>
    </div>
</div>

<?= blogpage::widget()?>