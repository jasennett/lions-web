<?php

class FacebookModelBase
{
    protected function mapProperties($detail, $map)
    {
        if (empty($detail) || empty($map))
        {
            return;
        }

        foreach ($map as $source=>$target)
        {
            if (!empty($detail->$source))
            {
                $this->$target = $detail->$source;
            }
        }
    }
} 