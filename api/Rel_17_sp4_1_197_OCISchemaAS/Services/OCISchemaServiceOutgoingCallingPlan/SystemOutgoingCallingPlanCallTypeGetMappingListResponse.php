<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan; 

use Broadworks_OCIP\core\Builder\Types\TableType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemOutgoingCallingPlanCallTypeGetMappingListRequest. The table columns are:
 *         "Country Code", "Digit Map" and "Call Type".
 */
class SystemOutgoingCallingPlanCallTypeGetMappingListResponse extends ComplexType implements ComplexInterface
{
    public    $name            = 'SystemOutgoingCallingPlanCallTypeGetMappingListResponse';
    protected $callTypeMapping = null;

    /**
     * @return SystemOutgoingCallingPlanCallTypeGetMappingListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setCallTypeMapping(TableType $callTypeMapping = null)
    {
        if (!$callTypeMapping) return $this;
        $this->callTypeMapping = $callTypeMapping;
        $this->callTypeMapping->setName('callTypeMapping');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getCallTypeMapping()
    {
        return $this->callTypeMapping->getValue();
    }
}
