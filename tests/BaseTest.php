<?php

namespace Sempro\ArrayToObject\Tests;

use PHPUnit\Framework\TestCase;
use Sempro\ArrayToObject\Tests\Data\DummyObject;

class BaseTest extends TestCase
{
    public function testArrayConvertsToObject()
    {
        $data = [
            'id' => 1,
            'name' => 'Test',
        ];

        $object = arrayToObject($data);

        $this->assertSame($data['id'], $object->id);
        $this->assertSame($data['name'], $object->name);
    }

    public function testCanNotConvertIntegerToObject()
    {
        $this->expectException(\TypeError::class);

        arrayToObject(3);
    }

    public function testCanNotConvertStringToObject()
    {
        $this->expectException(\TypeError::class);

        arrayToObject('I am string');
    }

    public function testCanConvertArrayWithObjectWithoutRemovingObjectMethods()
    {
        $data = [
            'id' => 2,
            'dummy' => new DummyObject(),
        ];

        $object = arrayToObject($data);

        $this->assertSame('Test string', $object->dummy->test());
    }
}
