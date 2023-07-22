<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Community extends Model
{
    use HasFactory;

    protected $fillable = [
        'community_name',
        'community_description',
    ];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function communityAdmin()
    {
        return $this->hasMany(CommunityAdmin::class);
    }


}
