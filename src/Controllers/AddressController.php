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
class AddressController extends BaseController
{
    /**
     * @var AddressController The reference to *Singleton* instance of this class
     */
    private static $instance;

    /**
     * Returns the *Singleton* instance of this class.
     * @return AddressController The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        
        return static::$instance;
    }

    /**
     * Endpoint to get address by country and postcode
     *
     * @param  array  $options    Array with all options for search
     * @param string $options['country']  country abbreviation to search address
     * @param string $options['postcode'] postcode number
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getByPostcode(
        $options
    ) {

        //prepare query string for API call
        $_queryBuilder = '/address/{country}/{postcode}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'country'  => $this->val($options, 'country'),
            'postcode' => $this->val($options, 'postcode'),
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl(Configuration::getBaseUri(Servers::DEFAULT_) . $_queryBuilder);

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
    * Array access utility method
     * @param  array          $arr         Array of values to read from
     * @param  string         $key         Key to get the value from the array
     * @param  mixed|null     $default     Default value to use if the key was not found
     * @return mixed
     */
    private function val($arr, $key, $default = null)
    {
        if (isset($arr[$key])) {
            return is_bool($arr[$key]) ? var_export($arr[$key], true) : $arr[$key];
        }
        return $default;
    }
}
