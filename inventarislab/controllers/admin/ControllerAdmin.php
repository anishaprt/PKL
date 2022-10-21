<?php

namespace app\controllers\admin;

use yii\filters\AccessControl;


class ControllerAdmin extends \yii\web\Controller
{
    public function beforeAction($action)
    {
        $this->layout = 'admin2';
        // $this->enableCsrfValidation = false; 
        return parent::beforeAction($action);
    }
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,                
                'rules' => [
                    [
                        'allow' => true,                        
                        'roles' => ['@'],
                    ],                    
                ],
            ],
        ];
    }

}
