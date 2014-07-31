<?php

class PersistentAnnouncementsModel
{
    /** @var PersistentAnnouncement[] */
    public $announcements;

    public function __construct()
    {
        $announcement = new PersistentAnnouncement();
        $announcement->title = 'Porter Cup';
        $announcement->message = 'The Porter Cup is coming up on MM/DD/YYYY.  You\'ll want to sign up at this link.';
        $this->announcements = array($announcement);
    }
} 