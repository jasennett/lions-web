<?php
Yii::import('application.lib.facebook.request.post.PostsCollectionGet');
Yii::import('application.models.facebook.PostModel');

class AnnouncementsModel
{
    /** @var PostModel[] */
    public $announcements;

    /** @var int */
    protected $maxNum;

    /** @var DateInterval */
    protected $postCutoff;

    /**
     * @param int $maxNum
     * @param DateInterval $postCutoff
     */
    public function __construct($maxNum, $postCutoff = null)
    {
        $this->maxNum = $maxNum;
        $this->postCutoff = $postCutoff;
        $this->load();
    }

    protected function load()
    {
        $this->announcements = array();

        $request = new PostsCollectionGet();
        $response = $request->get();

        if (empty($response) || empty($response->data))
        {
            return;
        }

        $cutoffDate = null;
        if (!empty($this->postCutoff))
        {
            $now = new DateTime('now', new DateTimeZone('UTC'));
            $cutoffDate = $now->sub($this->postCutoff);
        }

        foreach ($response->data as $item)
        {
            $post = new PostModel($item);
            if (!empty($cutoffDate) && $post->updatedTime < $cutoffDate)
            {
                return;
            }

            if ($post->liked)
            {
                $this->announcements[] = $post;
                if (count($this->announcements) >= $this->maxNum)
                {
                    return;
                }
            }
        }
    }
} 