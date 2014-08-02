<?php
/** @var $this AjaxController */
/** @var $model AnnouncementsModel */

$messages = $this->renderPartial('/partial/announcements', array('model'=>$model), true);
$response = new stdClass();
$response->messages = $messages;
if (!empty($model->announcements))
{
    $response->more = $this->renderPartial('/partial/moreAnnouncementsButton', null, true);
}

echo json_encode($response);