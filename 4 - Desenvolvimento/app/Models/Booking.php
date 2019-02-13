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
    protected $fillable = ['date_time', 'user_id'];

    public function movies() {
        return $this->belongsToMany(Movie::class);
    }
    public function user() {
        return $this->belongsTo(User::class);
    }
    public function leasings() {
        return $this->belongsToMany(Leasing::class);
    }
}
