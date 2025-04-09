<?php

use PHPUnit\Framework\TestCase;
use Pogger\Log;
use Pogger\LoggerManager;
use PHPUnit\Framework\MockObject\MockObject;

/**
 * Test the Log class.
 */
class LogTest extends TestCase
{
    /**
     * The current Logger Manager.
     *
     * @var MockObject|LoggerManager
     */
    private $loggerManagerMock;

    /**
     * Setup method to create a mock of the LoggerManager.
     */
    protected function setUp(): void
    {
        $this->loggerManagerMock = $this->createMock(LoggerManager::class);
        Log::setLoggerManager($this->loggerManagerMock);
    }

    /**
     * Test the trace() method of the Log class.
     */
    public function testTrace()
    {
        $this->loggerManagerMock
            ->expects($this->once())
            ->method('log')
            ->with(
                $this->equalTo('trace'),
                $this->equalTo('Test trace message'),
                $this->equalTo([])
            );

        Log::trace('Test trace message');
    }

    /**
     * Test the success() method of the Log class.
     */
    public function testSuccess()
    {
        $this->loggerManagerMock
            ->expects($this->once())
            ->method('log')
            ->with(
                $this->equalTo('success'),
                $this->equalTo('Test success message'),
                $this->equalTo([])
            );

        Log::success('Test success message');
    }

    /**
     * Test the debug() method of the Log class.
     */
    public function testDebug()
    {
        $this->loggerManagerMock
            ->expects($this->once())
            ->method('log')
            ->with(
                $this->equalTo('debug'),
                $this->equalTo('Test debug message'),
                $this->equalTo([])
            );

        Log::debug('Test debug message');
    }

    /**
     * Test the audit() method of the Log class.
     */
    public function testAudit()
    {
        $this->loggerManagerMock
            ->expects($this->once())
            ->method('log')
            ->with(
                $this->equalTo('audit'),
                $this->equalTo('Test audit message'),
                $this->equalTo([])
            );

        Log::audit('Test audit message');
    }

    /**
     * Test the info() method of the Log class.
     */
    public function testInfo()
    {
        $this->loggerManagerMock
            ->expects($this->once())
            ->method('log')
            ->with(
                $this->equalTo('info'),
                $this->equalTo('Test info message'),
                $this->equalTo([])
            );

        Log::info('Test info message');
    }

    /**
     * Test the warning() method of the Log class.
     */
    public function testWarning()
    {
        $this->loggerManagerMock
            ->expects($this->once())
            ->method('log')
            ->with(
                $this->equalTo('warning'),
                $this->equalTo('Test warning message'),
                $this->equalTo([])
            );

        Log::warning('Test warning message');
    }

    /**
     * Test the error() method of the Log class.
     */
    public function testError()
    {
        $this->loggerManagerMock
            ->expects($this->once())
            ->method('log')
            ->with(
                $this->equalTo('error'),
                $this->equalTo('Test error message'),
                $this->equalTo([])
            );

        Log::error('Test error message');
    }

    /**
     * Test the fatal() method of the Log class.
     */
    public function testFatal()
    {
        $this->loggerManagerMock
            ->expects($this->once())
            ->method('log')
            ->with(
                $this->equalTo('fatal'),
                $this->equalTo('Test fatal message'),
                $this->equalTo([])
            );

        Log::fatal('Test fatal message');
    }
}
