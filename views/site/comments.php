<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'Comment';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-comments">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>comments that include the N word</p>

    <pre><?php print_r($comments) ?></pre>

    <p>user id=3 comments</p>

    <pre><?php print_r($userComments) ?></pre>

    <p>Slava Ukraine comment author penis size</p>

    <pre><?php echo $penisSize ?></pre>

</div>
