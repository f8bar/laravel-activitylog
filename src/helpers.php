<?php

use Spatie\Activitylog\ActivityLogger;

if (!function_exists('activity')) {
    function activity(string $logName = null)
    {
        $defaultLogName = config('laravel-activitylog.default_log_name');
        $definitiveLogName = $defaultLogName;
        if (!is_null($logName)) {
            $definitiveLogName = $logName;
        }
        return app(ActivityLogger::class)->useLog($definitiveLogName);
    }
}
