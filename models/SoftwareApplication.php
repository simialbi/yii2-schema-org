<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for SoftwareApplication
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/SoftwareApplication
 */
class SoftwareApplication extends CreativeWork {
	/**
	* @var string Type of software application, e.g. 'Game, Multimedia'.
	*/
	public $applicationCategory;

	/**
	* @var string Subcategory of the application, e.g. 'Arcade Game'.
	*/
	public $applicationSubCategory;

	/**
	* @var string The name of the application suite to which the application belongs (e.g. Excel belongs to Office).
	*/
	public $applicationSuite;

	/**
	* @var string Device required to run the application. Used in cases where a specific make/model is required to run the application. Supersedes device.
	*/
	public $availableOnDevice;

	/**
	* @var string Countries for which the application is not supported. You can also provide the two-letter ISO 3166-1 alpha-2 country code.
	*/
	public $countriesNotSupported;

	/**
	* @var string Countries for which the application is supported. You can also provide the two-letter ISO 3166-1 alpha-2 country code.
	*/
	public $countriesSupported;

	/**
	* @var string If the file can be downloaded, URL to download the binary.
	*/
	public $downloadUrl;

	/**
	* @var string Features or modules provided by this application (and possibly required by other applications).
	*/
	public $featureList;

	/**
	* @var string Size of the application / package (e.g. 18MB). In the absence of a unit (MB, KB etc.), KB will be assumed.
	*/
	public $fileSize;

	/**
	* @var string URL at which the app may be installed, if different from the URL of the item.
	*/
	public $installUrl;

	/**
	* @var string Minimum memory requirements.
	*/
	public $memoryRequirements;

	/**
	* @var string Operating systems supported (Windows 7, OSX 10.6, Android 1.6).
	*/
	public $operatingSystem;

	/**
	* @var string Permission(s) required to run the app (for example, a mobile app may require full internet access or may run only on wifi).
	*/
	public $permissions;

	/**
	* @var string Processor architecture required to run the application (e.g. IA64).
	*/
	public $processorRequirements;

	/**
	* @var string Description of what changed in this version.
	*/
	public $releaseNotes;

	/**
	* @var ImageObject|string A link to a screenshot image of the app.
	*/
	public $screenshot;

	/**
	* @var SoftwareApplication Additional content for a software application.
	*/
	public $softwareAddOn;

	/**
	* @var CreativeWork Software application help.
	*/
	public $softwareHelp;

	/**
	* @var string Component dependency requirements for application. This includes runtime environments and shared libraries that are not included in the application distribution package, but required to run the application (Examples: DirectX, Java or .NET runtime). Supersedes requirements.
	*/
	public $softwareRequirements;

	/**
	* @var string Version of the software instance.
	*/
	public $softwareVersion;

	/**
	* @var string Storage requirements (free space required).
	*/
	public $storageRequirements;

	/**
	* @var DataFeed Supporting data for a SoftwareApplication.
	*/
	public $supportingData;

}