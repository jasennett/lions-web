<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" class="no-skrollr">
<head>
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    <?php
    if (!empty($this->seo))
    {
        $this->renderPartial($this->seo);
    }
    ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="language" content="en" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <!-- blueprint CSS framework -->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/content/css/screen.css" media="screen, projection" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/content/css/print.css" media="print" />
    <!--[if lt IE 8]>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
    <![endif]-->

    <link href='http://fonts.googleapis.com/css?family=Dosis:300,400|Lato:300,400|Open+Sans+Condensed:300|Open+Sans:400,300,700|Titillium+Web:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/content/css/grid.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/content/css/clearfix.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/content/css/lions-icons.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/content/css/main.css" />
</head>

<body<?=$this->solidHeader ? ' class="solid-header"' : ''?>>
<?php $this->renderPartial('/partial/analyticsTag'); ?>
<header>
    <div class="header-padding"></div>
    <div class="header-bounds">
        <h1><?=CHtml::link('Richmond Lions', $this->createUrl('site/index'))?></h1>

        <div class="right">
            <nav>
                <ul class="links">
                    <li><?=CHtml::link('Calendar', '//facebook.com/RichmondLions/events')?></li>
                    <li><?=CHtml::link('Sponsors', $this->createUrl('site/sponsors'))?></li>
                    <li><?=CHtml::link('Join', $this->createUrl('site/join'))?></li>
                    <li><?=CHtml::link('About', $this->createUrl('site/about'))?></li>
                    <li><?=CHtml::link('Store', 'https://mkt.com/richmond-lions-rugby-fc')?></li>
                </ul>

                <ul class="social">
                    <li>
                        <a href="//facebook.com/RichmondLions">
                            <div class="icon">
                                <span class="filler"></span>
                                <span class="logo icon-facebook-circled"></span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="//twitter.com/RichmondRugby">
                            <div class="icon">
                                <span class="filler"></span>
                                <span class="logo icon-twitter-circled"></span>
                            </div>
                        </a>
                    </li>
                </ul>

                <button type="button" class="menu">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </nav>
        </div>
        <div class="clear"></div>
    </div>
    <div class="header-padding"></div>

    <nav class="mobile-nav hidden">
        <ul class="mobile-links">
            <li><?=CHtml::link('Calendar', '//facebook.com/RichmondLions/events')?></li>
            <li><?=CHtml::link('Sponsors', $this->createUrl('site/sponsors'))?></li>
            <li><?=CHtml::link('Join', $this->createUrl('site/join'))?></li>
            <li><?=CHtml::link('About', $this->createUrl('site/about'))?></li>
            <li><?=CHtml::link('Store', 'https://mkt.com/richmond-lions-rugby-fc')?></li>
        </ul>
    </nav>

</header>
<div id="skrollr-body">
    <main>
        <?php echo $content; ?>
    </main>

    <footer>
        <div>
            <strong>Richmond Lions Rugby Football Club</strong>
            <br />
            <span class="address">PO Box 11571</span><span class="city-state">Richmond, VA 23230</span>
            <br />
            email: <a href="mailto:info@richmondlions.com">info@richmondlions.com</a>
        </div>
    </footer>
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</body>
</html>