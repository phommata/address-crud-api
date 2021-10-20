<?php

namespace App\ModelFilters\CustomFilters;

use EloquentFilter\ModelFilter;

class CustomAddressFilter extends ModelFilter
{
    /**
    * Related Models that have ModelFilters as well as the method on the ModelFilter
    * As [relationMethod => [input_key1, input_key2]].
    *
    * @var array
    */
    public $relations = [];

    public function line($line)
    {
        return $this->where(function($q) use ($line)
        {
            return $q->where('line1', 'LIKE', "%$line%")
                ->orWhere('line2', 'LIKE', "%$line%");
        });
    }

    public function city($city)
    {
            return $this->where('city', 'LIKE', "%$city%");
    }

    public function state($state)
    {
            return $this->where('state', 'LIKE', "%$state%");
    }

    public function zip($zip)
    {
            return $this->where('zip', 'LIKE', "%$zip%");
    }
}
