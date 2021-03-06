<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
	protected $guarded = [];

	public function ProfileImage()
	{
		$imagePath =($this->image) ? $this->image: 'profile/l0QgG8F6LwUrGCQ3op1kENkwHXnyioIxCa9tdQPz.webp';
		return '/storage/' . $imagePath;
	}
	
	public function followers()
    {
        return $this->belongsToMany(User::class);
    }


    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
