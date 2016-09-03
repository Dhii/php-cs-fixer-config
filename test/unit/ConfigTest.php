<?php

namespace Dhii\Configuration\PHPCSFixer\UnitTest;

/**
 * Tests {@see Dhii\Configuration\PHPCSFixer\Config}.
 *
 * @since [*next-version*]
 */
class ConfigTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     * @return Dhii\Configuration\PHPCSFixer\Config
     */
    public function createInstance()
    {
        $instance = new \Dhii\Configuration\PHPCSFixer\Config();

        return $instance;
    }

    /**
     * Tests that a valid instance can be created.
     *
     * @since [*next-version*]
     */
    public function testCanBeCreated()
    {
        $subject = $this->createInstance();

        $this->assertInstanceOf('Symfony\\CS\\ConfigInterface', $subject, 'Instance is not a valid config');
    }

    /**
     * Tests that the crete() method can create a valid instance.
     *
     * @since [*next-version*]
     */
    public function testCreate()
    {
        $subject = \Dhii\Configuration\PHPCSFixer\Config::create();

        $this->assertInstanceOf('Symfony\\CS\\ConfigInterface', $subject, 'Self-created instance is not a valid config');
    }
}
