<?php 

class SampleTest extends PHPUnit_Framework_TestCase {
    
    public function testSample()
    {
        $example = new Ozziest\Example\Example;
        $title = $example->title('bu örnek bir başlıktır');
        $this->assertEquals($title, 'Bu Örnek Bir Başlıktır');
    }

}