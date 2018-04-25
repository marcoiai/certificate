<?php
namespace App;

use App\Entity;

use Illuminate\Database\Eloquent\Model;

class Client extends Entity
{
    protected $table = 'entities';

    protected $attributes = ['type' => 'C'];
}
