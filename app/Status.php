<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
protected $table='status';

protected $fillable=[
'body'
];


public function user()
{
return $this->belongsTo('App\User','user_id');


} 
}
