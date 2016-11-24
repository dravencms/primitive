# Dravencms Primitive module

This is a Primitive module for dravencms

## Instalation

The best way to install dravencms/primitive is using  [Composer](http://getcomposer.org/):


```sh
$ composer require dravencms/primitive:@dev
```

Then you have to register extension in `config.neon`.

```yaml
extensions:
	primitive: Dravencms\Primitive\DI\PrimitiveExtension
```
