<?php

namespace app\controllers\admin;

class DashboardController extends ControllerAdmin
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
