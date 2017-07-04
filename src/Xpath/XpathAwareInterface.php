<?php

namespace Dhii\Data\Tree\Xpath;

use Dhii\Util\String\StringableInterface as Stringable;

/**
 * Something that can have an xPath.
 *
 * @since [*next-version*]
 */
interface XpathAwareInterface
{
    /**
     * Retrieves the xPath associated with this instance.
     *
     * @since [*next-version*]
     *
     * @return string|Stringable|null The xPath, if any.
     */
    public function getXpath();
}
