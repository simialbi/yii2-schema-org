<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A navigation element of the page.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/SiteNavigationElement
 */
class SiteNavigationElement extends WebPageElement {
    /**
     * A CSS selector, e.g. of a SpeakableSpecification or WebPageElement. In the
     * latter case, multiple matches within a page can constitute a single conceptual
     * "Web page element".
     *
     * @var CssSelectorType
     */
    public $cssSelector;

    /**
     * An XPath, e.g. of a SpeakableSpecification or WebPageElement. In the latter
     * case, multiple matches within a page can constitute a single conceptual "Web
     * page element".
     *
     * @var XPathType
     */
    public $xpath;

}