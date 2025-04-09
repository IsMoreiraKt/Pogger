<?php

namespace Pogger\Channels;

use Pogger\Utils\ConsoleColors;
use Pogger\Channels\ChannelInterface;

/**
 * ChannelStdout is a logging channel that outputs log messages to the
 *  standard output (stdout).
 * It colors the log message based on the log level using
 *  predefined color codes.
 */
class ChannelStdout implements ChannelInterface
{
    /**
     * Mapping of log levels to corresponding console colors.
     *
     * @var array
     */
    private array $colorMap = [
        'trace' => ConsoleColors::BLUE,
        'success' => ConsoleColors::GREEN,
        'debug' => ConsoleColors::CYAN,
        'audit' => ConsoleColors::ORANGE,
        'info' => ConsoleColors::YELLOW,
        'warning' => ConsoleColors::BOLDYELLOW,
        'error' => ConsoleColors::RED,
        'fatal' => ConsoleColors::BOLDRED,
    ];

    /**
     * Logs a message to the standard output with color formatting based on the log level.
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
        $color = $this->colorMap[$level] ?? ConsoleColors::WHITE;
        $upperLevel = strtoupper($level);

        echo $color . "[ $upperLevel ]: " . ConsoleColors::RESET .
            "$message" . PHP_EOL;
    }
}
