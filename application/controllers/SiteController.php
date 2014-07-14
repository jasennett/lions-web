<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
        $this->layout = 'main';
        Yii::app()->clientScript->registerCSSFile('/css/index.css');
        Yii::app()->clientScript->registerScriptFile('/js/skrollr.min.js', CClientScript::POS_END);
        Yii::app()->clientScript->registerScriptFile('/js/main.js', CClientScript::POS_END);
        Yii::app()->clientScript->registerScriptFile('/js/index.js', CClientScript::POS_END);
		$this->render('index');
	}

    public function actionSponsors()
    {
        $this->layout = 'main';
        Yii::app()->clientScript->registerCSSFile('/css/sponsors.css');
        Yii::app()->clientScript->registerScriptFile('/js/main.js', CClientScript::POS_END);
        $this->render('sponsors');
    }

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}
}