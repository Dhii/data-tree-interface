<?php

namespace Dhii\Data\Tree;

use Dhii\Data\Container\ContainerInterface;

/**
 * A node that can represent arbitrary data, and can be a part of a child-aware node tree.
 * 
 * Although the node's value and key MAY now be retrievable via the generic
 * `get()`, the `getKey()` and `getValue()` still MUST return corresponding
 * values: the node's key, and the actual value that the node represents,
 * respectively.
 *
 * @since [*next-version*]
 */
interface DataNodeInterface extends
        KeyAwareNodeInterface,
        ChildrenAwareNodeInterface,
        ContainerInterface
{
}
