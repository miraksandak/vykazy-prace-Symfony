<?php

namespace App\Validator;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;
use App\Entity\WorkRecord;
use DateInterval;
use DateTime;

class TimeIntervalValidator extends ConstraintValidator
{
    public function validate($value, Constraint $constraint)
    {
        /* @var App\Validator\TimeInterval $constraint */

        if (null === $value || '' === $value) {
            return;
        }

        if (!$value instanceof WorkRecord) {
            $this->context->buildViolation("Not WorkRecord instance")->addViolation();
        }
        $duration = $value->getDuration();
        /** @var WorkRecord $value */
        if ($duration < 0) {
            $this->context->buildViolation("End Time you entered is not on the same day as the Start Time")
            ->atPath('endTimeOffset')
            ->addViolation();
        } elseif ($duration > 0) {
            /** @var DateTime $startTime */
            $startTime = $value->getStartTime();
            $endTime = (clone $startTime)->add(new DateInterval("PT".$duration."S"));
            if ($startTime->format('d-m-Y') !== $endTime->format('d-m-Y')) {
                $this->context->buildViolation("End Time you entered is not on the same day as the Start Time")
                ->atPath('endTimeOffset')
                ->addViolation();
            }
        }
    }
}
