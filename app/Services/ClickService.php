<?php

namespace App\Services;

use App\Models\Click;
use App\Libraries\DateUtil;

/**
 * ClickService class.
 *
 * @package App\Services
 * @author Lorenzo Enriquez
 * @since 2023.06.14
 */
class ClickService
{
    /**
     * Returns count of clicks based on parameter.
     * 
     * @return int
     */
    public function getClickCount(?string $dateTimeValue = null): int
    {
        return Click::whereBetween(Click::KEY_CREATED_AT, [
            DateUtil::getStartOfDay($dateTimeValue),
            DateUtil::getEndOfDay($dateTimeValue)
        ])->get()->count();
    }

    /**
     * Saves a click count.
     * 
     * @return bool
     */
    public function addClick(): bool
    {
        return (new Click([
            Click::KEY_CREATED_AT => DateUtil::getDateToday(DateUtil::SQL_DATETIME_FORMAT)
        ]))->save();
    }
}
