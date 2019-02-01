<?php

namespace fenix957\MenuManage;


use yii\base\Behavior;
use yii\filters\AccessControl;


class GlobalBehaviors extends Behavior
{


    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),

                'rules' => [
                    [
                        'allow' => false,

                    ]
                ],
            ]
        ];
    }


    public function run()
    {
        return "Hello!";
    }
}
