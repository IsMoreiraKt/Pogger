<?php

use PHPUnit\Framework\TestCase;
use Pogger\Channels\ChannelStdout;
use Pogger\Utils\ConsoleColors;

/**
 * Test the ChannelStdout class.
 */
class ChannelStdoutTest extends TestCase
{
    /**
     * Test that the log method prints the correct message with the expected color for the 'trace' level.
     *
     * @return void
     */
    public function testLogWithTraceLevel()
    {
        $channel = new ChannelStdout();

        ob_start();
        $channel->log('trace', 'Test trace message');
        $output = ob_get_clean();

        $outputWithoutColor = preg_replace('/\033\[[0-9;]*m/', '', $output);  // Remove ANSI color codes
        $this->assertStringContainsString('[ TRACE ]: Test trace message', $outputWithoutColor);
    }

    /**
     * Test that the log method prints the correct message with the expected color for the 'success' level.
     *
     * @return void
     */
    public function testLogWithSuccessLevel()
    {
        $channel = new ChannelStdout();

        ob_start();
        $channel->log('success', 'Test success message');
        $output = ob_get_clean();

        $outputWithoutColor = preg_replace('/\033\[[0-9;]*m/', '', $output);
        $this->assertStringContainsString('[ SUCCESS ]: Test success message', $outputWithoutColor);
    }

    /**
     * Test that the log method prints the correct message with the expected color for the 'debug' level.
     *
     * @return void
     */
    public function testLogWithDebugLevel()
    {
        $channel = new ChannelStdout();

        ob_start();
        $channel->log('debug', 'Test debug message');
        $output = ob_get_clean();

        $outputWithoutColor = preg_replace('/\033\[[0-9;]*m/', '', $output);
        $this->assertStringContainsString('[ DEBUG ]: Test debug message', $outputWithoutColor);
    }

    /**
     * Test that the log method prints the correct message with the expected color for the 'audit' level.
     *
     * @return void
     */
    public function testLogWithAuditLevel()
    {
        $channel = new ChannelStdout();

        ob_start();
        $channel->log('audit', 'Test audit message');
        $output = ob_get_clean();

        $outputWithoutColor = preg_replace('/\033\[[0-9;]*m/', '', $output);
        $this->assertStringContainsString('[ AUDIT ]: Test audit message', $outputWithoutColor);
    }

    /**
     * Test that the log method prints the correct message with the expected color for the 'info' level.
     *
     * @return void
     */
    public function testLogWithInfoLevel()
    {
        $channel = new ChannelStdout();

        ob_start();
        $channel->log('info', 'Test info message');
        $output = ob_get_clean();

        $outputWithoutColor = preg_replace('/\033\[[0-9;]*m/', '', $output);
        $this->assertStringContainsString('[ INFO ]: Test info message', $outputWithoutColor);
    }

    /**
     * Test that the log method prints the correct message with the expected color for the 'warning' level.
     *
     * @return void
     */
    public function testLogWithWarningLevel()
    {
        $channel = new ChannelStdout();

        ob_start();
        $channel->log('warning', 'Test warning message');
        $output = ob_get_clean();

        $outputWithoutColor = preg_replace('/\033\[[0-9;]*m/', '', $output);
        $this->assertStringContainsString('[ WARNING ]: Test warning message', $outputWithoutColor);
    }

    /**
     * Test that the log method prints the correct message with the expected color for the 'error' level.
     *
     * @return void
     */
    public function testLogWithErrorLevel()
    {
        $channel = new ChannelStdout();

        ob_start();
        $channel->log('error', 'Test error message');
        $output = ob_get_clean();

        $outputWithoutColor = preg_replace('/\033\[[0-9;]*m/', '', $output);
        $this->assertStringContainsString('[ ERROR ]: Test error message', $outputWithoutColor);
    }

    /**
     * Test that the log method prints the correct message with the expected color for the 'fatal' level.
     *
     * @return void
     */
    public function testLogWithFatalLevel()
    {
        $channel = new ChannelStdout();

        ob_start();
        $channel->log('fatal', 'Test fatal message');
        $output = ob_get_clean();

        $outputWithoutColor = preg_replace('/\033\[[0-9;]*m/', '', $output);
        $this->assertStringContainsString('[ FATAL ]: Test fatal message', $outputWithoutColor);
    }

    /**
     * Test that the log method handles an invalid log level gracefully.
     *
     * @return void
     */
    public function testLogWithInvalidLevel()
    {
        $channel = new ChannelStdout();

        ob_start();
        $channel->log('unknown', 'Test unknown message');
        $output = ob_get_clean();

        $outputWithoutColor = preg_replace('/\033\[[0-9;]*m/', '', $output);
        $this->assertStringContainsString('[ UNKNOWN ]: Test unknown message', $outputWithoutColor);
    }
}
