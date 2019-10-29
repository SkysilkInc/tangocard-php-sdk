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

class FundControllerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \RaasLib\Controllers\FundController Controller instance
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
        self::$controller = $client->getFund();
    }

    /**
     * Setup test
     */
    protected function setUp()
    {
        $this->httpResponse = new HttpCallBackCatcher();
    }

    /**
     * Tests retrieving deposit information
     */
    public function testTestGetDeposit()
    {
        // Parameters for the API call
        $depositId = 'RAD-180426-5407';

        // Set callback and perform API call
        $result = null;
        self::$controller->setHttpCallBack($this->httpResponse);
        try {
            $result = self::$controller->getDeposit($depositId);
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
                "{\n  \"referenceDepositID\": \"RAD-180426-5407\",\n  \"amount\": 1.25,\n  \"amountCharged\": 1.29,\n" .
                "  \"feePercent\": 3.5,\n  \"createdDate\": \"2018-04-26T18:56:28.28Z\",\n  \"status\": \"SUCCESS\"," .
                "\n  \"accountNumber\": \"A32386768\"\n}",
                $this->httpResponse->getResponse()->getRawBody(),
                true,
                true,
                false
            ),
            "Response body does not match in keys and/or values"
        );
    }

    /**
     * Tests adding funds to an account
     */
    public function testTestAddFunds()
    {
        // Parameters for the API call
        $body = TestHelper::getJsonMapper()->mapClass(json_decode(
            "{   \"accountIdentifier\": \"sdkautotest5\",   \"amount\": 1.25,   \"creditCardToken\": \"56ac1a30-6" .
            "ba2-4047-9b8c-70f97a5502c5\",   \"customerIdentifier\": \"sdkautotest4\" }"),
            'RaasLib\\Models\\DepositRequestModel'
        );

        // Set callback and perform API call
        $result = null;
        self::$controller->setHttpCallBack($this->httpResponse);
        try {
            $result = self::$controller->addFunds($body);
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
                "{\n  \"referenceDepositID\": \"RAD-180426-5407\",\n  \"amount\": 1.25,\n  \"amountCharged\": 1.29,\n" .
                "  \"feePercent\": 3.5,\n  \"createdDate\": \"2018-04-26T18:56:28.28Z\",\n  \"status\": \"SUCCESS\"," .
                "\n  \"accountNumber\": \"A32386768\"\n}",
                $this->httpResponse->getResponse()->getRawBody(),
                false,
                true,
                false
            ),
            "Response body does not match in keys"
        );
    }

    /**
     * Tests retrieving all credit cards for a platform
     */
    public function testTestGetCreditCards()
    {

        // Set callback and perform API call
        $result = null;
        self::$controller->setHttpCallBack($this->httpResponse);
        try {
            $result = self::$controller->getCreditCards();
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
                "[\n  {\n    \"customerIdentifier\": \"sdkautotest4\",\n    \"accountIdentifier\": \"sdkautotest5\"," .
                "\n    \"token\": \"56ac1a30-6ba2-4047-9b8c-70f97a5502c5\",\n    \"label\": \"SDK Auto Testing Card 1" .
                "\",\n    \"lastFourDigits\": \"4444\",\n    \"expirationDate\": \"2020-01\",\n    \"status\": \"ACTI" .
                "VE\",\n    \"createdDate\": \"2018-04-26T18:52:17.575Z\",\n    \"activationDate\": \"2018-04-26T18:5" .
                "2:17.575Z\",\n    \"contactInformation\": [\n      {\n        \"fullName\": \"Test User\",\n        " .
                "\"emailAddress\": \"test@example.com\"\n      },\n      {\n        \"fullName\": \"Test Man Two\",\n" .
                "        \"emailAddress\": \"test2@example.com\"\n      }\n    ],\n    \"accountNumber\": \"A32386768" .
                "\"\n  }\n]",
                $this->httpResponse->getResponse()->getRawBody(),
                true,
                true,
                false
            ),
            "Response body does not match in keys and/or values"
        );
    }

    /**
     * Tests retrieving a single credit card
     */
    public function testTestGetCreditCard()
    {
        // Parameters for the API call
        $token = '56ac1a30-6ba2-4047-9b8c-70f97a5502c5';

        // Set callback and perform API call
        $result = null;
        self::$controller->setHttpCallBack($this->httpResponse);
        try {
            $result = self::$controller->getCreditCard($token);
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
                "{\n  \"customerIdentifier\": \"sdkautotest4\",\n  \"accountIdentifier\": \"sdkautotest5\",\n  \"toke" .
                "n\": \"56ac1a30-6ba2-4047-9b8c-70f97a5502c5\",\n  \"label\": \"SDK Auto Testing Card 1\",\n  \"lastF" .
                "ourDigits\": \"4444\",\n  \"expirationDate\": \"2020-01\",\n  \"status\": \"ACTIVE\",\n  \"createdDa" .
                "te\": \"2018-04-26T18:52:17.575Z\",\n  \"activationDate\": \"2018-04-26T18:52:17.575Z\",\n  \"contac" .
                "tInformation\": [\n    {\n      \"fullName\": \"Test User\",\n      \"emailAddress\": \"test@example" .
                ".com\"\n    },\n    {\n      \"fullName\": \"Test Man Two\",\n      \"emailAddress\": \"test2@exampl" .
                "e.com\"\n    }\n  ],\n  \"accountNumber\": \"A32386768\"\n}",
                $this->httpResponse->getResponse()->getRawBody(),
                true,
                true,
                false
            ),
            "Response body does not match in keys and/or values"
        );
    }
}
