<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\core\Builder\Types\TableType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to GroupNetworkClassOfServiceGetAssignedListRequest.
 *         Contains a table of all Network Classes of Service assigned to
 *         the group. The column headings are: "Name", "Description" and "Default".
 */
class GroupNetworkClassOfServiceGetAssignedListResponse extends ComplexType implements ComplexInterface
{
    public    $name                       = 'GroupNetworkClassOfServiceGetAssignedListResponse';
    protected $networkClassOfServiceTable = null;

    /**
     * @return GroupNetworkClassOfServiceGetAssignedListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setNetworkClassOfServiceTable(TableType $networkClassOfServiceTable = null)
    {
        if (!$networkClassOfServiceTable) return $this;
        $this->networkClassOfServiceTable = $networkClassOfServiceTable;
        $this->networkClassOfServiceTable->setName('networkClassOfServiceTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getNetworkClassOfServiceTable()
    {
        return $this->networkClassOfServiceTable->getValue();
    }
}
