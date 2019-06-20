<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Models\Settings\Department;
use App\Image;

class Student extends Model
{
    public function department()
    {
    	return $this->belongsTo(Department::class);
    }

    public function images()
    {
    	return $this->morphMany(Image::class, 'imageable');
    }

    public function scopeSearch($query, $search){
    	return $query->where('name', 'LIKE', "%$search%")
	    	->orWhere('roll_no', 'LIKE', "%$search%")
	    	->orWhere('reg_no', 'LIKE', "%$search%");
    }
}
