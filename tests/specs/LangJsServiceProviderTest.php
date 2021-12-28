<?php

namespace Aanshi\LaravelJsLocalization;

use Orchestra\Testbench\TestCase;

/**
 * The LangJsServiceProviderTest class.
 *
 * @author Aanshi Evangeline <aanshievangeline@gmail.com>
 */
class LangJsServiceProviderTest extends TestCase
{
    protected function getPackageProviders($app = null)
    {
        return ['Aanshi\LaravelJsLocalization\LaravelJsLocalizationServiceProvider'];
    }

    /**
     * Test the command.
     */
    public function testShouldRegisterProvider()
    {
        // TODO: Add some assertions. (however, this already test if this
        // package can be provided with the method: getPackageProviders).
        $this->assertTrue(true); // Add empty assert to remove warning
    }
}
