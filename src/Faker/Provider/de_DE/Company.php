<?php

namespace Faker\Provider\de_DE;

class Company extends \Faker\Provider\Company
{
	protected static $formats = array(
		'{{lastName}} {{companySuffix}}',
	);

	protected static $companySuffix = array('GmbH', 'AG', 'UG', 'KG', 'OHG');

	/**
	 * @example 'Schneider GmbH'
	 */
	public function company()
	{
		$format = static::randomElement(static::$formats);
		return $this->generator->parse($format);
	}

	/**
	 * @example 'GmbH'
	 */
	public static function companySuffix()
	{
		return static::randomElement(static::$companySuffix);
	}
	
}