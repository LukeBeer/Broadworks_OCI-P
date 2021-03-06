<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Request to modify a service provider's or enterprise's voice messaging settings.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class ServiceProviderVoiceMessagingGroupModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'ServiceProviderVoiceMessagingGroupModifyRequest';
    protected $serviceProviderId;
    protected $deliveryFromAddress;
    protected $notificationFromAddress;
    protected $voicePortalLockoutFromAddress;
    protected $useSystemDefaultDeliveryFromAddress;
    protected $useSystemDefaultNotificationFromAddress;
    protected $useSystemDefaultVoicePortalLockoutFromAddress;

    public function __construct(
         $serviceProviderId = '',
         $deliveryFromAddress = null,
         $notificationFromAddress = null,
         $voicePortalLockoutFromAddress = null,
         $useSystemDefaultDeliveryFromAddress = null,
         $useSystemDefaultNotificationFromAddress = null,
         $useSystemDefaultVoicePortalLockoutFromAddress = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setDeliveryFromAddress($deliveryFromAddress);
        $this->setNotificationFromAddress($notificationFromAddress);
        $this->setVoicePortalLockoutFromAddress($voicePortalLockoutFromAddress);
        $this->setUseSystemDefaultDeliveryFromAddress($useSystemDefaultDeliveryFromAddress);
        $this->setUseSystemDefaultNotificationFromAddress($useSystemDefaultNotificationFromAddress);
        $this->setUseSystemDefaultVoicePortalLockoutFromAddress($useSystemDefaultVoicePortalLockoutFromAddress);
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
    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setElementName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return ($this->serviceProviderId)
            ? $this->serviceProviderId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDeliveryFromAddress($deliveryFromAddress = null)
    {
        $this->deliveryFromAddress = ($deliveryFromAddress InstanceOf EmailAddress)
             ? $deliveryFromAddress
             : new EmailAddress($deliveryFromAddress);
        $this->deliveryFromAddress->setElementName('deliveryFromAddress');
        return $this;
    }

    /**
     * 
     * @return EmailAddress $deliveryFromAddress
     */
    public function getDeliveryFromAddress()
    {
        return ($this->deliveryFromAddress)
            ? $this->deliveryFromAddress->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setNotificationFromAddress($notificationFromAddress = null)
    {
        $this->notificationFromAddress = ($notificationFromAddress InstanceOf EmailAddress)
             ? $notificationFromAddress
             : new EmailAddress($notificationFromAddress);
        $this->notificationFromAddress->setElementName('notificationFromAddress');
        return $this;
    }

    /**
     * 
     * @return EmailAddress $notificationFromAddress
     */
    public function getNotificationFromAddress()
    {
        return ($this->notificationFromAddress)
            ? $this->notificationFromAddress->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setVoicePortalLockoutFromAddress($voicePortalLockoutFromAddress = null)
    {
        $this->voicePortalLockoutFromAddress = ($voicePortalLockoutFromAddress InstanceOf EmailAddress)
             ? $voicePortalLockoutFromAddress
             : new EmailAddress($voicePortalLockoutFromAddress);
        $this->voicePortalLockoutFromAddress->setElementName('voicePortalLockoutFromAddress');
        return $this;
    }

    /**
     * 
     * @return EmailAddress $voicePortalLockoutFromAddress
     */
    public function getVoicePortalLockoutFromAddress()
    {
        return ($this->voicePortalLockoutFromAddress)
            ? $this->voicePortalLockoutFromAddress->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setUseSystemDefaultDeliveryFromAddress($useSystemDefaultDeliveryFromAddress = null)
    {
        $this->useSystemDefaultDeliveryFromAddress = new PrimitiveType($useSystemDefaultDeliveryFromAddress);
        $this->useSystemDefaultDeliveryFromAddress->setElementName('useSystemDefaultDeliveryFromAddress');
        return $this;
    }

    /**
     * 
     * @return boolean $useSystemDefaultDeliveryFromAddress
     */
    public function getUseSystemDefaultDeliveryFromAddress()
    {
        return ($this->useSystemDefaultDeliveryFromAddress)
            ? $this->useSystemDefaultDeliveryFromAddress->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setUseSystemDefaultNotificationFromAddress($useSystemDefaultNotificationFromAddress = null)
    {
        $this->useSystemDefaultNotificationFromAddress = new PrimitiveType($useSystemDefaultNotificationFromAddress);
        $this->useSystemDefaultNotificationFromAddress->setElementName('useSystemDefaultNotificationFromAddress');
        return $this;
    }

    /**
     * 
     * @return boolean $useSystemDefaultNotificationFromAddress
     */
    public function getUseSystemDefaultNotificationFromAddress()
    {
        return ($this->useSystemDefaultNotificationFromAddress)
            ? $this->useSystemDefaultNotificationFromAddress->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setUseSystemDefaultVoicePortalLockoutFromAddress($useSystemDefaultVoicePortalLockoutFromAddress = null)
    {
        $this->useSystemDefaultVoicePortalLockoutFromAddress = new PrimitiveType($useSystemDefaultVoicePortalLockoutFromAddress);
        $this->useSystemDefaultVoicePortalLockoutFromAddress->setElementName('useSystemDefaultVoicePortalLockoutFromAddress');
        return $this;
    }

    /**
     * 
     * @return boolean $useSystemDefaultVoicePortalLockoutFromAddress
     */
    public function getUseSystemDefaultVoicePortalLockoutFromAddress()
    {
        return ($this->useSystemDefaultVoicePortalLockoutFromAddress)
            ? $this->useSystemDefaultVoicePortalLockoutFromAddress->getElementValue()
            : null;
    }
}
