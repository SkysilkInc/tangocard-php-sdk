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

class CustomersControllerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \RaasLib\Controllers\CustomersController Controller instance
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
        self::$controller = $client->getCustomers();
    }

    /**
     * Setup test
     */
    protected function setUp()
    {
        $this->httpResponse = new HttpCallBackCatcher();
    }

    /**
     * Tests retrieving all customers
     */
    public function testTestGetAllCustomers()
    {

        // Set callback and perform API call
        $result = null;
        self::$controller->setHttpCallBack($this->httpResponse);
        try {
            $result = self::$controller->getAllCustomers();
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
            TestHelper::isArrayOfStringifiedJsonObjectsProperSubsetOf(
                "[\n  {\n    \"customerIdentifier\": \"sdkautotest1\",\n    \"displayName\": \"SDK Auto Testing 1\"," .
                "\n    \"status\": \"active\",\n    \"createdAt\": \"2018-04-26T18:13:12.874Z\",\n    \"accounts\": [" .
                "\n      {\n        \"accountIdentifier\": \"sdkautotest3\",\n        \"accountNumber\": \"A01335766" .
                "\",\n        \"displayName\": \"SDK Auto Testing 3\",\n        \"createdAt\": \"2018-04-26T18:16:51." .
                "652Z\",\n        \"status\": \"ACTIVE\"\n      },\n      {\n        \"accountIdentifier\": \"sdkauto" .
                "test2\",\n        \"accountNumber\": \"A11720237\",\n        \"displayName\": \"SDK Auto Testing 2\"" .
                ",\n        \"createdAt\": \"2018-04-26T18:13:45.196Z\",\n        \"status\": \"ACTIVE\"\n      }\n  " .
                "  ]\n  }\n]",
                $this->httpResponse->getResponse()->getRawBody(),
                true,
                true,
                false
            ),
            "Response body does not match in keys and/or values"
        );
    }

    /**
     * Tests retrieving a single customer
     */
    public function testTestGetCustomer()
    {
        // Parameters for the API call
        $customerIdentifier = 'sdkautotest1';

        // Set callback and perform API call
        $result = null;
        self::$controller->setHttpCallBack($this->httpResponse);
        try {
            $result = self::$controller->getCustomer($customerIdentifier);
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
                "{\n  \"customerIdentifier\": \"sdkautotest1\",\n  \"displayName\": \"SDK Auto Testing 1\",\n  \"stat" .
                "us\": \"active\",\n  \"createdAt\": \"2018-04-26T18:13:12.874Z\",\n  \"accounts\": [\n    {\n      " .
                "\"accountIdentifier\": \"sdkautotest3\",\n      \"accountNumber\": \"A01335766\",\n      \"displayNa" .
                "me\": \"SDK Auto Testing 3\",\n      \"createdAt\": \"2018-04-26T18:16:51.652Z\",\n      \"status\":" .
                " \"ACTIVE\"\n    },\n    {\n      \"accountIdentifier\": \"sdkautotest2\",\n      \"accountNumber\":" .
                " \"A11720237\",\n      \"displayName\": \"SDK Auto Testing 2\",\n      \"createdAt\": \"2018-04-26T1" .
                "8:13:45.196Z\",\n      \"status\": \"ACTIVE\"\n    }\n  ]\n}",
                $this->httpResponse->getResponse()->getRawBody(),
                true,
                true,
                false
            ),
            "Response body does not match in keys and/or values"
        );
    }
}
