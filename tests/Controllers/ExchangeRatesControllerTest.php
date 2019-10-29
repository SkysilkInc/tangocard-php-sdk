<?php
/*
 * Raas
 *
 * This file was automatically generated for Tango Card, Inc. by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace RaasLib\Tests;

use RaasLib\APIException;
use RaasLib\Exceptions;
use RaasLib\APIHelper;
use RaasLib\Models;

class ExchangeRatesControllerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \RaasLib\Controllers\ExchangeRatesController Controller instance
     */
    protected static $controller;

    /**
     * @var HttpCallBackCatcher Callback
     */
    protected $httpResponse;

    /**
     * Setup test class
     */
    public static function setUpBeforeClass()
    {
        $client = new \RaasLib\RaasClient();
        self::$controller = $client->getExchangeRates();
    }

    /**
     * Setup test
     */
    protected function setUp()
    {
        $this->httpResponse = new HttpCallBackCatcher();
    }

    /**
     * Tests if we can successfully retrieve exchange rates
     */
    public function testTestRetrieveExchangeRates()
    {

        // Set callback and perform API call
        $result = null;
        self::$controller->setHttpCallBack($this->httpResponse);
        try {
            $result = self::$controller->getExchangeRates();
        } catch (APIException $e) {
        }

        // Test response code
        $this->assertEquals(
            200,
            $this->httpResponse->getResponse()->getStatusCode(),
            "Status is not 200"
        );

        // Test whether the captured response is as we expected
        $this->assertNotNull($result, "Result does not exist");

        $this->assertTrue(
            TestHelper::isJsonObjectProperSubsetOf(
                "{\n	\"disclaimer\": \"Exchange rates are provided here for reference. They are updated at least once" .
                " a day and may have changed by time of order.\",\n	\"exchangeRates\": [{\n		\"lastModifiedDate\": \"" .
                "2018-04-19T13:00:14.291\",\n		\"rewardCurrency\": \"EUR\",\n		\"baseCurrency\": \"NZD\",\n		\"baseFx" .
                "\": 0.59120\n	}, {\n		\"lastModifiedDate\": \"2018-04-19T13:00:14.291\",\n		\"rewardCurrency\": \"US" .
                "D\",\n		\"baseCurrency\": \"NZD\",\n		\"baseFx\": 0.73130\n	}, {\n		\"lastModifiedDate\": \"2018-04-" .
                "19T13:00:14.230\",\n		\"rewardCurrency\": \"INR\",\n		\"baseCurrency\": \"AUD\",\n		\"baseFx\": 51.2" .
                "9066\n	}]\n}",
                $this->httpResponse->getResponse()->getRawBody(),
                false,
                true,
                false
            ),
            "Response body does not match in keys"
        );
    }
}
