<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceTrunkGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EnterpriseTrunkTrunkGroupKey;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to EnterpriseEnterpriseTrunkGetAvailableTrunkGroupListRequest.
 */
class EnterpriseEnterpriseTrunkGetAvailableTrunkGroupListResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $trunkGroup=null
    ) {
        $this->trunkGroup = $trunkGroup;
        $this->args       = func_get_args();
    }

    public function setTrunkGroup($trunkGroup)
    {
        $trunkGroup and $this->trunkGroup = new EnterpriseTrunkTrunkGroupKey($trunkGroup);
    }

    public function getTrunkGroup()
    {
        return (!$this->trunkGroup) ?: $this->trunkGroup->value();
    }
}