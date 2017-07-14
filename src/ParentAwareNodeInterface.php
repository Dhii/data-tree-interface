<?php

namespace Dhii\Data\Tree;

use Dhii\Data\Hierarchy\ParentAwareInterface;

/**
 * A node that can have its parent retrieved.
 *
 * @since [*next-version*]
 */
interface ParentAwareNodeInterface extends
        NodeInterface,
        ParentAwareInterface
{
    /**
     * {@inheritdoc}
     *
     * @since [*next-version*]
     *
     * @return BasicNodeInterface|null The node's parent, if any.
     */
    public function getParent();
}
