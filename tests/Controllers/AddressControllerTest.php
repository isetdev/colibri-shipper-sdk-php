<?php
/*
 * FreteasyLib
 *
 * This file was automatically generated for ISET by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace FreteasyLib\Tests;

use FreteasyLib\APIException;
use FreteasyLib\Exceptions;
use FreteasyLib\APIHelper;
use FreteasyLib\Models;

class AddressControllerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \FreteasyLib\Controllers\AddressController Controller instance
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
        $client = new \FreteasyLib\FreteasyClient();
        self::$controller = $client->getAddress();
    }

    /**
     * Setup test
     */
    protected function setUp()
    {
        $this->httpResponse = new HttpCallBackCatcher();
    }

    /**
     * Requesting with a valid and existent postcode from Brazil
     */
    public function testM31275060InBR()
    {
        // Parameters for the API call
        $country = 'BR';
        $postcode = '31275060';

        // Set callback and perform API call
        $result = null;
        self::$controller->setHttpCallBack($this->httpResponse);
        try {
            $result = self::$controller->getByPostcode($country, $postcode);
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

        $this->assertEquals(
            "{\n  status: 'success',\n  code: 200,\n  address: {\n    city: 'Belo Horizonte',\n    uf: 'MG',\n   " .
                " cod_ibge: '3106200',\n    postcode: '31275060',\n    neighborhood: 'São Luiz',\n    cod_ibge_state:" .
                " '31',\n    country: 'BR',\n    street: 'Alameda dos Jacarandás',\n    state: 'Minas Gerais'\n  }\n}",
            $this->httpResponse->getResponse()->getRawBody(),
            "Response body does not match exactly"
        );
    }

    /**
     * Requesting with a valid and existent postcode but with an inexistent or invalid country(XX)
     */
    public function testInvalidCountryXX()
    {
        // Parameters for the API call
        $country = 'XX';
        $postcode = '31275060';

        // Set callback and perform API call
        $result = null;
        self::$controller->setHttpCallBack($this->httpResponse);
        try {
            $result = self::$controller->getByPostcode($country, $postcode);
        } catch (APIException $e) {
        }

        // Test response code
        $this->assertEquals(
            400,
            $this->httpResponse->getResponse()->getStatusCode(),
            "Status is not 400"
        );

        // Test whether the captured response is as we expected
        $this->assertNotNull($result, "Result does not exist");

        $this->assertEquals(
            '{ status: \'error\', code: 400, message: \'country not found\' }',
            $this->httpResponse->getResponse()->getRawBody(),
            "Response body does not match exactly"
        );
    }

    /**
     * Requesting with an invalid postcode but with a valid country
     */
    public function testInvalidPostcodeX4SD1A()
    {
        // Parameters for the API call
        $country = 'BR';
        $postcode = 'X/*4SD1A';

        // Set callback and perform API call
        $result = null;
        self::$controller->setHttpCallBack($this->httpResponse);
        try {
            $result = self::$controller->getByPostcode($country, $postcode);
        } catch (APIException $e) {
        }

        // Test response code
        $this->assertEquals(
            500,
            $this->httpResponse->getResponse()->getStatusCode(),
            "Status is not 500"
        );
    }

    /**
     * Requesting with an invalid postcode but with a valid country
     */
    public function testValidCountryBRAndInvalidPostcode0UMDOIS()
    {
        // Parameters for the API call
        $country = 'BR';
        $postcode = '0UMDOIS';

        // Set callback and perform API call
        $result = null;
        self::$controller->setHttpCallBack($this->httpResponse);
        try {
            $result = self::$controller->getByPostcode($country, $postcode);
        } catch (APIException $e) {
        }

        // Test response code
        $this->assertEquals(
            500,
            $this->httpResponse->getResponse()->getStatusCode(),
            "Status is not 500"
        );
    }
}
