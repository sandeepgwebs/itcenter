<div class="events">
    <div class="row">
          <?php foreach($model as $events){?>
          <div class="col-sm-4">
              <div class="all-events">
                  <img src="<?=\yii\helpers\Url::base().'/uploads/eventsimg/'.$events->images?>">
                  <div class="month">
                      <ul>
                          <li><span><?=$events->date?></span></li>
                      </ul>
                  </div>
                  <div class="davet">
                      <a href="#"><?=$events->title?></a>
                      <ul>
                          <li><i class="fa fa-clock-o" aria-hidden="true"></i><?=$events->time?></li>
                          <li><i class="fa fa-map-marker" aria-hidden="true"></i>25 New York City</li>
                      </ul>
                      <p><?=$events->description?></p>
                  </div>
              </div>
          </div>
        <?php } ?>
    </div>
</div>