<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A table on a Web page.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/Table
 */
class Table extends WebPageElement {
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