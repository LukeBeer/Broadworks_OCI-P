<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request to get the list of Network Server Sync system parameters.
 *         The response is either SystemNetworkServerSyncParametersGetResponse16 or ErrorResponse.
 *         Replaced By: SystemNetworkServerSyncParametersGetRequest17sp4
 */
class SystemNetworkServerSyncParametersGetRequest16 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(    ) {
        $this->args= func_get_args();
    }
}