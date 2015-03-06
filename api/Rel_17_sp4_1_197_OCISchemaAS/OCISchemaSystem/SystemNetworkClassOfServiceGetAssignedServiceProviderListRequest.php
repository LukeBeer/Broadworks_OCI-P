<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetworkClassOfServiceName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request a list of service providers that have a given Network Class
 *         of Service assigned.
 *         The response is either a
 *         SystemNetworkClassOfServiceGetAssignedServiceProviderListResponse or 
 *         ErrorResponse.
 */
class SystemNetworkClassOfServiceGetAssignedServiceProviderListRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $name
    ) {
        $this->name = new NetworkClassOfServiceName($name);
        $this->args = func_get_args();
    }

    public function setName($name)
    {
        $name and $this->name = new NetworkClassOfServiceName($name);
    }

    public function getName()
    {
        return (!$this->name) ?: $this->name->value();
    }
}