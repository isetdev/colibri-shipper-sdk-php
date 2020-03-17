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

class QuoteControllerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \FreteasyLib\Controllers\QuoteController Controller instance
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
        self::$controller = $client->getQuote();
    }

    /**
     * Setup test
     */
    protected function setUp()
    {
        $this->httpResponse = new HttpCallBackCatcher();
    }

    /**
     * Verifying if all services is working fine
     */
    public function testServices()
    {

        // Set callback and perform API call
        $result = null;
        self::$controller->setHttpCallBack($this->httpResponse);
        try {
            $result = self::$controller->getQuote();
        } catch (APIException $e) {
        }

        // Test response code
        $this->assertEquals(
            200,
            $this->httpResponse->getResponse()->getStatusCode(),
            "Status is not 200"
        );
    }

    /**
     * Requesting freight quotation without services info
     */
    public function testQuoteWithoutServices()
    {
        // Parameters for the API call
        $quote = null;

        // Set callback and perform API call
        $result = null;
        self::$controller->setHttpCallBack($this->httpResponse);
        try {
            $result = self::$controller->createQuote($quote);
        } catch (APIException $e) {
        }

        // Test response code
        $this->assertEquals(
            400,
            $this->httpResponse->getResponse()->getStatusCode(),
            "Status is not 400"
        );
    }
}
