<?php

declare(strict_types=1);

namespace Auth0\Laravel\Events;

/**
 * @api
 */
interface LoginAttemptingContract extends EventContract
{
    /**
     * @param array $parameters The login parameters array.
     */
    public function __construct(
        array $parameters = [],
    );

    /**
     * Returns the login parameters array.
     */
    public function getParameters(): array;

    /**
     * Replace the login parameters array.
     *
     * @param array $parameters
     */
    public function setParameters(array $parameters): void;
}
