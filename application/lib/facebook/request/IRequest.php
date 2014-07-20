<?php

interface IRequest
{
    public function getRoute();

    public function getQueryStringParams();
}