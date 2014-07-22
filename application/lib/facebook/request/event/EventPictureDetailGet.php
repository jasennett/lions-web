<?php
Yii::import('application.lib.facebook.request.RequestBase');

class EventPictureDetailGet extends RequestBase
{
    /** @var string */
    public $id;

    /** @var string */
    public $size = 'normal';

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
        return array_merge(
            parent::getQueryStringParams(),
            array('redirect' => 'false', 'type' => $this->size));
    }
}