<?php
/** @var $this AjaxController */
/** @var $model AnnouncementsModel */

$events = $this->renderPartial('/partial/announcements', array('model'=>$model), true);
$response = new stdClass();
$response->content = $events;
echo json_encode($response);