<?php

namespace Dhii\Data\Tree\FuncTest;

use Xpmock\TestCase;

/**
 * Tests {@see \Dhii\Data\Tree\ChildrenAwareNodeInterface}.
 *
 * @since [*next-version*]
 */
class ChildrenAwareNodeInterfaceTest extends TestCase
{
    /**
     * The name of the test subject.
     *
     * @since [*next-version*]
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\\Data\\Tree\\ChildrenAwareNodeInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return \Dhii\Data\Tree\ChildrenAwareNodeInterface
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
            ->getValue()
            ->getChildren()
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
