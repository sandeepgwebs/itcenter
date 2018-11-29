<div class="Categories">
    <h1>Categories</h1>
    <ul>
        <?php
        //only show three value display
        $i=1;
        foreach($model as $side){
            if($i === 8){
                break;
            }
            else {
                ?>
                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i><?= $side->name?></a></li>
                <?php
            }
            $i++;
        } ?>
    </ul>
</div>

