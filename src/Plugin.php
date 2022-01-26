<?php

declare(strict_types=1);

namespace TheToster\Psalm\Plugin\JmsSerializer;

use SimpleXMLElement;
use Psalm\Plugin\PluginEntryPointInterface;
use Psalm\Plugin\RegistrationInterface;

final class Plugin implements PluginEntryPointInterface
{
    public function __invoke(RegistrationInterface $psalm, ?SimpleXMLElement $config = null): void
    {
        $psalm->addStubFile(__DIR__ . '/../stubs/serializer.phpstub');
    }
}
