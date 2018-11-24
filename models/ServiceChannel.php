<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A means for accessing a service, e.g. a government office location, web site, or
 * phone number.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/ServiceChannel
 */
class ServiceChannel extends Intangible {
    /**
     * A language someone may use with or at the item, service or place. Please use one
     * of the language codes from the IETF BCP 47 standard. See also inLanguage
     *
     * @var Language|string
     */
    public $availableLanguage;

    /**
     * Estimated processing time for the service using this channel.
     *
     * @var Duration
     */
    public $processingTime;

    /**
     * The service provided by this channel.
     *
     * @var Service
     */
    public $providesService;

    /**
     * The location (e.g. civic structure, local business, etc.) where a person can go
     * to access the service.
     *
     * @var Place
     */
    public $serviceLocation;

    /**
     * The phone number to use to access the service.
     *
     * @var ContactPoint
     */
    public $servicePhone;

    /**
     * The address for accessing the service by mail.
     *
     * @var PostalAddress
     */
    public $servicePostalAddress;

    /**
     * The number to access the service by text message.
     *
     * @var ContactPoint
     */
    public $serviceSmsNumber;

    /**
     * The website to access the service.
     *
     * @var string
     */
    public $serviceUrl;

}