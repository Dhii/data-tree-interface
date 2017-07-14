<?php

namespace Dhii\Data\Tree;

use Dhii\Data\Hierarchy\ChildrenAwareInterface;
use Traversable;

/**
 * A node that can have its children retrieved.
 *
 * @since [*next-version*]
 */
interface ChildrenAwareNodeInterface extends
    NodeInterface,
    ChildrenAwareInterface
{
    /**
     * Retrieves child nodes of this node.
     *
     * @since [*next-version*]
     *
     * @return BasicNodeInterface[]|Traversable A list of child nodes.
     */
    public function getChildren();
}
