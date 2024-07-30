<?php

namespace App\Enums;

enum StoreStatusEnum: string
{
    case ACTIVE = 'ACTIVE';
    case INACTIVE = 'INACTIVE';

    public static function getValues(): array
    {
        return [
            self::ACTIVE,
            self::INACTIVE,
        ];
    }

    public function getBadge(): string
    {
        return match ($this) {
            self::ACTIVE => 'success',
            self::INACTIVE => 'danger',
        };
    }
}
