<?php
/* @var $image string */
/* @var $height int */
/* @var $width int */
/* @var $class string */
/* @var $mode string */
?>

<?= \Yii::$app->thumb->img($image,
    [
        'place' => [
            'height' => $height,
            'width' => $width,
            'mode' => $mode
        ]
    ],
    [
        'class' => 'img-responsive '.$class
    ]); ?>
