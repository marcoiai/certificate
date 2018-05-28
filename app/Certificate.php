<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    protected $table = 'certificates';

    //protected $with = ['certificates_locks'];

    /**
    * Get the phone record associated with the user.
    */
   public function agent()
   {
       //dd($this->hasOne('App\Client', 'agent_id', 'id'));
       return $this->hasOne('App\Client', 'agent_id', 'id');
   }

   /**
   * Get the phone record associated with the user.
   */
  public function client()
  {
      return $this->hasOne('App\Client', 'client_id', 'id');
  }
}
