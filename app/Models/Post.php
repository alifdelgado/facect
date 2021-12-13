<?php

namespace App\Models;

use App\Scopes\ReverseScope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['body'];

    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope(new ReverseScope());
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
