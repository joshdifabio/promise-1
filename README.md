# Promise Interface

`PromiseInterface` is a PHP interface that facilitates interoperability between differing implementations of promises and futures.

The interface defines three methods for assigning callbacks to be invoked when a promise is resolved (fulfilled or rejected).

#### then()

Assigns a set of callback functions to the promise and returns a promise. The returned object may be the same object depending on the implementation. The returned promise should be fulfilled by the return values or rejected with the thrown exceptions of the provided callback functions.

```php
\Thenable\PromiseInterface::then(
    callable<(mixed $value): mixed> $onFulfilled = null,
    callable<(\Throwable $exception): mixed> $onRejected = null
): \Thenable\PromiseInterface
```

#### except()

Assigns an on-rejected callback function to the promise and returns a promise. The returned object may be the same object depending on the implementation. The callback is invoked only if the promise is rejected. The returned promise should be fulfilled by the return value or rejected with the thrown exception of the provided callback function.

```php
\Thenable\PromiseInterface::except(
    callable<(\Throwable $exception): mixed> $onRejected = null
): \Thenable\PromiseInterface
```

#### done()

Assigns a set of callback functions to the promise. Unlike then(), nothing is returned from this method. Return values of the assigned callback functions are ignored and exceptions thrown from the callbacks are not catchable. This method is meant to consume a promise value or signal the end of a promise chain.

```php
\Thenable\PromiseInterface::done(
    callable<(mixed $value): mixed> $onFulfilled = null,
    callable<(\Throwable $exception): mixed> $onRejected = null
)
```

### Promises and Futures

For more information on promises, please see the [Promises/A+ JavaScript specification](https://promisesaplus.com) and the [Promise API documentation](https://github.com/icicleio/icicle/wiki/Promises) of [Icicle](https://github.com/icicleio/icicle), a library for writing asynchronous PHP applications.

##### Requirements

PHP 5.4+

##### Installation

The recommended way to install is with the [Composer](http://getcomposer.org/) package manager. (See the [Composer installation guide](https://getcomposer.org/doc/00-intro.md) for information on installing and using Composer.)

Run the following command to use this library in your project: 

```bash
composer require thenable/promise
```

You can also manually edit `composer.json` to add this library as a project requirement.

```js
// composer.json
{
    "require": {
        "thenable/promise": "^0.1"
    }
}
```
