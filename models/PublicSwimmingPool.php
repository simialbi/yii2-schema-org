<?php

namespace simialbi\yii2\schemaorg\models;

/**
 * Model for PublicSwimmingPool
 *
 * @package simialbi\yii2\schemaorg\models
 * @see http://schema.org/PublicSwimmingPool
 */
class PublicSwimmingPool extends SportsActivityLocation {
	/**
	* @var string The currency accepted (in ISO 4217 currency format).
	*/
	public $currenciesAccepted;

	/**
	* @var string The general opening hours for a business. Opening hours can be specified as a weekly time range, starting with days, then times per day. Multiple days can be listed with commas ',' separating each day. Day or time ranges are specified using a hyphen '-'.

Days are specified using the following two-letter combinations: Mo, Tu, We, Th, Fr, Sa, Su.
Times are specified using 24:00 time. For example, 3pm is specified as 15:00. 
Here is an example: <time itemprop="openingHours" datetime="Tu,Th 16:00-20:00">Tuesdays and Thursdays 4-8pm</time>.
If a business is open 7 days a week, then it can be specified as <time itemprop="openingHours" datetime="Mo-Su">Monday through Sunday, all day</time>.
	*/
	public $openingHours;

	/**
	* @var string Cash, credit card, etc.
	*/
	public $paymentAccepted;

	/**
	* @var string The price range of the business, for example $$$.
	*/
	public $priceRange;

}