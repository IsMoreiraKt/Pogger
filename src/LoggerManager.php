<?php

namespace Pogger;

use Pogger\Channels\ChannelStdout;
use Pogger\Channels\ChannelInterface;

/**
 * LoggerManager class is responsible for managing the logging process.
 * It handles logging messages via the selected channel.
 */
class LoggerManager
{
    /**
     * The current logging channel.
     *
     * @var ChannelInterface|null
     */
    private static ?ChannelInterface $channel = null;

    /**
     * Returns the active logging channel.
     * Initializes the default channel (ChannelStdout) if none is set.
     *
     * @return ChannelInterface The logging channel.
     */
    public function getChannel(): ChannelInterface
    {
        if (!self::$channel) {
            self::$channel = new ChannelStdout();
        }

        return self::$channel;
    }

    /**
     * Logs a message at the specified level using the active channel.
     *
     * @param string $level The log level (e.g., 'info', 'error').
     * @param string $message The log message.
     * @param array $context Optional additional context data for the log.
     * @return void
     */
    public function log(
        string $level,
        string $message,
        array $context = []
    ): void {
        self::getChannel()->log($level, $message, $context);
    }
}
