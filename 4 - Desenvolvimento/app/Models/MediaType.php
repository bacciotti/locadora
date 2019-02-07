<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MediaType extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'media_types';

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
    protected $fillable = ['name', 'price'];

    public function itens() {
        return $this->belongsTo(Itens::class);
    }
    
}
