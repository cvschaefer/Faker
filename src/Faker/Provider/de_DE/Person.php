<?php

namespace Faker\Provider\de_DE;

class Person extends \Faker\Provider\Person
{
    protected static $formats = array(
            '{{firstName}} {{lastName}}',
            '{{firstName}} {{lastName}}',
            '{{firstName}} {{lastName}}',
            '{{firstName}} {{lastName}}',
            '{{firstName}} {{lastName}}',
            '{{prefix}} {{firstName}} {{lastName}}',
            '{{firstName}} {{lastName}} {{suffix}}',
            '{{prefix}} {{firstName}} {{lastName}} {{suffix}}'
    );
	
	protected static $firstName = array(
	        'Petra', 
	        'Fritz',
	        'Karl',
	        'Anna',
	        'Frieda',
	        'Erna',
	        'Sabine',
	        'Renate',
	        'Thomas',
	        'Stefan',
	        'Claudia',
	        'Sandra',
	        'Christian',
	        'Mia',
	        'Lukas',
	        'Jan',
	        'Laura',
	        'Sebastian'
	      
	        
	        
	        
	        );
	
	protected static $lastName = array('Müller', 'Meier', 'Schmidt', 'Müller', 'Schmidt', 'Schneider', 'Fischer', 'Weber',
	        'Meyer',
	        'Wagner',
	        'Becker',
	        'Schulz',
	        'Hoffmann',
	        'Schäfer',
	        'Koch',
	        'Bauer',
	        'Richter',
	        'Klein',
	        'Wolf',
	        'Schröder',
	        'Neumann',
	        'Schwarz',
	        'Zimmermann',
	        'Braun',
	        'Krüger',
	        'Hofmann',
	        'Hartmann',
	        'Lange',
	        'Schmitt',
	        'Werner',
	        'Schmitz',
	        'Krause',
	        'Meier',
	        'Lehmann',
	        'Schmid',
	        'Schulze',
	        'Maier',
	        'Köhler',
	        'Herrmann',
	        'König',
	        'Walter',
	        'Mayer',
	        'Huber',
	        'Kaiser',
	        'Fuchs',
	        'Peters',
	        'Lang',
	        'Scholz',
	        'Möller',
	        'Weiß',
	        'Jung',
	        'Hahn',
	        'Schubert',
	        'Vogel',
	        'Friedrich',
	        'Keller',
	        'Günther'	);

private static $prefix = array('Dr.','Prof.');
	
	private static $suffix = array('');
	
	
	/**
	 * @example 'Mrs.'
	 */
	public static function prefix()
	{
	    return static::randomElement(static::$prefix);
	}
	
	/**
	 * @example 'PhD'
	 */
	public static function suffix()
	{
	    return static::randomElement(static::$suffix);
	}

	/**
	 * @example 'John Doe'
	 */
	public function name()
	{
		$format = static::randomElement(static::$formats);
		return $this->generator->parse($format);
	}

	/**
	 * @example 'John'
	 */
	public static function firstName()
	{
		return static::randomElement(static::$firstName);
	}

	/**
	 * @example 'Doe'
	 */
	public static function lastName()
	{
		return static::randomElement(static::$lastName);
	}
	
}