<?php

namespace Dhii\Data\Tree\FuncTest;

use Xpmock\TestCase;

/**
 * Tests {@see \Dhii\Data\Tree\KeyAwareNodeInterface}.
 *
 * @since [*next-version*]
 */
class KeyAwareNodeInterfaceTest extends TestCase
{
    /**
     * The name of the test subject.
     *
     * @since [*next-version*]
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\\Data\\Tree\\KeyAwareNodeInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return \Dhii\Data\Tree\KeyAwareNodeInterface
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
            ->getValue()
            ->getKey()
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

        $this->assertInstanceOf(
            static::TEST_SUBJECT_CLASSNAME, $subject, 'A valid instance of the subject could not be created'
        );
        $this->assertInstanceOf(
            'Dhii\\Data\\Tree\\NodeInterface', $subject, 'Subject does not extend required interface'
        );
    }
}
