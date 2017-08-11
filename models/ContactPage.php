<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for ContactPage
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/ContactPage
 */
class ContactPage extends WebPage {
	/**
	* @var BreadcrumbList|string A set of links that can help a user understand and navigate a website hierarchy.
	*/
	public $breadcrumb;

	/**
	* @var string Date on which the content on this web page was last reviewed for accuracy and/or completeness.
	*/
	public $lastReviewed;

	/**
	* @var WebPageElement Indicates if this web page element is the main subject of the page.
	*/
	public $mainContentOfPage;

	/**
	* @var ImageObject Indicates the main image on the page.
	*/
	public $primaryImageOfPage;

	/**
	* @var string A link related to this web page, for example to other related web pages.
	*/
	public $relatedLink;

	/**
	* @var Organization|Person People or organizations that have reviewed the content on this web page for accuracy and/or completeness.
	*/
	public $reviewedBy;

	/**
	* @var string One of the more significant URLs on the page. Typically, these are the non-navigation links that are clicked on the most. Supersedes significantLinks.
	*/
	public $significantLink;

	/**
	* @var Specialty One of the domain specialities to which this web page's content applies.
	*/
	public $specialty;

}