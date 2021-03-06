<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\Builder\Types\TableType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to SystemRoutingGetTranslationListRequest. The column headings are "Routing Digits"
 *         and "Route".
 */
class SystemRoutingGetTranslationListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemRoutingGetTranslationListResponse';
    protected $routingTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemRoutingGetTranslationListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setRoutingTable(TableType $routingTable = null)
    {
        $this->routingTable = $routingTable;
        $this->routingTable->setElementName('routingTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getRoutingTable()
    {
        return $this->routingTable;
    }
}
