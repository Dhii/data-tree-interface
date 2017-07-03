<?php

namespace Dhii\Data\Tree;

use Traversable;
use Dhii\Data\Tree\NodeInterface;

/**
 */
interface XpathCapableInterface
{
    /**
     * Retrieves nodes that match a specific xPath query.
     *
     * @since [*next-version*]
     *
     * @param NodeInterface $node The node, on which to run the xPath query.
     * @param string $query The query to run on the node.
     *
     * @return Traversable The matching nodes..
     */
    public function xpath(NodeInterface $node, $query);
}
