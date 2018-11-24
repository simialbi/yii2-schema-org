<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * An instance of a Course which is distinct from other instances because it is
 * offered at a different time or location or through different media or modes of
 * study or to a specific section of students.
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/CourseInstance
 */
class CourseInstance extends Event {
    /**
     * The medium or means of delivery of the course instance or the mode of study,
     * either as a text label (e.g. "online", "onsite" or "blended"; "synchronous" or
     * "asynchronous"; "full-time" or "part-time") or as a URL reference to a term from
     * a controlled vocabulary (e.g. https://ceds.ed.gov/element/001311#Asynchronous ).
     *
     * @var string
     */
    public $courseMode;

    /**
     * A person assigned to instruct or provide instructional assistance for the
     * CourseInstance.
     *
     * @var Person
     */
    public $instructor;

}