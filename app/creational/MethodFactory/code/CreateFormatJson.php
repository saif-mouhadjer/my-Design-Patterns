<?php

namespace app\creational\MethodFactory\code;

class CreateFormatJson implements Creator
{
    public function createdFromat(): FormatJson
    {
        return new FormatJson();
    }
}