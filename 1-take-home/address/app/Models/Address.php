<?php

namespace App\Models;

use App\ModelFilters\CustomFilters\CustomAddressFilter;
use EloquentFilter\Filterable;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use Filterable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'line1', 'line2', 'city', 'state', 'zip',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [

    ];

    public function modelFilter()
    {
        return $this->provideFilter(CustomAddressFilter::class);
    }

}
