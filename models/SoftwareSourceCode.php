<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Computer programming source code. Example: Full (compile ready) solutions, code
 * snippet samples, scripts, templates.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/SoftwareSourceCode
 */
class SoftwareSourceCode extends CreativeWork {
    /**
     * Link to the repository where the un-compiled, human readable code and related
     * code is located (SVN, github, CodePlex).
     *
     * @var string
     */
    public $codeRepository;

    /**
     * What type of code sample: full (compile ready) solution, code snippet, inline
     * code, scripts, template. Supersedes sampleType.
     *
     * @var string
     */
    public $codeSampleType;

    /**
     * The computer programming language.
     *
     * @var ComputerLanguage|string
     */
    public $programmingLanguage;

    /**
     * Runtime platform or script interpreter dependencies (Example - Java v1,
     * Python2.3, .Net Framework 3.0). Supersedes runtime.
     *
     * @var string
     */
    public $runtimePlatform;

    /**
     * Target Operating System / Product to which the code applies.  If applies to
     * several versions, just the product name can be used.
     *
     * @var SoftwareApplication
     */
    public $targetProduct;


}