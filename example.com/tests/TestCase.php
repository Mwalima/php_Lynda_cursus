<?php

abstract class TestCase extends Illuminate\Foundation\Testing\TestCase
{
    /**
     * The base URL to use while testing the application.
     *
     * @var string
     */
    protected $baseUrl = 'http://localhost';

    /**
     * Creates the application.
     *
     * @return \Illuminate\Foundation\Application
     */
    public function createApplication()
    {
        $app = require __DIR__.'/../bootstrap/app.php';

        $app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

        return $app;
    }

    /**
     * Verify the number of dom elements
     * @param  string   $selector the dom selector (jquery style)
     * @param  int      $number   how many elements should be present in the dom
     * @return $this
     */
    public function countElements($selector, $number)
    {
        $this->assertCount($number, $this->crawler->filter($selector));
        return $this;
    }

    /*
     * Custom method from http://kriswallsmith.net/post/18029585104/faster-phpunit
     * Is used to cleanup after tests for smaller memory footprint
     */
    protected function tearDown()
    {
        parent::tearDown();
        $refl = new \ReflectionObject($this);
        foreach ($refl->getProperties() as $prop) {
            if (!$prop->isStatic() && 0 !== strpos($prop->getDeclaringClass()->getName(), 'PHPUnit_')) {
                $prop->setAccessible(true);
                $prop->setValue($this, null);
            }
        }
    }
}
