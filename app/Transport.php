<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transport extends Model
{
    protected $guarded = [];

    public function User()
    {
    	return $this->belongsTo(User::class);
    }


    public static function checkstatus($id)
    {
    	switch ($id) {
            case 1:
                return 'Pending';
                break;
            case 2:
                return 'Active';
                break;
            case 3:
                return 'Rejected';
                break;
            
            default:
                return 'User';
                break;
        }
    }
}
