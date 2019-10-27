<?php

namespace FM\LessqlBundle\Tests\Configuration;

class ConfigurationTest extends \PHPUnit\Framework\TestCase
{
    use ConfigurationTestCaseTrait;

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
