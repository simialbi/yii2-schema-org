<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for EntryPoint
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/EntryPoint
 */
class EntryPoint extends Intangible {
	/**
	* @var SoftwareApplication An application that can complete the request. Supersedes application.
	*/
	public $actionApplication;

	/**
	* @var string The high level platform(s) where the Action can be performed for the given URL. To specify a specific application or operating system instance, use actionApplication.
	*/
	public $actionPlatform;

	/**
	* @var string The supported content type(s) for an EntryPoint response.
	*/
	public $contentType;

	/**
	* @var string The supported encoding type(s) for an EntryPoint request.
	*/
	public $encodingType;

	/**
	* @var string An HTTP method that specifies the appropriate HTTP method for a request to an HTTP EntryPoint. Values are capitalized strings as used in HTTP.
	*/
	public $httpMethod;

	/**
	* @var string An url template (RFC6570) that will be used to construct the target of the execution of the action.
	*/
	public $urlTemplate;

}