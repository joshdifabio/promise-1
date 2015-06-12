# Thenable

Thenable is a PHP interface that facilitates interoperability between differing implementations of promises and futures.

The interface defines a single method `then()`, which is used to define callbacks that are invoked when the thenable is resolved. The value returned or exception thrown by the invoked callback should be used to fulfill or reject the returned thenable.

```php
\Thenable\Thenable $thenable->then(
    callable<mixed (mixed $value)> $onFulfilled = null,
    callable<mixed (Exception $exception)> $onRejected = null
);
```

### Promises and Futures

For more information on promises, please see the [Promises/A+ JavaScript specification](https://promisesaplus.com) and the [Promise API documentation](https://github.com/icicleio/Icicle/wiki/Promises) of [Icicle](https://github.com/icicleio/Icicle), a library for writing asynchronous PHP applications.

##### Requirements

PHP 5.4+

##### Installation

The recommended way to install is with the [Composer](http://getcomposer.org/) package manager. (See the [Composer installation guide](https://getcomposer.org/doc/00-intro.md) for information on installing and using Composer.)

Run the following command to use this library in your project: 

```bash
composer require thenable/thenable
```

You can also manually edit `composer.json` to add this library as a project requirement.

```js
// composer.json
{
    "require": {
        "thenable/thenable": "^0.2"
    }
}
```
