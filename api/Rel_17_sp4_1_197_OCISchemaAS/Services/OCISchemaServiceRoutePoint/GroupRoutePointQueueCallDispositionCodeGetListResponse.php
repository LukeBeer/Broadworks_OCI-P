<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceRoutePoint; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\core:OCITable;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the GroupRoutePointQueueCallDispositionCodeGetListRequest.
 *         Contains a table with column headings: "Is Active", "Code", "Description" and "Level".
 *         Level column can be any of the values in the data type CallDispositionCodeLevel.
 */
class GroupRoutePointQueueCallDispositionCodeGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $dispositionCodesTable
    ) {
        $this->dispositionCodesTable = $dispositionCodesTable;
        $this->args                  = func_get_args();
    }

    public function setDispositionCodesTable($dispositionCodesTable)
    {
        $dispositionCodesTable and $this->dispositionCodesTable = new core:OCITable($dispositionCodesTable);
    }

    public function getDispositionCodesTable()
    {
        return (!$this->dispositionCodesTable) ?: $this->dispositionCodesTable->value();
    }
}