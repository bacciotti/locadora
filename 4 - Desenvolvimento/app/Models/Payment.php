<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'payments';

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
    protected $fillable = ['type', 'date_time', 'value', 'leasing_id'];

    public function leasing()
    {
        return $this->belongsTo('App\Models\Leasing');
    }
    public function check_payment()
    {
        return $this->hasOne('App\Models\CheckPayment');
    }
    public function card_payment()
    {
        return $this->hasOne('App\Models\CardPayment');
    }
    
}
