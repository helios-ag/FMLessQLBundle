<?php

namespace FM\LessqlBundle\Tests;

use FM\LessqlBundle\FMLessqlBundle;

/**
 * Class FMSummernoteBundleTest.
 */
class FMLessqlBundleTest extends \PHPUnit\Framework\TestCase
{
    public function testBundle()
    {
        $bundle = new FMLessqlBundle();
        $this->assertInstanceOf('Symfony\Component\HttpKernel\Bundle\Bundle', $bundle);
    }
}
