<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'bookings';

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
    protected $fillable = ['date', 'user_id'];

    public function user() {
        return $this->belongsTo(User::class);
    }
    public function leasings() {
        return $this->hasOne(Leasing::class);
    }
    public function movies() {
        return $this->belongsToMany(Movie::class);
    }
}
