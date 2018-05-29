<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for Course
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/Course
 */
class Course extends CreativeWork {
	/**
	* @var string The identifier for the Course used by the course provider (e.g. CS101 or 6.001).
	*/
	public $courseCode;

	/**
	* @var AlignmentObject|Course|string Requirements for taking the Course. May be completion of another Course or a textual description like "permission of instructor". Requirements may be a pre-requisite competency, referenced using AlignmentObject.
	*/
	public $coursePrerequisites;

	/**
	* @var string A description of the qualification, award, certificate, diploma or other educational credential awarded as a consequence of successful completion of this course.
	*/
	public $educationalCredentialAwarded;

	/**
	* @var CourseInstance An offering of the course at a specific time and place or through specific media or mode of study or to a specific section of students.
	*/
	public $hasCourseInstance;

}