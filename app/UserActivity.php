<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserActivity extends Model
{
    protected $fillable = [
        'user_id', 'title',
    ];


    public function User()
    {
    	return $this->belongsTo(App\User::class);
    }

    public static function addActivity($user_id, $title)
    {
    	UserActivity::create([
    		'user_id' => $user_id,
    		'title' =>  $title,
    	]);
    }
}
