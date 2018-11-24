<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * The act of distributing content to people for their amusement or edification.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/ShareAction
 */
class ShareAction extends CommunicateAction {
    /**
     * The subject matter of the content. Inverse property: subjectOf.
     *
     * @var Thing
     */
    public $about;

    /**
     * The language of the content or performance or used in an action. Please use one
     * of the language codes from the IETF BCP 47 standard. See also availableLanguage.
     * Supersedes language.
     *
     * @var Language|string
     */
    public $inLanguage;

    /**
     * A sub property of participant. The participant who is at the receiving end of
     * the action.
     *
     * @var Audience|ContactPoint|Organization|Person
     */
    public $recipient;

}