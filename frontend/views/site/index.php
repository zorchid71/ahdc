//เขียน web link
<?php
/* @var $this yii\web\View */

$this->title = 'ระบบงานข้อมูล';
?>
<?php
$route1 = Yii::$app->urlManager->createUrl('test/test1')
?>
<a href="<?= $route1 ?>"> ไป test1 </a>
<br>
<hr>
<?php
$route2 = Yii::$app->urlManager->createUrl(['test/test2', 'name' => 'สมชาย', 'lname' => 'นวลบบ'])
?>
<a href="<?= $route2 ?>"> ไป test2 </a>
<br>

<?=
yii\helpers\Html::a('แบบที่ 3', ['test/test1']);
?>
<br>
<?php
//Yii::$app->db->open(); ทดสอบการติดต่อกับฐานข้อมูล
?>

