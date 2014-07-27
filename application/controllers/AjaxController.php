<?php

class AjaxController extends Controller
{
    public $layout = 'json';

    public function actionAnnouncements()
    {
        $announcements = new AnnouncementsModel(5, new DateInterval('P3M'));
        $this->render('announcements', array('model' => $announcements));
    }

    public function actionEvents()
    {
        $events = new UpcomingEventsModel(3);
        $this->render('events', array('model' => $events));
    }
} 