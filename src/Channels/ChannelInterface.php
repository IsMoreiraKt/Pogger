<?php

namespace Pogger\Channels;

/**
 * ChannelInterface defines the contract for logging channels.
 * Any logging channel must implement the log method.
 */
interface ChannelInterface
{
    /**
     * Logs a message at the specified level.
     *
     * @param string $level The log level (e.g., 'info', 'error').
     * @param string $message The log message.
     * @param array $context Optional context data for the log.
     * @return void
     */
    public function log(
        string $level,
        string $message,
        array $context = []
    ): void;
}
