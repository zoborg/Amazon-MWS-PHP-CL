<?php
namespace Amazon\MWS\Cart;
/*******************************************************************************
 * Copyright 2009-2015 Amazon Services. All Rights Reserved.
 * Licensed under the Apache License, Version 2.0 (the "License"); 
 *
 * You may not use this file except in compliance with the License. 
 * You may obtain a copy of the License at: http://aws.amazon.com/apache2.0
 * This file is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR 
 * CONDITIONS OF ANY KIND, either express or implied. See the License for the 
 * specific language governing permissions and limitations under the License.
 *******************************************************************************
 * PHP Version 5
 * @category Amazon
 * @package  MWS Cart Service
 * @version  2014-03-01
 * Library Version: 2015-03-12
 * Generated: Wed Mar 11 20:26:26 GMT 2015
 */

/**
 *  @see MWSCartService_Interface
 */
//require_once (dirname(__FILE__) . '/Interface.php');

class Cart_Mock implements Cart_Interface
{
    // Public API ------------------------------------------------------------//

    /**
     * Get Carts
     * Returns cart information for
     *         one or more customers, given a seller-directed customer ID.
     *         There is a maximum number of customer IDs supported per request.
     *         See service documentation for that limit.
     *
     * @param mixed $request array of parameters for Cart_Model_GetCarts request or Cart_Model_GetCarts object itself
     * @see Cart_Model_GetCarts
     * @return Cart_Model_GetCartsResponse
     *
     * @throws Cart_Exception
     */
    public function getCarts($request)
    {
//        //require_once (dirname(__FILE__) . '/Model/GetCartsResponse.php');
        return Model\Cart_Model_GetCartsResponse::fromXML($this->_invoke('GetCarts'));
    }

    /**
     * List Carts
     * Returns a list of customer records based on the criteria in the
     *         request. In the case there are more cart results than can be returned
     *         in a single response, a next token is provided which can be used
     *         to obtain more results via ListCartsByNextToken.
     *
     * @param mixed $request array of parameters for Cart_Model_ListCarts request or Cart_Model_ListCarts object itself
     * @see Cart_Model_ListCarts
     * @return Cart_Model_ListCartsResponse
     *
     * @throws Cart_Exception
     */
    public function listCarts($request)
    {
//        //require_once (dirname(__FILE__) . '/Model/ListCartsResponse.php');
        return Model\Cart_Model_ListCartsResponse::fromXML($this->_invoke('ListCarts'));
    }

    /**
     * List Carts By Next Token
     * Returns the next page of results based on the next token given from a previous call to
     *         ListCarts or ListCartsByNextToken. The output includes a next token
     *         that can be used to obtain the next page of results, if there are any.
     *
     * @param mixed $request array of parameters for Cart_Model_ListCartsByNextToken request or Cart_Model_ListCartsByNextToken object itself
     * @see Cart_Model_ListCartsByNextToken
     * @return Cart_Model_ListCartsByNextTokenResponse
     *
     * @throws Cart_Exception
     */
    public function listCartsByNextToken($request)
    {
//        //require_once (dirname(__FILE__) . '/Model/ListCartsByNextTokenResponse.php');
        return Model\Cart_Model_ListCartsByNextTokenResponse::fromXML($this->_invoke('ListCartsByNextToken'));
    }

    /**
     * Get Service Status
     * 
     *
     * @param mixed $request array of parameters for Cart_Model_GetServiceStatus request or Cart_Model_GetServiceStatus object itself
     * @see Cart_Model_GetServiceStatus
     * @return Cart_Model_GetServiceStatusResponse
     *
     * @throws Cart_Exception
     */
    public function getServiceStatus($request)
    {
//        //require_once (dirname(__FILE__) . '/Model/GetServiceStatusResponse.php');
        return Model\Cart_Model_GetStatusResponse::fromXML($this->_invoke('GetServiceStatus'));
    }

    // Private API ------------------------------------------------------------//

    private function _invoke($actionName)
    {
        return $xml = file_get_contents(dirname(__FILE__) . '/Mock/' . $actionName . 'Response.xml', /** search include path */ TRUE);
    }

}
