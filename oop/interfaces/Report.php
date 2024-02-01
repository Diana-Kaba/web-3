<?php

interface Report
{
    public function read($i);
    public function write($i, $str);
}
