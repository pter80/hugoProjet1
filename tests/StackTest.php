<?php
use PHPUnit\Framework\TestCase;

class StackTest extends TestCase
{
    public function testPushAndPop()
    {

        $this->assertSame(0, 6);

        array_push($stack, 'foo');
        $this->assertSame('foo', $stack[count($stack)-1]);
        $this->assertSame(1, count($stack));

        $this->assertSame('foo', array_pop($stack));
        $this->assertSame(0, count($stack));
$ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, "http://195.154.118.169/hugo/html/projet");
                curl_setopt($ch, CURLOPT_HEADER, false);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, false);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);   
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);         
                curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
                curl_setopt($ch, CURLOPT_MAXREDIRS, 2);
                curl_setopt($ch, CURLOPT_NOBODY, true);

                $response = curl_exec($ch);
                var_dump("Result",$response);



    }
}
