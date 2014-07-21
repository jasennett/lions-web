<?php

class EventPictureDetailGet extends RequestBase
{
    /** @var string */
    public $id;

    /**
     * @return EventPictureDetail
     */
    public function get()
    {
        return parent::get();
    }

    public function getRoute()
    {
        return $this->id . '/picture';
    }

    public function getQueryStringParams()
    {
        return array('redirect' => 'false');
    }
}