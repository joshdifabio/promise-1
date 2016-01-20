<?php

namespace Interop\Async\Promise;

/**
 * Common promise interface that should be implemented by promises and futures.
 */
interface PromiseInterface
{
    /**
     * Assigns a set of callback functions to the promise and returns a promise. The returned object may be the same
     * object depending on the implementation. The returned promise should be fulfilled by the return values or
     * rejected with the thrown exceptions of the provided callback functions.
     *
     * @param callable|null $onFulfilled Called with the fulfillment value of the promise.
     * @param callable|null $onRejected Called with the exception used to reject the promise.
     *
     * @return \Interop\Async\PromiseInterface
     */
    public function then(callable $onFulfilled = null, callable $onRejected = null);

    /**
     * Assigns an on-rejected callback function to the promise and returns a promise. The returned object may be the
     * same object depending on the implementation. The callback is invoked only if the promise is rejected. The
     * returned promise should be fulfilled by the return value or rejected with the thrown exception of the provided
     * callback function.
     *
     * @param callable $onRejected Called with the exception used to reject the promise.
     *
     * @return \Interop\Async\PromiseInterface
     */
    public function except(callable $onRejected);

    /**
     * Assigns a set of callback functions to the promise. Unlike then(), nothing is returned from this method.
     * Return values of the assigned callback functions are ignored and exceptions thrown from the callbacks are
     * not catchable. This method is meant to consume a promise value or signal the end of a promise chain.
     *
     * @param callable|null $onFulfilled Called with the fulfillment value of the promise.
     * @param callable|null $onRejected Called with the exception used to reject the promise.
     */
    public function done(callable $onFulfilled = null, callable $onRejected = null);
}
