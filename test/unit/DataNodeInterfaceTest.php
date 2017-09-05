<?php

namespace Dhii\Data\Tree\UnitTest;

use Xpmock\TestCase;

/**
 * Tests {@see \Dhii\Data\Tree\DataNodeInterface}.
 *
 * @since [*next-version*]
 */
class DataNodeInterfaceTest extends TestCase
{
    /**
     * The name of the test subject.
     *
     * @since [*next-version*]
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\Data\Tree\DataNodeInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return \Dhii\Data\Tree\DataNodeInterface
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
                ->getValue()
                ->getKey()
                ->getChildren()
                ->hasChildren()
                ->get()
                ->has()
                ->new();

        return $mock;
    }

    /**
     * Tests whether a valid instance of the test subject can be created.
     *
     * @since [*next-version*]
     */
    public function testCanBeCreated()
    {
        $subject = $this->createInstance();

        $this->assertInstanceOf(static::TEST_SUBJECT_CLASSNAME, $subject, 'A valid instance of the subject could not be created');
        $this->assertInstanceOf('Dhii\Data\ValueAwareInterface', $subject, 'Subject does not extend required interface');
        $this->assertInstanceOf('Dhii\Data\Container\ContainerInterface', $subject, 'Subject does not extend required interface');
        $this->assertInstanceOf('Dhii\Data\Tree\KeyAwareNodeInterface', $subject, 'Subject does not extend required interface');
    }
}
