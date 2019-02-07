<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Iten extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'itens';

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
    protected $fillable = ['date_acquisition', 'serial_number', 'media_type_id', 'movie_id', 'distributor_id'];

    public function media_type()
    {
        return $this->hasMany(MediaType::class);
    }
    public function movie()
    {
        return $this->hasMany(Movie::class);
    }
    public function distributor()
    {
        return $this->hasMany(Distributor::class);
    }
    
}
