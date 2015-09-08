<?php

namespace frontend\controllers;

class TestController extends \yii\web\Controller {

    public function actionIndex() {
        return $this->render('index');
    }

    public function actionTest1() {
        $a = 3;
        $b = 5;
        $sum = $a + $b;

        return $this->render('test1', ['sum' => $sum]);
    }

    public function actionTest2($name = NULL, $lname = NULL) {
        $info = "YOUR IS $name $lname";
        return $this->render('test2', ['info' => $info]);
    }

}
