<?php

interface Displayable
{
    public function getDisplay(): string;
    public function quickDisplay(): string;
}