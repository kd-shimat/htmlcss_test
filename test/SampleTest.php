
<?php

use Facebook\WebDriver\Remote\DesiredCapabilities;
use Facebook\WebDriver\Remote\RemoteWebDriver;
use PHPUnit\Framework\TestCase;
use Facebook\WebDriver\WebDriverSelect;
use Facebook\WebDriver\WebDriverBy;

class SampleTest extends TestCase
{

    public function test()
    {
        // selenium
        $host = 'http://selenium-chrome:4444/wd/hub/'; #Github Actions上で実行可能なHost
        // chrome ドライバーの起動
        $driver = RemoteWebDriver::create($host, DesiredCapabilities::chrome());
        // 指定URLへ遷移 (Google)
        $driver->get('http://web/public/helloWorld.html');
        //assert
        $tags = $driver->findElements(WebDriverBy::tagName('p'));
        $this->assertEquals("Hello,World", $tags[0]->getText());
    }
}
