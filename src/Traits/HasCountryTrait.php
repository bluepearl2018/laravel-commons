<?php

namespace Eutranet\Commons\Traits;

trait HasCountryTrait
{
    // save the date in UTC format in DB table
    public function setCreatedAtAttribute($date)
    {
        // $this->attributes['created_at'] = Carbon::parse($date);
    }
}
