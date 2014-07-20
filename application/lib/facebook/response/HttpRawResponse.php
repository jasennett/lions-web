<?php

class HttpRawResponse
{
    /**
     * The response code
     * @var int
     */
    public $code = null;

    /**
     * The response headers.
     * @var array
     */
    public $headers = array();

    /**
     * The response content.
     * @var string
     */
    public $content = '';
}