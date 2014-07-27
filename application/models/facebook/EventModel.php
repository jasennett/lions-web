<?php
Yii::import('application.models.facebook.FacebookModelBase');
Yii::import('application.lib.facebook.request.event.EventPictureDetailGet');

class EventModel extends FacebookModelBase
{
    /** @var string */
    public $id;

    /** @var string */
    public $name;

    /** @var string */
    public $location;

    /** @var DateTime */
    public $startTime;

    /** @var string */
    protected $formattedDate;

    /** @var string */
    protected $pictureUrl;

    /**
     * @param EventDetail $detail
     */
    public function __construct($detail)
    {
        $this->mapProperties(
            $detail,
            array('id'=>'id', 'location'=>'location', 'name'=>'name'));
        $this->startTime = DateTime::createFromFormat(DateTime::ISO8601, $detail->start_time);
        $this->pictureUrl = $detail->picture->data->url;
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

        $startTime = $this->startTime;
        $this->formattedDate = $startTime->format('l') . '<br />' . $startTime->format('F j') .
            '<br />' . $startTime->format('g:i A');
        return $this->formattedDate;
    }

    /**
     * @return string
     */
    public function getPictureUrl()
    {
        if (!empty($this->pictureUrl))
        {
            return $this->pictureUrl;
        }

        $request = new EventPictureDetailGet();
        $request->id = $this->id;
        $response = $request->get();
        $this->pictureUrl = $response->data->url;
        return $this->pictureUrl;
    }

    /**
     * @return string
     */
    public function getEventUrl()
    {
        return '//facebook.com/events/' . $this->id;
    }
} 