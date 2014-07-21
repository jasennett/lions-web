<?php
Yii::import('application.models.facebook.FacebookModelBase');

class PostModel extends FacebookModelBase
{
    /** @var string */
    public $id;

    /** @var string */
    public $message;

    /** @var string */
    public $link;

    /** @var string */
    public $name;

    /** @var string */
    public $type;

    /** @var DateTime */
    public $updatedTime;

    /** @var bool */
    public $liked;

    /** @var string */
    protected $formattedMessage;

    /** @var string */
    protected $postUrl;

    /** @var string */
    protected $formattedDate;

    /**
     * @param PostDetail $detail
     */
    public function __construct($detail)
    {
        $this->mapProperties(
            $detail,
            array('id'=>'id', 'message'=>'message', 'link'=>'link', 'name'=>'name', 'type'=>'type'));
        $this->updatedTime = DateTime::createFromFormat(DateTime::ISO8601, $detail->updated_time);
        $this->liked = $this->checkLikes($detail);
    }

    /**
     *
     * @param PostDetail $detail
     * @returns bool
     */
    public function checkLikes($detail)
    {
        if (empty($detail) || empty($detail->likes) || empty($detail->likes->data))
        {
            return false;
        }

        foreach($detail->likes->data as $like)
        {
            if ($like->id == FacebookSettings::$LIONS_FAN_PAGE_ID)
            {
                return true;
            }
        }

        return false;
    }

    /**
     * @return string
     */
    public function getFormattedMessage()
    {
        if (!empty($this->formattedMessage))
        {
            return $this->formattedMessage;
        }

        $this->formattedMessage = $this->message;
        return $this->formattedMessage;
    }

    /**
     * @return string
     */
    public function getPostUrl()
    {
        if (!empty($this->postUrl))
        {
            return $this->postUrl;
        }

        $pieces = explode('_', $this->id);
        if (empty($pieces) || count($pieces) < 2)
        {
            $this->postUrl = '//facebook.com/RichmondLions';
        }
        else
        {
            $this->postUrl = '//facebook.com/RichmondLions/posts/' . $pieces[1];
        }

        return $this->postUrl;
    }

    /**
     * @return string
     */
    public function getFormattedDate()
    {
        if (!empty($this->formattedDate))
        {
            return $this->formattedDate;
        }

        $this->formattedDate = $this->updatedTime->format('F j, g:i A');
        return $this->formattedDate;
    }
} 