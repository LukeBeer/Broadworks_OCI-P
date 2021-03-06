<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing; 

use BroadworksOCIP\Builder\Types\SimpleType;
use BroadworksOCIP\Builder\Restrictions\Enumeration;


/**
 * Hold period for recorded conferences, in days.
 */
class InstantConferencingRecordedConferenceHoldPeriodDays extends SimpleType
{
    public $elementName = "InstantConferencingRecordedConferenceHoldPeriodDays";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new Enumeration([
            '1',
            '2',
            '3',
            '4',
            '5',
            '6',
            '7',
            '15',
            '30',
            '60'
        ]));
    }
}
