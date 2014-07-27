<?php
if (!headers_sent())
{
    header("Content-Type: application/json");
}

echo $content;
