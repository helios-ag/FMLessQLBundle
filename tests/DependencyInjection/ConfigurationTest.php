<?php

namespace FM\LessqlBundle\Tests\Configuration;

use Matthias\SymfonyConfigTest\PhpUnit\ConfigurationTestCaseTrait;
use FM\LessqlBundle\DependencyInjection\Configuration;

class ConfigurationTest extends \PHPUnit\Framework\TestCase
{
    use ConfigurationTestCaseTrait;

    protected function getConfiguration()
    {
        return new Configuration();
    }

    public function testValuesAreInvalidIfRequiredValueIsNotProvided()
    {
        $this->assertConfigurationIsInvalid(
            [
                [], // no values at all
            ],
            'required_value' // (part of) the expected exception message - optional
        );
    }
}
