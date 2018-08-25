<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use app\User;
class User extends Authenticatable
{
use Notifiable;

/**
 * The attributes that are mass assignable.
 *
 * @var array
 */
protected $fillable =
[
'name', 
'email',
'password',
// 'first_name',
// 'last_name',
// 'location',
];

/**
 * The attributes that should be hidden for arrays.
 *
 * @var array
 */
protected $hidden = 
[
'password',
'remember_token',
];
public function getUserName()
{

if($this->name)
return "{$this->name}";
else 
return "entity";

}
/** Get Avatar Of the Users */

public function getUrl()
{
return "https://www.gravatar.com/avatar/{{md5($this->email)}}?d=mm&s=40";
}

/** Relation between Users And Statuses */
public function status()
{
/** Added */
return $this->hasMany('App\Status','user_id');
}

/** Createing The relation  */


public function friendsOfMine()
{

return $this->belongsToMany('App\User','friends','user_id','friend_id');
}

/** Creating The Relation Falexable */

public function friendsOf()
{

return $this->belongsToMany('App\User','friends','friend_id','user_id');
}


/** Function for Query
 */

public function friends()
{
return $this->friendsOfMine()->wherePivot('accapted',true)->get()
->merge($this->friendsOf()->wherePivot('accapted',true)->get());
}



/** FRIENDS REQUESTS PORTATION */


/**  Helper method returning where friend Request are not Accepted CODE 1*/
public function friendRequests()
{
return $this->friendsOfMine()->wherePivot('accapted',false)->get();
}

/**  helper method Cross Relation  CODE 2*/
public function friendRequestsPending()
{
return $this->friendsOf()->wherePivot('accapted',false)->get();
}

/** Actual method For Request that are  pending  CODE 1 */
public function hasfriendRequestsPending( User $user)
{
return (bool)$this->friendRequestsPending()->where('id',$user->id)->count();
}


/** Actual method For Request that are Revieved  CODE 2*/
public function hasfriendRequestsRecieved( User $user)
{
return (bool)$this->
friendRequests()->
where('id',$user->id)
->count();
}

/** NOT CONFORMED */
public function addFriend(User $user)
{

$this->
friendsOf()->
attatch($user->id);
}

/** Actual Adding Friend  */

public function acceptFriendRequest(User $user)
{

$this->
friendRequests()->
where('id',$user->id)->pivot->
update([ 'accapted'=>true]);
}



public function isFriendWith( User $user)
{
return (bool)$this->
friends()->
where('id',$user->id)->
count();

}




}
