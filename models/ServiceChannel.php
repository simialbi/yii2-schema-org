<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for ServiceChannel
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/ServiceChannel
 */
class ServiceChannel extends Intangible {
	/**
	* @var Language|string A language someone may use with or at the item, service or place. Please use one of the language codes from the IETF BCP 47 standard. See also inLanguage
	*/
	public $availableLanguage;

	/**
	* @var Duration Estimated processing time for the service using this channel.
	*/
	public $processingTime;

	/**
	* @var Service The service provided by this channel.
	*/
	public $providesService;

	/**
	* @var Place The location (e.g. civic structure, local business, etc.) where a person can go to access the service.
	*/
	public $serviceLocation;

	/**
	* @var ContactPoint The phone number to use to access the service.
	*/
	public $servicePhone;

	/**
	* @var PostalAddress The address for accessing the service by mail.
	*/
	public $servicePostalAddress;

	/**
	* @var ContactPoint The number to access the service by text message.
	*/
	public $serviceSmsNumber;

	/**
	* @var string The website to access the service.
	*/
	public $serviceUrl;

}