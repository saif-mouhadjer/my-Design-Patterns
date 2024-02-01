<?php

namespace app\creational\MethodFactory\Testing;


use \PHPUnit\Framework\TestCase;
use app\creational\MethodFactory\code\CreateFormatJson;
use app\creational\MethodFactory\code\CreateFormatXml;

class Test extends TestCase
{
    function test_can_create_format_json()
    {
        $jsonFactory = new CreateFormatJson();
        $type_format = $jsonFactory->createdFromat()->showFormat();
        $this->assertEquals("the format is 'JSON'", $type_format);
    }
    function test_can_create_format_xml()
    {
        $jsonFactory = new CreateFormatXml();
        $type_format = $jsonFactory->createdFromat()->showFormat();
        $this->assertEquals("the format is 'XML'", $type_format);
    }
}
