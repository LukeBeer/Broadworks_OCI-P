<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OCIReportingConnectionPingIntervalSeconds;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Port1025;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to SystemOCIReportingParametersGetRequest14sp1.
 *         Contains a list of system OCI Reporting parameters.
 */
class SystemOCIReportingParametersGetResponse14sp1 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemOCIReportingParametersGetResponse14sp1';
    protected $serverPort;
    protected $enableConnectionPing;
    protected $connectionPingIntervalSeconds;
    protected $alterPasswords;
    protected $enablePublicIdentityReporting;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemOCIReportingParametersGetResponse14sp1 $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServerPort($serverPort = null)
    {
        $this->serverPort = ($serverPort InstanceOf Port1025)
             ? $serverPort
             : new Port1025($serverPort);
        $this->serverPort->setElementName('serverPort');
        return $this;
    }

    /**
     * 
     * @return Port1025 $serverPort
     */
    public function getServerPort()
    {
        return ($this->serverPort)
            ? $this->serverPort->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setEnableConnectionPing($enableConnectionPing = null)
    {
        $this->enableConnectionPing = new PrimitiveType($enableConnectionPing);
        $this->enableConnectionPing->setElementName('enableConnectionPing');
        return $this;
    }

    /**
     * 
     * @return boolean $enableConnectionPing
     */
    public function getEnableConnectionPing()
    {
        return ($this->enableConnectionPing)
            ? $this->enableConnectionPing->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setConnectionPingIntervalSeconds($connectionPingIntervalSeconds = null)
    {
        $this->connectionPingIntervalSeconds = ($connectionPingIntervalSeconds InstanceOf OCIReportingConnectionPingIntervalSeconds)
             ? $connectionPingIntervalSeconds
             : new OCIReportingConnectionPingIntervalSeconds($connectionPingIntervalSeconds);
        $this->connectionPingIntervalSeconds->setElementName('connectionPingIntervalSeconds');
        return $this;
    }

    /**
     * 
     * @return OCIReportingConnectionPingIntervalSeconds $connectionPingIntervalSeconds
     */
    public function getConnectionPingIntervalSeconds()
    {
        return ($this->connectionPingIntervalSeconds)
            ? $this->connectionPingIntervalSeconds->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAlterPasswords($alterPasswords = null)
    {
        $this->alterPasswords = new PrimitiveType($alterPasswords);
        $this->alterPasswords->setElementName('alterPasswords');
        return $this;
    }

    /**
     * 
     * @return boolean $alterPasswords
     */
    public function getAlterPasswords()
    {
        return ($this->alterPasswords)
            ? $this->alterPasswords->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setEnablePublicIdentityReporting($enablePublicIdentityReporting = null)
    {
        $this->enablePublicIdentityReporting = new PrimitiveType($enablePublicIdentityReporting);
        $this->enablePublicIdentityReporting->setElementName('enablePublicIdentityReporting');
        return $this;
    }

    /**
     * 
     * @return boolean $enablePublicIdentityReporting
     */
    public function getEnablePublicIdentityReporting()
    {
        return ($this->enablePublicIdentityReporting)
            ? $this->enablePublicIdentityReporting->getElementValue()
            : null;
    }
}
