<?php
namespace Amazon\MWS\Reports\Model;
use Amazon\MWS\Reports\Reports_Model;
/** 
 *  PHP Version 5
 *
 *  @category    Amazon
 *  @package     MarketplaceWebService
 *  @copyright   Copyright 2009 Amazon Technologies, Inc.
 *  @link        http://aws.amazon.com
 *  @license     http://aws.amazon.com/apache2.0  Apache License, Version 2.0
 *  @version     2009-01-01
 */
/******************************************************************************* 

 *  Marketplace Web Service PHP5 Library
 *  Generated: Thu May 07 13:07:36 PDT 2009
 * 
 */

/**
 *  @see MarketplaceWebService_Model
 */
//require_once ('MarketplaceWebService/Model.php');

    

/**
 * \Amazon\MWS\Reports\Model\Reports_Model_RequestReportResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>ReportRequestInfo: \Amazon\MWS\Reports\Model\Reports_Model_ReportRequestInfo</li>
 *
 * </ul>
 */ 
class Reports_Model_RequestReportResult extends Reports_Model
{
    /**
     * Construct new \Amazon\MWS\Reports\Model\Reports_Model_RequestReportResult
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>ReportRequestInfo: \Amazon\MWS\Reports\Model\Reports_Model_ReportRequestInfo</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->fields = array (
        'ReportRequestInfo' => array('FieldValue' => null, 'FieldType' => '\Amazon\MWS\Reports\Model\Reports_Model_ReportRequestInfo'),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the ReportRequestInfo.
     * 
     * @return ReportRequestInfo ReportRequestInfo
     */
    public function getReportRequestInfo() 
    {
        return $this->fields['ReportRequestInfo']['FieldValue'];
    }

    /**
     * Sets the value of the ReportRequestInfo.
     * 
     * @param ReportRequestInfo ReportRequestInfo
     * @return void
     */
    public function setReportRequestInfo($value) 
    {
        $this->fields['ReportRequestInfo']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the ReportRequestInfo  and returns this instance
     * 
     * @param ReportRequestInfo $value ReportRequestInfo
     * @return Reports_Model_RequestReportResult
     */
    public function withReportRequestInfo($value)
    {
        $this->setReportRequestInfo($value);
        return $this;
    }


    /**
     * Checks if ReportRequestInfo  is set
     * 
     * @return bool true if ReportRequestInfo property is set
     */
    public function isSetReportRequestInfo()
    {
        return !is_null($this->fields['ReportRequestInfo']['FieldValue']);

    }




}