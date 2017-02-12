<?php

class Test extends PHPUnit_Framework_TestCase
{
	public function testOnePlusOne() {
		$this->assertEquals(1+1,2);
  	}
        
        public function testOauth(){
            $message = "hallo";
            $this->assertStringStartsWith($message, 'hallo');
        }
        
        public function testRequestAction(){
            $this->assertStringStartsWith($_REQUEST['action'],'oauth');
        }
}

?>