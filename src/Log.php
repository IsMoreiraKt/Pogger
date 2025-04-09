<?php

namespace Pogger;

/**
 * Log class that provides static methods for different log levels.
 * Each method forwards the log to the LoggerManager.
 */
class Log
{
    /**
     * @var LoggerManager|null
     */
    private static ?LoggerManager $loggerManager = null;

    /**
     * Set the logger manager instance (for dependency injection in tests).
     *
     * @param LoggerManager $loggerManager
     * @return void
     */
    public static function setLoggerManager(LoggerManager $loggerManager): void
    {
        self::$loggerManager = $loggerManager;
    }

    /**
     * Get the current logger manager instance.
     *
     * @return LoggerManager
     */
    private static function getLoggerManager(): LoggerManager
    {
        if (self::$loggerManager === null) {
            self::$loggerManager = new LoggerManager();
        }

        return self::$loggerManager;
    }

    /**
     * Logs a trace message.
     *
     * @param string $message The log message.
     * @param array $context Optional context data.
     * @return void
     */
    public static function trace(
        string $message,
        array $context = []
    ): void {
        self::getLoggerManager()->log('trace', $message, $context);
    }

    /**
     * Logs a success message.
     *
     * @param string $message The log message.
     * @param array $context Optional context data.
     * @return void
     */
    public static function success(
        string $message,
        array $context = []
    ): void {
        self::getLoggerManager()->log('success', $message, $context);
    }

    /**
     * Logs a debug message.
     *
     * @param string $message The log message.
     * @param array $context Optional context data.
     * @return void
     */
    public static function debug(
        string $message,
        array $context = []
    ): void {
        self::getLoggerManager()->log('debug', $message, $context);
    }

    /**
     * Logs an audit message.
     *
     * @param string $message The log message.
     * @param array $context Optional context data.
     * @return void
     */
    public static function audit(
        string $message,
        array $context = []
    ): void {
        self::getLoggerManager()->log('audit', $message, $context);
    }

    /**
     * Logs an informational message.
     *
     * @param string $message The log message.
     * @param array $context Optional context data.
     * @return void
     */
    public static function info(
        string $message,
        array $context = []
    ): void {
        self::getLoggerManager()->log('info', $message, $context);
    }

    /**
     * Logs a warning message.
     *
     * @param string $message The log message.
     * @param array $context Optional context data.
     * @return void
     */
    public static function warning(
        string $message,
        array $context = []
    ): void {
        self::getLoggerManager()->log('warning', $message, $context);
    }

    /**
     * Logs an error message.
     *
     * @param string $message The log message.
     * @param array $context Optional context data.
     * @return void
     */
    public static function error(
        string $message,
        array $context = []
    ): void {
        self::getLoggerManager()->log('error', $message, $context);
    }

    /**
     * Logs a fatal error message.
     *
     * @param string $message The log message.
     * @param array $context Optional context data.
     * @return void
     */
    public static function fatal(
        string $message,
        array $context = []
    ): void {
        self::getLoggerManager()->log('fatal', $message, $context);
    }
}
