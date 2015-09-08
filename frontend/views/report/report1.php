  
<?php

use kartik\grid\GridView;
//การทำเมนู breadcrumbs
$this->params['breadcrumbs'][]=['label'=>'รายงาน','url'=>['report/index']];
$this->params['breadcrumbs'][]='รายงานการฝากครรภ์';

echo GridView::widget([
    'dataProvider' => $dataProvider,
 
    'panel' => [
        'before' => 'รายงาน xxx',
        'after' => 'ประมวลผล ณ' .date('Y-m-d H:i:s')
    ]
])
?>
