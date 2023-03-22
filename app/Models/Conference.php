<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conference extends Model
{
    use HasFactory;    
    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'country',
        'date',
        'time',
        'longtitude',
        'latitude',
    ];
    public function users()
    {
        return $this->belongsToMany(User::class, 'user_conference', 'conference_id', 'user_id');
    }
    public function conferences()
	{
		return $this->hasMany(Conference::class);
	}
}
