<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\BwDiameterApplicationId;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\BwDiameterPeerInstance;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\BwDiameterPriority;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\BwDiameterWeight;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DomainName;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Add a Diameter routing peer.  The realm must refer to a Diameter routing realm whose action is relay.  The destinationPeerIdentity must refer to an existing Diameter peer whose mode is active.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemBwDiameterRoutingPeerAddRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemBwDiameterRoutingPeerAddRequest';
    protected $instance;
    protected $realm;
    protected $applicationId;
    protected $identity;
    protected $priority;
    protected $weight;

    public function __construct(
         $instance = '',
         $realm = '',
         $applicationId = '',
         $identity = '',
         $priority = '',
         $weight = ''
    ) {
        $this->setInstance($instance);
        $this->setRealm($realm);
        $this->setApplicationId($applicationId);
        $this->setIdentity($identity);
        $this->setPriority($priority);
        $this->setWeight($weight);
    }

    /**
     * @return mixed $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setInstance($instance = null)
    {
        $this->instance = ($instance InstanceOf BwDiameterPeerInstance)
             ? $instance
             : new BwDiameterPeerInstance($instance);
        $this->instance->setElementName('instance');
        return $this;
    }

    /**
     * 
     * @return BwDiameterPeerInstance $instance
     */
    public function getInstance()
    {
        return ($this->instance)
            ? $this->instance->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setRealm($realm = null)
    {
        $this->realm = ($realm InstanceOf DomainName)
             ? $realm
             : new DomainName($realm);
        $this->realm->setElementName('realm');
        return $this;
    }

    /**
     * 
     * @return DomainName $realm
     */
    public function getRealm()
    {
        return ($this->realm)
            ? $this->realm->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setApplicationId($applicationId = null)
    {
        $this->applicationId = ($applicationId InstanceOf BwDiameterApplicationId)
             ? $applicationId
             : new BwDiameterApplicationId($applicationId);
        $this->applicationId->setElementName('applicationId');
        return $this;
    }

    /**
     * 
     * @return BwDiameterApplicationId $applicationId
     */
    public function getApplicationId()
    {
        return ($this->applicationId)
            ? $this->applicationId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setIdentity($identity = null)
    {
        $this->identity = ($identity InstanceOf DomainName)
             ? $identity
             : new DomainName($identity);
        $this->identity->setElementName('identity');
        return $this;
    }

    /**
     * 
     * @return DomainName $identity
     */
    public function getIdentity()
    {
        return ($this->identity)
            ? $this->identity->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPriority($priority = null)
    {
        $this->priority = ($priority InstanceOf BwDiameterPriority)
             ? $priority
             : new BwDiameterPriority($priority);
        $this->priority->setElementName('priority');
        return $this;
    }

    /**
     * 
     * @return BwDiameterPriority $priority
     */
    public function getPriority()
    {
        return ($this->priority)
            ? $this->priority->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setWeight($weight = null)
    {
        $this->weight = ($weight InstanceOf BwDiameterWeight)
             ? $weight
             : new BwDiameterWeight($weight);
        $this->weight->setElementName('weight');
        return $this;
    }

    /**
     * 
     * @return BwDiameterWeight $weight
     */
    public function getWeight()
    {
        return ($this->weight)
            ? $this->weight->getElementValue()
            : null;
    }
}
