<?php
namespace Thenable;

/**
 * Common thenable interface that should be implemented by promises and futures.
 */
interface ThenableInterface
{
    /**
     * Assigns a set of callback functions to the thenable and returns a thenable. The returned object may be the same
     * object depending on the implementation. The returned thenable should be fulfilled by the return values or
     * rejected with the thrown exceptions of the provided callback functions.
     *
     * @param callable|null $onFulfilled Called with the fulfillment value of the thenable.
     * @param callable|null $onRejected Called with the exception used to reject the thenable.
     *
     * @return \Thenable\ThenableInterface
     */
    public function then(callable $onFulfilled = null, callable $onRejected = null);
}
