<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Label extends Model
{
    protected $table = 'labels';

    public function product()
    {
        return $this->belongsTo('App\Prodouct');
    }
}
