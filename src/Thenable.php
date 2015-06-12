<?php
namespace Thenable;

/**
 * Thenable is a common interface to facilitate interoperability between promise and future implementations.
 */
interface Thenable
{
    /**
     * Assigns a set of callback functions to the thenable and returns a thenable. The returned object may be the same
     * object depending on the implementation. The returned thenable should be fulfilled by the return values or
     * rejected with the thrown exceptions of the provided callback functions.
     *
     * @param callable|null $onFulfilled Called with the fulfillment value of the thenable.
     * @param callable|null $onRejected Called with the exception used to reject the thenable.
     *
     * @return Thenable
     */
    public function then(callable $onFulfilled = null, callable $onRejected = null);
}
