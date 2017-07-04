<?php

namespace Dhii\Data\Tree\Xpath;

/**
 * Represents an xPath step.
 *
 * @since [*next-version*]
 */
interface XpathStepInterface
{
    /**
     * Traversing should begin at current element.
     *
     * xPath denotes this as not preceding the path with slashes.
     *
     * @since [*next-version*]
     */
    const ROOT_CURRENT = 'current';

    /**
     * Traversing should begin at document root.
     *
     * xPath denotes this as preceding the path with slashes.
     *
     * @since [*next-version*]
     */
    const ROOT_DOCROOT = 'docroot';

    /**
     * Traversing will return an element node.
     *
     * @since [*next-version*]
     */
    const TYPE_ELEMENT = 'element';

    /**
     * Traversing will return an attribute node.
     *
     * @since [*next-version*]
     */
    const TYPE_ATTR = 'attr';

    /**
     * Selects all ancestors (parent, grandparent, etc.) of the current node.
     *
     * @since [*next-version*]
     */
    const AXIS_ANCESTOR = 'ancestor';

    /**
     * Selects all ancestors (parent, grandparent, etc.) of the current node
     * and the current node itself/.
     *
     * @since [*next-version*]
     */
    const AXIS_ANCESTOR_SELF = 'ancestor-or-self';

    /**
     * Selects all attributes of the current node.
     *
     * @since [*next-version*]
     */
    const AXIS_ATTRIBUTE = 'attribute';

    /**
     * Selects all children of the current node.
     *
     * @since [*next-version*]
     */
    const AXIS_CHILD = 'child';

    /**
     * Selects all descendants (children, grandchildren, etc.) of the current node.
     *
     * @since [*next-version*]
     */
    const AXIS_DESCENDANT = 'descendant';

    /**
     * Selects all descendants (children, grandchildren, etc.) of the current node
     * and the current node itself.
     *
     * @since [*next-version*]
     */
    const AXIS_DESCENDANT_SELF = 'descendant-or-self';

    /**
     * Selects everything in the document after the closing tag of the current node.
     *
     * @since [*next-version*]
     */
    const AXIS_FOLLOWING = 'following';

    /**
     * Selects all siblings after the current node.
     *
     * @since [*next-version*]
     */
    const AXIS_FOLLOWING_SIBLING = 'following-sibling';

    /**
     * Selects all namespace nodes of the current node.
     *
     * @since [*next-version*]
     */
    const AXIS_NAMESPACE = 'namespace';

    /**
     * Selects the parent of the current node.
     *
     * @since [*next-version*]
     */
    const AXIS_PARENT = 'parent';

    /**
     * Selects all nodes that appear before the current node in the document,
     * except ancestors, attribute nodes and namespace nodes.
     *
     * @since [*next-version*]
     */
    const AXIS_PRECEDING = 'preceding';

    /**
     * Selects all siblings before the current node.
     *
     * @since [*next-version*]
     */
    const AXIS_PRECEDING_SIBLING = 'preceding-sibling';

    /**
     * Selects the current node.
     *
     * @since [*next-version*]
     */
    const AXIS_SELF = 'self';

    /**
     * The selected nodes will have the current node as their parent.
     *
     * xPath denotes this as separating the step with '/'.
     *
     * @since [*next-version*]
     */
    const PARENT_CURRENT = 'current';

    /**
     * The selected nodes will have any child of the current node as their parent.
     *
     * xPath denotes this as separating the step with '//'.
     *
     * @since [*next-version*]
     */
    const PARENT_CHILD = 'child';

    /**
     * What should be the query relative to.
     *
     * @since [*next-version*]
     *
     * @return string One of the ROOT_* constants.
     */
    public function getRoot();

    /**
     * The type of this step.
     *
     * @since [*next-version*]
     *
     * @return string One of the TYPE_* constants.
     */
    public function getType();

    /**
     * What should be the node-set, relative to the current node.
     *
     * @since [*next-version*]
     *
     * @return string One of the AXIS_* constants.
     */
    public function getAxis();

    /**
     * What should be the parent of the nodes for this query.
     *
     * @since [*next-version*]
     *
     * @return string One of the PARENT_* constants.
     */
    public function getParent();

    /**
     * Expression used to further narrow the list of nodes.
     *
     * @since [*next-version*]
     *
     * @return string The predicate expression.
     */
    public function getPredicate();

    /**
     * Retrieves the name of the node.
     *
     * @since [*next-version*]
     *
     * @return string Name of the node.
     */
    public function getNode();
}
