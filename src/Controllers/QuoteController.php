<?php
/*
 * FreteasyLib
 *
 * This file was automatically generated for ISET by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace FreteasyLib\Controllers;

use FreteasyLib\APIException;
use FreteasyLib\APIHelper;
use FreteasyLib\Configuration;
use FreteasyLib\Models;
use FreteasyLib\Exceptions;
use FreteasyLib\Http\HttpRequest;
use FreteasyLib\Http\HttpResponse;
use FreteasyLib\Http\HttpMethod;
use FreteasyLib\Http\HttpContext;
use FreteasyLib\Servers;
use Unirest\Request;

/**
 * @todo Add a general description for this controller.
 */
class QuoteController extends BaseController
{
    /**
     * @var QuoteController The reference to *Singleton* instance of this class
     */
    private static $instance;

    /**
     * Returns the *Singleton* instance of this class.
     * @return QuoteController The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        
        return static::$instance;
    }

    /**
     * Endpoint to verify if all services still working fine
     *
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getQuote()
    {

        //prepare query string for API call
        $_queryBuilder = '/quote';

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl(Configuration::getBaseUri() . $_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => BaseController::USER_AGENT,
            'Accept'        => 'application/json',
            'x-api-key' => Configuration::$xApiKey
        );

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

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        return $response->body;
    }

    /**
     * Endpoint to get quotation freight according to sender, destiny and items for each service
     *
     * @param Models\Quote $quote quote input to calculate freight
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createQuote(
        $quote
    ) {

        //prepare query string for API call
        $_queryBuilder = '/quote';

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl(Configuration::getBaseUri() . $_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => BaseController::USER_AGENT,
            'Accept'        => 'application/json',
            'content-type'  => 'application/json; charset=utf-8',
            'x-api-key' => Configuration::$xApiKey
        );

        //json encode body
        $_bodyJson = Request\Body::Json($quote);

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::post($_queryUrl, $_headers, $_bodyJson);

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        return $response->body;
    }
}
