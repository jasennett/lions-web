<?php
Yii::import('application.lib.facebook.request.IRequest');
Yii::import('application.lib.facebook.RequestSender');

abstract class RequestBase implements IRequest
{
    public function get()
    {
        $sender = new RequestSender();
        $response = $sender->sendRequest($this);
        if (!empty($response->content))
        {
            return json_decode($response->content);
        }
    }
}