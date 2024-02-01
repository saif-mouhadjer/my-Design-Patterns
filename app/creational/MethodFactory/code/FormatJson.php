<?php

namespace app\creational\MethodFactory\code;

class FormatJson implements Format
{
    public function showFormat(): string
    {
        return "the format is 'JSON'";
    }
}