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
            $message = 'oauth';//$_REQUEST['action'];
            $this->assertStringStartsWith($message,'oauth');
        }
}

?>