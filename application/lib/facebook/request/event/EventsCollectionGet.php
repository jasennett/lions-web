<?php
Yii::import('application.lib.facebook.request.RequestBase');

class EventsCollectionGet extends RequestBase
{
    /**
     * @return EventsCollection
     */
    public function get()
    {
        return parent::get();
    }

    public function getRoute()
    {
        return FacebookSettings::$LIONS_FAN_PAGE_ID . '/events';
    }

    public function getQueryStringParams()
    {
        return null;
    }
}