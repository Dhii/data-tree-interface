<?php

namespace Dhii\Data\Tree\Xpath;

/**
 * Represents a problem with an xPath.
 *
 * @since [*next-version*]
 */
interface XpathExceptionInterface
{
    /**
     * Retrieves the xPath.
     *
     * @since [*next-version*]
     *
     * @return string|null The problematic xPath, if any.
     */
    public function getXpath();
}
