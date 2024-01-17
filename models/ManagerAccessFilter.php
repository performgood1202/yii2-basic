<?php
namespace app\models;

use Yii;
use yii\base\ActionFilter;

class ManagerAccessFilter extends ActionFilter
{
    public function beforeAction($action)
    {
        if(isset(Yii::$app->user->identity->role) && (Yii::$app->user->identity->role == "manager")){

        }else{
           // Yii::$app->session->setFlash('error', 'You do not have permission to access this page.');
            die("You do not have permission to access this page.");
            return false;
        }

        return parent::beforeAction($action);
    }
}