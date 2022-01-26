# Plugin to help vimeo/psalm infer jms/serializer types
Currently, it only adds `T` return type to `ArrayTransformerInterface::fromArray`  

## Installation
```shell
composer require --dev the-toster/psalm-jms-serializer
vendor/bin/psalm-plugin enable the-toster/psalm-jms-serializer
```
