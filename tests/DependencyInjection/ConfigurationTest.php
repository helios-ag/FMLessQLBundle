<?php

namespace FM\LessqlBundle\Tests\Configuration;

class ConfigurationTest extends \PHPUnit_Framework_TestCase
{
    use ConfigurationTestCaseTrait;

    public function testValuesAreInvalidIfRequiredValueIsNotProvided()
    {
        $this->assertConfigurationIsInvalid(
            array(
                array() // no values at all
            ),
            'required_value' // (part of) the expected exception message - optional
        );
    }
}
