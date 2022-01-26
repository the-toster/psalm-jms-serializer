<?php

declare(strict_types=1);

namespace TheToster\Psalm\Plugin\JmsSerializer;


use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;

final class Test
{

    public function testFromArray(): Test
    {
        return self::serializer()->fromArray([], Test::class);
    }

    private static function serializer(): Serializer
    {
        return SerializerBuilder::create()->build();
    }
}
