<?php
Yii::import('application.lib.facebook.request.event.EventsCollectionGet');
Yii::import('application.models.facebook.EventModel');

class UpcomingEventsModel
{
    /** @var EventModel[] */
    public $events;

    /** @var int */
    protected $num;

    /**
     * @param int $num
     */
    public function __construct($num)
    {
        $this->num = $num;
        $this->load();
    }

    protected function load()
    {
        $this->events = array();

        $request = new EventsCollectionGet();
        // set a high limit to request a large amount of events so we don't have to deal with paging
        // (and therefore multiple api calls)
        $request->limit = 200;
        $request->fields = 'start_time,name,location,picture.type(normal)';
        $response = $request->get();

        if (empty($response) || empty($response->data))
        {
            return;
        }

        $allEvents = array();
        $now = new DateTime();
        foreach ($response->data as $item)
        {
            $event = new EventModel($item);

            // throw out events in the past
            if ($event->startTime >= $now)
            {
                $allEvents[] = $event;
            }
        }

        usort(&$allEvents, function($first, $second)
        {
            /** @var $first EventModel */
            /** @var $second EventModel */
            if ($first->startTime == $second->startTime)
            {
                return 0;
            }

            return $first->startTime < $second->startTime ? -1 : 1;
        });

        foreach ($allEvents as $event)
        {
            /** @var $event EventModel */
            $this->events[] = $event;
            if (count($this->events) >= $this->num)
            {
                return;
            }
        }
    }
} 