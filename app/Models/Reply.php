<?php

namespace App\Models;
use App\Models\Favoritable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    use Favoritable;

    protected $guarded = [];
    /* Активная загрузка (eager loading)  */
    protected $with = ['owner', 'favorites'];

    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
