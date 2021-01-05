<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $primaryKey = 'entity_id';
    protected $fillable = [
         'name',
         'email',
         'password_hash',
         'phone',
         'is_active',
         'is_verified',
         'dob',
         'gender',
         'rp_token',
         'rp_token_created_at',
         'remember_token',
         'default_billing',
         'default_shipping',
         'provider_id',
         'provider',
    ];

    public function getAuthPassword() {
     return $this->password_hash;
    }

    public function addressBooks() {
        return $this->hasOne('App\CustomerAddress','parent_id','entity_id');
    }
}
