<?php

namespace app\creational\MethodFactory\code;

class FormatXml implements Format
{
    public function showFormat(): string
    {
        return "the format is 'XML'";
    }
}