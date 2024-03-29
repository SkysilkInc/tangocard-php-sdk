<?php
/*
 * Raas
 *
 * This file was automatically generated for Tango Card, Inc. by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace RaasLib\Controllers;

use RaasLib\APIException;
use RaasLib\APIHelper;
use RaasLib\Configuration;
use RaasLib\Models;
use RaasLib\Exceptions;
use RaasLib\Http\HttpRequest;
use RaasLib\Http\HttpResponse;
use RaasLib\Http\HttpMethod;
use RaasLib\Http\HttpContext;
use RaasLib\Servers;
use Unirest\Request;

/**
 * @todo Add a general description for this controller.
 */
class AccountsController extends BaseController
{
    /**
     * @var AccountsController The reference to *Singleton* instance of this class
     */
    private static $instance;

    /**
     * Returns the *Singleton* instance of this class.
     * @return AccountsController The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        
        return static::$instance;
    }

    /**
     * Retrieves a list of accounts for a given customer
     *
     * @param string $customerIdentifier Customer Identifier
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getAccountsByCustomer(
        $customerIdentifier
    ) {
        //check that all required arguments are provided
        if (!isset($customerIdentifier)) {
            throw new \InvalidArgumentException("One or more required arguments were NULL.");
        }


        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/customers/{customerIdentifier}/accounts';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'customerIdentifier' => $customerIdentifier,
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'       => 'V2NGSDK',
            'Accept'           => 'application/json'
        );

        //set HTTP basic auth parameters
        Request::auth(Configuration::$platformName, Configuration::$platformKey);

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::get($_queryUrl, $_headers);

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 208)) {
            throw new Exceptions\RaasGenericException('API Error', $_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClassArray($response->body, 'RaasLib\\Models\\AccountSummaryModel');
    }

    /**
     * Creates an account under a given customer
     *
     * @param string                           $customerIdentifier Customer Identifier
     * @param Models\CreateAccountRequestModel $body               Request Body
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createAccount(
        $customerIdentifier,
        $body
    ) {
        //check that all required arguments are provided
        if (!isset($customerIdentifier, $body)) {
            throw new \InvalidArgumentException("One or more required arguments were NULL.");
        }


        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/customers/{customerIdentifier}/accounts';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'customerIdentifier' => $customerIdentifier,
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'       => 'V2NGSDK',
            'Accept'           => 'application/json',
            'content-type'     => 'application/json; charset=utf-8'
        );

        //set HTTP basic auth parameters
        Request::auth(Configuration::$platformName, Configuration::$platformKey);

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::post($_queryUrl, $_headers, Request\Body::Json($body));

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 208)) {
            throw new Exceptions\RaasGenericException('API Error', $_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClass($response->body, 'RaasLib\\Models\\AccountModel');
    }

    /**
     * Retrieves all accounts under the platform
     *
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getAllAccounts()
    {

        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/accounts';

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'V2NGSDK',
            'Accept'        => 'application/json'
        );

        //set HTTP basic auth parameters
        Request::auth(Configuration::$platformName, Configuration::$platformKey);

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::get($_queryUrl, $_headers);

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 208)) {
            throw new Exceptions\RaasGenericException('API Error', $_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClassArray($response->body, 'RaasLib\\Models\\AccountModel');
    }

    /**
     * Retrieves a single account
     *
     * @param string $accountIdentifier Account Identifier
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getAccount(
        $accountIdentifier
    ) {
        //check that all required arguments are provided
        if (!isset($accountIdentifier)) {
            throw new \InvalidArgumentException("One or more required arguments were NULL.");
        }


        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/accounts/{accountIdentifier}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'accountIdentifier' => $accountIdentifier,
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'      => 'V2NGSDK',
            'Accept'          => 'application/json'
        );

        //set HTTP basic auth parameters
        Request::auth(Configuration::$platformName, Configuration::$platformKey);

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::get($_queryUrl, $_headers);

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 208)) {
            throw new Exceptions\RaasGenericException('API Error', $_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClass($response->body, 'RaasLib\\Models\\AccountModel');
    }
}
