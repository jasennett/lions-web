<?php
/** @var $this AjaxController */
/** @var $model UpcomingEventsModel */

$events = $this->renderPartial('/partial/upcomingEvents', array('model'=>$model), true);
$response = new stdClass();
$response->content = $events;
echo json_encode($response);