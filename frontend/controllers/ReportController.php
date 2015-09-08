<?php

namespace frontend\controllers;

use yii;
use kartik\grid\GridView;

class ReportController extends \yii\web\Controller {

    public function actionIndex() {
        return $this->render('index');
    }

    public function actionReport1() {
        $sql = "SELECT HOSPCODE as 'หน่วยบริการ',DATE_SERV as 'วันที่บริการ',ANCPLACE as 'สถานที่คลอด' from anc
WHERE DATE_SERV >'2014-10-1' and ANCPLACE is not NULL  ";
        //$rawData = \yii::$app->db->createCommand($sql)->queryAll();
        //print_r($rawData);
        try {
            $rawData = \yii::$app->db->createCommand($sql)->queryAll();
        } catch (\yii\db\Exception $e) {
            throw new \yii\web\ConflictHttpException('sql error');
        }
        $dataProvider = new \yii\data\ArrayDataProvider([
            'allModels' => $rawData,
            'pagination'=>[
                'pagesize'=>25]
        ]);

        return $this->render('report1', [
                    'dataProvider' => $dataProvider
        ]);
    }

}
