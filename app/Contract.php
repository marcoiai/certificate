<?php
namespace App;

use App\Entity;

use Illuminate\Database\Eloquent\Model;

class Contract extends Entity
{
    protected $table = 'contracts';

    public function certificate()
    {
        return $this->belongsTo('App\Certificate');
    }
}
