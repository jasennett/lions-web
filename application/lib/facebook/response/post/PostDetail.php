<?php

class PostDetail extends DetailBase
{
    /** @var string */
    public $message;

    /** @var string */
    public $link;

    /** @var string */
    public $name;

    /** @var string */
    public $type;

    /** @var string */
    public $updated_time;

    /** @var LikesCollection */
    public $likes;
}