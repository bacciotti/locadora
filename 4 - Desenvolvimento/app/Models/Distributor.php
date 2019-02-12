<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Distributor extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'distributors';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['corporate_name', 'cnpj', 'address', 'phone', 'contact_person'];

    public function item()
    {
        return $this->hasMany('App\Models\Item');
    }
    
}
