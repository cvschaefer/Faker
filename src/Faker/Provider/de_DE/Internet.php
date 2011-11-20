<?php

namespace Faker\Provider\de_DE;

class Internet extends \Faker\Provider\Internet
{
	protected static $safeEmailTld = array('org', 'com', 'net', 'de');
	protected static $freeEmailDomain = array('gmx.de', 'web.de', 'mail.de', 'online.de', 'hotmail.de');
	protected static $tld = array('com', 'com', 'com', 'com', 'com', 'com', 'biz', 'info', 'net', 'org', 'de');
}
