<?php

class PersistentAnnouncementsModel
{
    /** @var PersistentAnnouncement[] */
    public $announcements;

    public function __construct()
    {
        $announcement = new PersistentAnnouncement();
        $announcement->title = 'Porter Cup';
        $announcement->message = 'The 2014 Porter Cup, Richmond\'s XV\'s tournament since 1964, will be held on August 23rd.  ' .
            'Be sure to register your team <a href="https://squareup.com/market/richmond-lions-rugby-fc/registration">here</a>.';
        $this->announcements = array($announcement);
    }
} 