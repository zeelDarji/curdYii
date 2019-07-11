<?php

use yii\helpers\Html;
use yii\widgets\LinkPager;
use app\models\Contact;


$this->title = 'Contact Form';
?>

<h1><?= Html::encode($this->title) ?></h1>

<div class="row">
    <div class="col-lg-5">
        <?= Html::a('<span class="btn-label">Add</span>', ['forms'], ['class' => 'btn btn-primary']) ?>
        <table class="table">
            <thead>
            <tr>
                <!--                <th scope="col">Id</th>-->
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Options</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($model as $mod): ?>
                <tr>
                    <!--                <td>--><?php //echo $mod['id'];?><!--</td>-->
                    <td><?php echo $mod['name']; ?></td>
                    <td><?php echo $mod['email']; ?></td>
                    <td><?= Html::a('<span class="btn-label">Edit</span>', ['edit', 'id' => $mod['id']], ['class' => 'btn btn-primary']) ?></td>
                    <td><?= Html::a('<span class="btn-label">Delete</span>', ['delete', 'id' => $mod['id']], ['class' => 'btn btn-primary']) ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        <?= LinkPager::widget(['pagination' => $pagination]) ?>
    </div>
</div>


