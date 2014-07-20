<?php
Yii::import('application.lib.facebook.request.RequestBase');

class PostsCollectionGet extends RequestBase
{
    /**
     * @return PostsCollection
     */
    public function get()
    {
        return parent::get();
    }

    public function getRoute()
    {
        return FacebookSettings::$LIONS_FAN_PAGE_ID . '/posts';
    }

    public function getQueryStringParams()
    {
        return null;
    }
}