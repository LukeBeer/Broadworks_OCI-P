<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceHuntGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HuntAgentWeight;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request to modify the weighted call distribution of a Hunt Group instance.
 *         The response is either SuccessResponse or ErrorResponse.
 *         NOTE: Prior to release 14, any agents who were not in the list kept their
 *         existing weight setting. In release 14, any agents who are not in the list
 *         will have their weight set to 0.
 */
class GroupHuntGroupModifyInstanceWeightedCallDistributionRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceUserId,
             HuntAgentWeight $agentWeight=null
    ) {
        $this->serviceUserId = new UserId($serviceUserId);
        $this->agentWeight   = $agentWeight;
        $this->args          = func_get_args();
    }

    public function setServiceUserId($serviceUserId)
    {
        $serviceUserId and $this->serviceUserId = new UserId($serviceUserId);
    }

    public function getServiceUserId()
    {
        return (!$this->serviceUserId) ?: $this->serviceUserId->value();
    }

    public function setAgentWeight($agentWeight)
    {
        $agentWeight and $this->agentWeight = new HuntAgentWeight($agentWeight);
    }

    public function getAgentWeight()
    {
        return (!$this->agentWeight) ?: $this->agentWeight->value();
    }
}