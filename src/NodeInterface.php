<?php

namespace Dhii\Data\Tree;

use Dhii\Data\ParentAwareInterface;
use Dhii\Data\ChildrenAwareInterface;
use Dhii\Data\ValueAwareInterface;
use Dhii\Data\KeyAwareInterface;

/**
 * Something that can be a tree node.
 *
 * @since [*next-version*]
 */
interface NodeInterface extends
        ParentAwareInterface,
        ChildrenAwareInterface,
        KeyAwareInterface,
        ValueAwareInterface
{
}
