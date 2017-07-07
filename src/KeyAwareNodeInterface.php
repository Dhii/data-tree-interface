<?php

namespace Dhii\Data\Tree;

use Dhii\Data\KeyAwareInterface;

/**
 * A node that can have its key retrieved.
 *
 * @since [*next-version*]
 */
interface KeyAwareNodeInterface extends
    NodeInterface,
    KeyAwareInterface
{
}
