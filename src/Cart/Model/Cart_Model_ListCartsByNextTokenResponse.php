<?php
namespace Amazon\MWS\Cart\Model;
use Amazon\MWS\Cart\Cart_Model;
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
 *  @see MWSCartService_Model
 */

//require_once (dirname(__FILE__) . '/../Model.php');


/**
 * Cart_Model_ListCartsByNextTokenResponse
 * 
 * Properties:
 * <ul>
 * 
 * <li>ListCartsByNextTokenResult: Cart_Model_ListCartsByNextTokenResult</li>
 * <li>ResponseMetadata: Cart_Model_ResponseMetadata</li>
 * <li>ResponseHeaderMetadata: Cart_Model_ResponseHeaderMetadata</li>
 *
 * </ul>
 */

 class Cart_Model_ListCartsByNextTokenResponse extends Cart_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'ListCartsByNextTokenResult' => array('FieldValue' => null, 'FieldType' => 'Cart_Model_ListCartsByNextTokenResult'),
    'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => 'Cart_Model_ResponseMetadata'),
    'ResponseHeaderMetadata' => array('FieldValue' => null, 'FieldType' => 'Cart_Model_ResponseHeaderMetadata'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the ListCartsByNextTokenResult property.
     *
     * @return ListCartsByNextTokenResult ListCartsByNextTokenResult.
     */
    public function getListCartsByNextTokenResult()
    {
        return $this->_fields['ListCartsByNextTokenResult']['FieldValue'];
    }

    /**
     * Set the value of the ListCartsByNextTokenResult property.
     *
     * @param Cart_Model_ListCartsByNextTokenResult listCartsByNextTokenResult
     * @return this instance
     */
    public function setListCartsByNextTokenResult($value)
    {
        $this->_fields['ListCartsByNextTokenResult']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ListCartsByNextTokenResult is set.
     *
     * @return true if ListCartsByNextTokenResult is set.
     */
    public function isSetListCartsByNextTokenResult()
    {
                return !is_null($this->_fields['ListCartsByNextTokenResult']['FieldValue']);
            }

    /**
     * Set the value of ListCartsByNextTokenResult, return this.
     *
     * @param listCartsByNextTokenResult
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withListCartsByNextTokenResult($value)
    {
        $this->setListCartsByNextTokenResult($value);
        return $this;
    }

    /**
     * Get the value of the ResponseMetadata property.
     *
     * @return Cart_Model_ResponseMetadata ResponseMetadata.
     */
    public function getResponseMetadata()
    {
        return $this->_fields['ResponseMetadata']['FieldValue'];
    }

    /**
     * Set the value of the ResponseMetadata property.
     *
     * @param Cart_Model_ResponseMetadata Cart_Model_ResponseMetadata
     * @return this instance
     */
    public function setResponseMetadata($value)
    {
        $this->_fields['ResponseMetadata']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ResponseMetadata is set.
     *
     * @return true if ResponseMetadata is set.
     */
    public function isSetResponseMetadata()
    {
                return !is_null($this->_fields['ResponseMetadata']['FieldValue']);
            }

    /**
     * Set the value of ResponseMetadata, return this.
     *
     * @param responseMetadata
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withResponseMetadata($value)
    {
        $this->setResponseMetadata($value);
        return $this;
    }

    /**
     * Get the value of the ResponseHeaderMetadata property.
     *
     * @return Cart_Model_ResponseHeaderMetadata ResponseHeaderMetadata.
     */
    public function getResponseHeaderMetadata()
    {
        return $this->_fields['ResponseHeaderMetadata']['FieldValue'];
    }

    /**
     * Set the value of the ResponseHeaderMetadata property.
     *
     * @param Cart_Model_ResponseHeaderMetadata Cart_Model_ResponseHeaderMetadata
     * @return this instance
     */
    public function setResponseHeaderMetadata($value)
    {
        $this->_fields['ResponseHeaderMetadata']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ResponseHeaderMetadata is set.
     *
     * @return true if ResponseHeaderMetadata is set.
     */
    public function isSetResponseHeaderMetadata()
    {
                return !is_null($this->_fields['ResponseHeaderMetadata']['FieldValue']);
            }

    /**
     * Set the value of ResponseHeaderMetadata, return this.
     *
     * @param responseHeaderMetadata
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withResponseHeaderMetadata($value)
    {
        $this->setResponseHeaderMetadata($value);
        return $this;
    }
    /**
     * Construct Cart_Model_ListCartsByNextTokenResponse from XML string
     * 
     * @param $xml
     *        XML string to construct from
     *
     * @return Cart_Model_ListCartsByNextTokenResponse
     */
    public static function fromXML($xml)
    {
        $dom = new \DOMDocument();
        $dom->loadXML($xml);
        $xpath = new \DOMXPath($dom);
        $response = $xpath->query("//*[local-name()='ListCartsByNextTokenResponse']");
        if ($response->length == 1) {
            return new Cart_Model_ListCartsByNextTokenResponse(($response->item(0)));
        } else {
            throw new \Exception ("Unable to construct Cart_Model_ListCartsByNextTokenResponse from provided XML.
                                  Make sure that ListCartsByNextTokenResponse is a root element");
        }
    }
    /**
     * XML Representation for this object
     * 
     * @return string XML for this object
     */
    public function toXML() 
    {
        $xml = "";
        $xml .= "<ListCartsByNextTokenResponse xmlns=\"http://mws.amazonservices.com/schema/CartInformation/2014-03-01\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</ListCartsByNextTokenResponse>";
        return $xml;
    }

}
