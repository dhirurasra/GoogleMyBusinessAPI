<?php

namespace GoogleMyBusiness\GoogleMyBusinessAPI\Tests;

use GoogleMyBusiness\GoogleMyBusinessAPI\Google_Service_MyBusiness;
use PHPUnit\Framework\TestCase;

class Google_Service_MyBusinessTest extends TestCase {
	public function testSomeMethod() {
		$service = new Google_Service_MyBusiness();
		$result = $service->someMethod();
		$this->assertEquals('expectedResult', $result);
	}
}
