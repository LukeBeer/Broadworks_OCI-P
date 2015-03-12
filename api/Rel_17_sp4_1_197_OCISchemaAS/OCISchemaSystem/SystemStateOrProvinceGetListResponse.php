<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\core\Builder\Types\TableType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Contains a 2 column table with column headings 'Key' and 'Display Name' and a row
 *         for each state or province.
 */
class SystemStateOrProvinceGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name                 = 'SystemStateOrProvinceGetListResponse';
    protected $stateOrProvinceTable = null;

    /**
     * @return SystemStateOrProvinceGetListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setStateOrProvinceTable(TableType $stateOrProvinceTable = null)
    {
        if (!$stateOrProvinceTable) return $this;
        $this->stateOrProvinceTable = $stateOrProvinceTable;
        $this->stateOrProvinceTable->setName('stateOrProvinceTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getStateOrProvinceTable()
    {
        return $this->stateOrProvinceTable->getValue();
    }
}
