<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AnswerConfirmationAnnouncementSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AnswerConfirmationTimeoutSeconds;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the ServiceProviderAnswerConfirmationGetRequest.
 *         Replaced By: ServiceProviderAnswerConfirmationGetResponse16
 */
class ServiceProviderAnswerConfirmationGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $announcementMessageSelection,
             $confirmationMessageAudioFileDescription=null,
             $confirmationTimoutSeconds
    ) {
        $this->announcementMessageSelection            = $announcementMessageSelection;
        $this->confirmationMessageAudioFileDescription = new FileDescription($confirmationMessageAudioFileDescription);
        $this->confirmationTimoutSeconds               = $confirmationTimoutSeconds;
        $this->args                                    = func_get_args();
    }

    public function setAnnouncementMessageSelection($announcementMessageSelection)
    {
        $announcementMessageSelection and $this->announcementMessageSelection = new AnswerConfirmationAnnouncementSelection($announcementMessageSelection);
    }

    public function getAnnouncementMessageSelection()
    {
        return (!$this->announcementMessageSelection) ?: $this->announcementMessageSelection->value();
    }

    public function setConfirmationMessageAudioFileDescription($confirmationMessageAudioFileDescription)
    {
        $confirmationMessageAudioFileDescription and $this->confirmationMessageAudioFileDescription = new FileDescription($confirmationMessageAudioFileDescription);
    }

    public function getConfirmationMessageAudioFileDescription()
    {
        return (!$this->confirmationMessageAudioFileDescription) ?: $this->confirmationMessageAudioFileDescription->value();
    }

    public function setConfirmationTimoutSeconds($confirmationTimoutSeconds)
    {
        $confirmationTimoutSeconds and $this->confirmationTimoutSeconds = new AnswerConfirmationTimeoutSeconds($confirmationTimoutSeconds);
    }

    public function getConfirmationTimoutSeconds()
    {
        return (!$this->confirmationTimoutSeconds) ?: $this->confirmationTimoutSeconds->value();
    }
}