<?php

namespace App\Libraries;

use Carbon\Carbon;

/**
 * DateUtil class.
 *
 * @package App\Libraries
 * @author Lorenzo Enriquez
 * @since 2023.06.14
 */
class DateUtil
{
    /**
     * Default date format used for SQL.
     * 
     * @var string
     */
    public const SQL_DATE_FORMAT = 'Y-m-d';

    /**
     * Default datetime format used for SQL.
     * 
     * @var string
     */
    public const SQL_DATETIME_FORMAT = 'Y-m-d H:i:s';

    /**
     * Returns the date for the timezone set in the config file: APP_TIMEZONE for the current date.
     * 
     * @param null|string
     * @return mixed
     */
    public static function getDateToday(?string $format = null)
    {
        $now = Carbon::now(config('app.timezone'));
        return is_string($format) ? $now->format($format) : $now;
    }

    /**
     * Returns a date object for the set on the parameter.
     * If no parameter is present the current date is used.
     * 
     * @param null|string
     * @return mixed
     */
    private static function getDate(?string $dateTimeValue = null): Carbon
    {
        return is_string($dateTimeValue) ? new Carbon($dateTimeValue) : DateUtil::getDateToday();
    }

    /**
     * Returns the date format: SQL_DATETIME_FORMAT for the start of the current date.
     * 
     * @param null|string
     * @return string
     */
    public static function getStartOfDay(?string $dateTimeValue = null): string
    {
        
        return DateUtil::getDate($dateTimeValue)->startOfDay()->format(DateUtil::SQL_DATETIME_FORMAT);
    }

    /**
     * Returns the date format: SQL_DATETIME_FORMAT for the end of the current date.
     * 
     * @param null|string
     * @return string
     */
    public static function getEndOfDay(?string $dateTimeValue = null): string
    {
        return DateUtil::getDate($dateTimeValue)->endOfDay()->format(DateUtil::SQL_DATETIME_FORMAT);
    }
}
