<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerAddress extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'customer_addresses';
    protected $primaryKey = 'entity_id';
    protected $fillable = [
         'parent_id',
         'name',
         'city',
         'postcode',
         'district',
         'area',
         'phone',
         'email',
         'street',
    ];
}
