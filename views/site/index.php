<?php

use yii\bootstrap\Html;

$this->title = 'Mini-CRM';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Mini-CRM</h1>

        <p class="lead">The goal of the project is to create a mini CRM which can help an admin to manage companies and their employees.</p>

    </div>

    <div class="body-content">

        <div class="row">
            </div>
            <div class="col-lg-7">
                <h2>Companies</h2>

                <p>This page will show every <b>companies</b> stored in the database. </br></p>

                <?= Html::a('Companies', ['/companies'], ['class'=>'btn btn-primary']) ?>

            </div>
            <div class="col-lg-7">
                <h2>Employees</h2>

                <p>This page will show every <b>employees</b> stored in the database. </br></p>

                <?= Html::a('Employees', ['/employees'], ['class'=>'btn btn-primary']) ?>
            </div>
        </div>

    </div>
</div>
