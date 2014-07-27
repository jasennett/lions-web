<?php
Yii::import('application.lib.facebook.request.IRequest');
Yii::import('application.lib.facebook.RequestSender');

abstract class RequestBase implements IRequest
{
    /**
     * @var int
     */
    public $limit;

    /**
     * @var string
     */
    public $fields;

    public function get()
    {
        $sender = new RequestSender();
        $response = $sender->sendRequest($this);
        if (!empty($response->content))
        {
            return json_decode($response->content);
        }
    }

    public function getQueryStringParams()
    {
        $result = array();
        if (isset($this->limit))
        {
            $result['limit'] = $this->limit;
        }

        if (isset($this->fields))
        {
            $result['fields'] = $this->fields;
        }

        return $result;
    }
}