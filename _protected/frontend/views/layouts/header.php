<?php
    use yii\helpers\Html;
?>
<div class="sidebar-collapse">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <ul>
                    <li><a href="#">Have any questions?</a></li>
                    <li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i>001-1234-88888</a></li>
                    <li><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i>info.deercreative@gmail.com</a></li>
                </ul>
            </div>
            <div class="col-sm-6">
                <div class="register">
                    <a href="#">Login or Register</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="header">
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <h1><a class="navbar-brand" href="#">unic<span>at</span></a></h1>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><?= Html::a('home', ['site/index'], []) ?></li>
                <li><?= Html::a('about', ['site/about'], []) ?></li>
                <li><?= Html::a('courses', ['site/courses'], []) ?></li>
                <li><?= Html::a('blog', ['site/blog'], []) ?></li>
                <li><?= Html::a('page', ['site/page'], []) ?></li>
                <li><?= Html::a('contect', ['site/contect'], []) ?></li>
                <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </nav>
</div>