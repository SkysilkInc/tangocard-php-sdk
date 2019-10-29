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

class AccountsControllerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \RaasLib\Controllers\AccountsController Controller instance
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
        self::$controller = $client->getAccounts();
    }

    /**
     * Setup test
     */
    protected function setUp()
    {
        $this->httpResponse = new HttpCallBackCatcher();
    }

    /**
     * Tests retrieving all accounts under a specific customer
     */
    public function testTestGetAllCustomerAccounts()
    {
        // Parameters for the API call
        $customerIdentifier = 'sdkautotest1';

        // Set callback and perform API call
        $result = null;
        self::$controller->setHttpCallBack($this->httpResponse);
        try {
            $result = self::$controller->getAccountsByCustomer($customerIdentifier);
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
                "[\n  {\n    \"accountIdentifier\": \"sdkautotest3\",\n    \"accountNumber\": \"A01335766\",\n    \"d" .
                "isplayName\": \"SDK Auto Testing 3\",\n    \"createdAt\": \"2018-04-26T18:16:51.652Z\",\n    \"statu" .
                "s\": \"ACTIVE\"\n  },\n  {\n    \"accountIdentifier\": \"sdkautotest2\",\n    \"accountNumber\": \"A" .
                "11720237\",\n    \"displayName\": \"SDK Auto Testing 2\",\n    \"createdAt\": \"2018-04-26T18:13:45." .
                "196Z\",\n    \"status\": \"ACTIVE\"\n  }\n]",
                $this->httpResponse->getResponse()->getRawBody(),
                true,
                true,
                false
            ),
            "Response body does not match in keys and/or values"
        );
    }

    /**
     * Tests retrieving all accounts
     */
    public function testTestGetAllAccounts()
    {

        // Set callback and perform API call
        $result = null;
        self::$controller->setHttpCallBack($this->httpResponse);
        try {
            $result = self::$controller->getAllAccounts();
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
                "[\n	{\n		\"accountIdentifier\": \"sdkautotest2\",\n		\"accountNumber\": \"A11720237\",\n		\"displayN" .
                "ame\": \"SDK Auto Testing 2\",\n		\"currencyCode\": \"USD\",\n                \"currentBalance\": 0," .
                "\n		\"createdAt\": \"2018-04-26T18:13:45.196Z\",\n		\"status\": \"ACTIVE\",\n		\"contactEmail\": \"t" .
                "est@example.com\"\n	}\n]",
                $this->httpResponse->getResponse()->getRawBody(),
                true,
                true,
                false
            ),
            "Response body does not match in keys and/or values"
        );
    }

    /**
     * Tests retrieving a single account
     */
    public function testTestGetSingleAccount()
    {
        // Parameters for the API call
        $accountIdentifier = 'sdkautotest2';

        // Set callback and perform API call
        $result = null;
        self::$controller->setHttpCallBack($this->httpResponse);
        try {
            $result = self::$controller->getAccount($accountIdentifier);
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
                "{\n  \"accountIdentifier\": \"sdkautotest2\",\n  \"accountNumber\": \"A11720237\",\n  \"displayName" .
                "\": \"SDK Auto Testing 2\",\n  \"currencyCode\": \"USD\",\n  \"currentBalance\": 0,\n  \"createdAt\"" .
                ": \"2018-04-26T18:13:45.196Z\",\n  \"status\": \"ACTIVE\",\n  \"contactEmail\": \"test@example.com\"" .
                "\n}",
                $this->httpResponse->getResponse()->getRawBody(),
                true,
                true,
                false
            ),
            "Response body does not match in keys and/or values"
        );
    }
}
