<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Target extends Model
{
    const CREATED_AT = 'createdAt';
    const UPDATED_AT = 'updatedAt';
    protected $table = 'Targets';
    protected $primaryKey = 'id'; 
    public $incrementing = false;
    protected $keyType = 'string';
}
