<?php
/* @var $this SiteController */
/* @var $model NewPlayerForm */

$this->pageTitle='Join Richmond Lions Rugby Club'
?>

<section class="first cover dark how-to-join fixed" data-top="background-position: 50% -35px" data-top-bottom="background-position: 50% 165px">
    <div class="shade">
        <div class="content">
            <div class="gutter">
                <h2 data-anchor-target=".fade-anchor" data-80-top-top="color: rgba(255,255,255,1)" data-0-top-bottom="color: rgba(255,255,255,0)">
                    How to Join
                </h2>
                <div class="pad-text" data-anchor-target=".fade-anchor" data-80-top-top="color: rgba(255,255,255,1)" data-0-top-bottom="color: rgba(255,255,255,0)">
                    <p>
                        The <strong>Richmond Lions Rugby Football Club</strong> welcomes all players regardless of your sporting background, experience, age, or size. Our Club has a wide range of talent and experience; you will find your level. Be prepared to compete and have fun playing the best field sport in the world!
                    </p>
                    <p class="fade-anchor">
                        The best way to get started is to simply show up to a <a href="//facebook.com/RichmondLions/events">practice</a>. You will be welcomed. You can also fill out our new player registration form below to tell us a little bit about yourself and we'll get in touch with you.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="light light-grey new-player">
    <div class="shade">
        <div class="content">
            <div class="anchor-wrapper"><a id="form"></a></div>
            <div class="gutter">
                <h2>New Player Info</h2>
                <div class="pad-text">
                    <p>
                        We are always looking for athletes who are in interested in playing the best and most challenging field sport in the world. No experience is needed.
                    </p>
                    <p>
                        We would also like to hear from coaches, referees, retired players, and anyone else is interested in supporting rugby in the Richmond area.
                    </p>
                </div>
                <div class="form">
                    <div class="form">

                        <?php
                        /** @var NewPlayerForm $form */
                        $form=$this->beginWidget('CActiveForm', array(
                            'action'=>$this->createUrl('/site/join', array('#'=>'form')),
                            'id'=>'new-player-form',
                            'enableClientValidation'=>true,
                            'clientOptions'=>array(
                                'validateOnSubmit'=>true
                            )));
                        ?>

                        <?php if ($model->hasErrors()): ?>
                            <div class="error-summary">
                                There were some errors with your submission.
                            </div>
                        <?php endif; ?>

                        <div class="row inline">
                            <?php echo $form->label($model,'name'); ?>
                            <?php echo $form->textField($model,'name'); ?>
                            <?php echo $form->error($model,'name'); ?>
                        </div>

                        <div class="row inline">
                            <?php echo $form->label($model,'email'); ?>
                            <?php echo $form->textField($model,'email'); ?>
                            <?php echo $form->error($model,'email'); ?>
                        </div>

                        <div class="row">
                            <?php
                            $attribute = 'expectations';
                            $inputName=CHtml::resolveName($model,$attribute);
                            $htmlOptions = array();
                            $label = $model->getAttributeLabel($attribute);
                            $sublabel = '<div class="sublabel">Which best describes your expectation as a member of he Richmond Lions Rugby Club?</div>';
                            if($model->hasErrors($attribute))
                            {
                                Html::addErrorCss($htmlOptions);
                            }

                            echo CHtml::label($label . $sublabel, CHtml::getIdByName($inputName), $htmlOptions);
                            ?>
                            <div class="answers">
                                <?php echo $form->radioButtonList(
                                    $model,
                                    'expectations',
                                    NewPlayerForm::$expectationsValues,
                                    array(
                                        'template'=>'{beginLabel} {input} {labelTitle} {endLabel} <span class="clear"></span>',
                                        'separator'=>''
                                    )); ?>
                            </div>
                            <?php echo $form->error($model,'expectations'); ?>
                        </div>

                        <div class="row">
                            <?php echo $form->label($model,'experience', array('class'=>'textarea-label')); ?>
                            <?php echo $form->textArea($model,'experience',array('rows'=>6, 'cols'=>50)); ?>
                            <?php echo $form->error($model,'experience'); ?>
                        </div>

                        <div class="row">
                            <?php echo $form->label($model,'comments', array('class'=>'textarea-label')); ?>
                            <?php echo $form->textArea($model,'comments',array('rows'=>6, 'cols'=>50)); ?>
                            <?php echo $form->error($model,'comments'); ?>
                        </div>

                        <div class="row buttons">
                            <?php echo CHtml::submitButton('Submit'); ?>
                        </div>

                        <?php $this->endWidget(); ?>

                    </div>
            </div>
        </div>
    </div>
</section>