<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for SoftwareSourceCode
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/SoftwareSourceCode
 */
class SoftwareSourceCode extends CreativeWork {
	/**
	* @var string Link to the repository where the un-compiled, human readable code and related code is located (SVN, github, CodePlex).
	*/
	public $codeRepository;

	/**
	* @var string What type of code sample: full (compile ready) solution, code snippet, inline code, scripts, template. Supersedes sampleType.
	*/
	public $codeSampleType;

	/**
	* @var ComputerLanguage|string The computer programming language.
	*/
	public $programmingLanguage;

	/**
	* @var string Runtime platform or script interpreter dependencies (Example - Java v1, Python2.3, .Net Framework 3.0). Supersedes runtime.
	*/
	public $runtimePlatform;

	/**
	* @var SoftwareApplication Target Operating System / Product to which the code applies.  If applies to several versions, just the product name can be used.
	*/
	public $targetProduct;

}