<?php

namespace Dhii\Data\Tree;

use Traversable;

/**
 */
interface XpathCapableInterface
{
    /**
     * Retrieves nodes that match a specific xPath query.
     *
     * @since [*next-version*]
     *
     * @return Traversable The nodes.
     */
    public function xpath(NodeInterface $node, $query);
}
