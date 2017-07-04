<?php

namespace Dhii\Data\Tree\FuncTest\Xpath;

use Xpmock\TestCase;

/**
 * Tests {@see \Dhii\Data\Tree\Xpath\XpathStepInterface}.
 *
 * @since [*next-version*]
 */
class XpathStepInterfaceTest extends TestCase
{
    /**
     * The name of the test subject.
     *
     * @since [*next-version*]
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\\Data\\Tree\\Xpath\\XpathStepInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return \Dhii\Data\Tree\NodeInterface
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
                ->getRoot()
                ->getType()
                ->getAxis()
                ->getParent()
                ->getPredicate()
                ->getNode()
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
            static::TEST_SUBJECT_CLASSNAME, $subject, 'Subject is not a valid instance.'
        );
    }
}