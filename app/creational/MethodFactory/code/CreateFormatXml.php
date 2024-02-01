<?php

namespace app\creational\MethodFactory\code;

class CreateFormatXml implements Creator
{
    public function createdFromat(): FormatXml
    {
        return new FormatXml();
    }
}