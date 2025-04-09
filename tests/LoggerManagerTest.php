<?php

use PHPUnit\Framework\TestCase;
use Pogger\Channels\StdoutLogger;
use Pogger\Channels\ChannelInterface;
use Pogger\LoggerManager;

/**
 * Test the LoggerManager class.
 */
class LoggerManagerTest extends TestCase
{
    /**
     * Test if the default channel (StdoutLogger) is used.
     */
    public function testGetChannelReturnsDefaultChannel()
    {
        $mockChannel = $this->createMock(ChannelInterface::class);
        $loggerManager = new LoggerManager();
        $reflection = new ReflectionClass(LoggerManager::class);

        $property = $reflection->getProperty('channel');
        $property->setAccessible(true);
        $property->setValue($loggerManager, $mockChannel);

        $this->assertSame($mockChannel, $loggerManager->getChannel());
    }

    /**
     * Test if the log method calls the log method on the active channel.
     */
    public function testLogCallsChannelLogMethod()
    {
        $mockChannel = $this->createMock(ChannelInterface::class);
        $mockChannel->expects($this->once())
            ->method('log')
            ->with(
                $this->equalTo('info'),
                $this->equalTo('This is a test message'),
                $this->equalTo([])
            );

        $loggerManager = new LoggerManager();
        $reflection = new ReflectionClass(LoggerManager::class);

        $property = $reflection->getProperty('channel');
        $property->setAccessible(true);
        $property->setValue($loggerManager, $mockChannel);

        $loggerManager->log('info', 'This is a test message');
    }
}
