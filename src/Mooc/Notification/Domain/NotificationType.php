<?php

declare(strict_types = 1);

namespace CodelyTv\Mooc\Notification\Domain;

use CodelyTv\Shared\Domain\ValueObject\Enum;
use InvalidArgumentException;

/**
 * @method static NotificationType videoCreated()
 */
final class NotificationType extends Enum
{
    public const VIDEO_CREATED = 'VideoCreated';

    protected function throwExceptionForInvalidValue($value)
    {
        throw new InvalidArgumentException(sprintf('The <%s> is not a valid notification type', $value));
    }
}
