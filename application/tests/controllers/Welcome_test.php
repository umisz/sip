<?php

class Welcome_test extends TestCase
{
    
        public function test_index() {
            $output = $this->request('GET', 'welcome');
            $this->assertContains('<title>SIP - Login</title>', $output);
        }
        
}
        
        
?>