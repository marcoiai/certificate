<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Packing extends Model
{
    protected $table = 'packings';

    public function certificate()
    {
        return $this->belongsTo('App\Certificate');
    }
}
