<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * A software application.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/SoftwareApplication
 */
class SoftwareApplication extends CreativeWork {
    /**
     * Type of software application, e.g. 'Game, Multimedia'.
     *
     * @var string
     */
    public $applicationCategory;

    /**
     * Subcategory of the application, e.g. 'Arcade Game'.
     *
     * @var string
     */
    public $applicationSubCategory;

    /**
     * The name of the application suite to which the application belongs (e.g. Excel
     * belongs to Office).
     *
     * @var string
     */
    public $applicationSuite;

    /**
     * Device required to run the application. Used in cases where a specific
     * make/model is required to run the application. Supersedes device.
     *
     * @var string
     */
    public $availableOnDevice;

    /**
     * Countries for which the application is not supported. You can also provide the
     * two-letter ISO 3166-1 alpha-2 country code.
     *
     * @var string
     */
    public $countriesNotSupported;

    /**
     * Countries for which the application is supported. You can also provide the
     * two-letter ISO 3166-1 alpha-2 country code.
     *
     * @var string
     */
    public $countriesSupported;

    /**
     * If the file can be downloaded, URL to download the binary.
     *
     * @var string
     */
    public $downloadUrl;

    /**
     * Features or modules provided by this application (and possibly required by other
     * applications).
     *
     * @var string
     */
    public $featureList;

    /**
     * Size of the application / package (e.g. 18MB). In the absence of a unit (MB, KB
     * etc.), KB will be assumed.
     *
     * @var string
     */
    public $fileSize;

    /**
     * URL at which the app may be installed, if different from the URL of the item.
     *
     * @var string
     */
    public $installUrl;

    /**
     * Minimum memory requirements.
     *
     * @var string
     */
    public $memoryRequirements;

    /**
     * Operating systems supported (Windows 7, OSX 10.6, Android 1.6).
     *
     * @var string
     */
    public $operatingSystem;

    /**
     * Permission(s) required to run the app (for example, a mobile app may require
     * full internet access or may run only on wifi).
     *
     * @var string
     */
    public $permissions;

    /**
     * Processor architecture required to run the application (e.g. IA64).
     *
     * @var string
     */
    public $processorRequirements;

    /**
     * Description of what changed in this version.
     *
     * @var string
     */
    public $releaseNotes;

    /**
     * A link to a screenshot image of the app.
     *
     * @var ImageObject|string
     */
    public $screenshot;

    /**
     * Additional content for a software application.
     *
     * @var SoftwareApplication
     */
    public $softwareAddOn;

    /**
     * Software application help.
     *
     * @var CreativeWork
     */
    public $softwareHelp;

    /**
     * Component dependency requirements for application. This includes runtime
     * environments and shared libraries that are not included in the application
     * distribution package, but required to run the application (Examples: DirectX,
     * Java or .NET runtime). Supersedes requirements.
     *
     * @var string
     */
    public $softwareRequirements;

    /**
     * Version of the software instance.
     *
     * @var string
     */
    public $softwareVersion;

    /**
     * Storage requirements (free space required).
     *
     * @var string
     */
    public $storageRequirements;

    /**
     * Supporting data for a SoftwareApplication.
     *
     * @var DataFeed
     */
    public $supportingData;

}