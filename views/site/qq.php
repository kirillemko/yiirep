<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;

$a = 10;

$str = function()  {
    return $a + 1;
}?>

<pre>

<? print_r($str())?>
