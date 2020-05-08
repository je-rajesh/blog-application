<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : 'images/e55310ee8b72f5bd4d13606bd1cf308b.jpg';

        return '/storage/' . $imagePath;
    }

    public function user()
    {
        return $this->thisBelongsTo(User::class);
    }
}
