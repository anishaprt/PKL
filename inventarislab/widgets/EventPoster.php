<?php

namespace app\widgets;

use Yii;

class EventPoster extends \yii\base\Widget
{
    public function init()
    {
        parent::init();        
    }

    public function run()
    {
        parent::run();
        return $this->render('eventposter');
    }
}
