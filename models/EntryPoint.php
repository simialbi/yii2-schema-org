<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * An entry point, within some Web-based protocol.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/EntryPoint
 */
class EntryPoint extends Intangible {
    /**
     * An application that can complete the request. Supersedes application.
     *
     * @var SoftwareApplication
     */
    public $actionApplication;

    /**
     * The high level platform(s) where the Action can be performed for the given URL.
     * To specify a specific application or operating system instance, use
     * actionApplication.
     *
     * @var string
     */
    public $actionPlatform;

    /**
     * The supported content type(s) for an EntryPoint response.
     *
     * @var string
     */
    public $contentType;

    /**
     * The supported encoding type(s) for an EntryPoint request.
     *
     * @var string
     */
    public $encodingType;

    /**
     * An HTTP method that specifies the appropriate HTTP method for a request to an
     * HTTP EntryPoint. Values are capitalized strings as used in HTTP.
     *
     * @var string
     */
    public $httpMethod;

    /**
     * An url template (RFC6570) that will be used to construct the target of the
     * execution of the action.
     *
     * @var string
     */
    public $urlTemplate;


}