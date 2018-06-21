<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;


class Post extends Model
{
    protected $fillable = ['title', 'body', 'user_id'];

    public function comments()
    {
        return $this->hasMany(comment::class);
    }

    public function addComment($body)
    {
        $this->comments()->create(['body'=>$body]);
    }

    public function user()  // to get name $post->user->name
    {
        return $this->belongsTo(User::class);
    }


    public function scopeYear($query, $year)
    {
        if (isset($year)) {
            $query->whereYear('created_at', $year);
        }
    }


    public function scopeMonth($query, $month)
    {
        if (isset($month)) {
            $query->whereMonth('created_at', Carbon::parse($month)->month);
        }
    }


    public static function archives()
    {

        return static::selectRaw('year(created_at) year, monthname(created_at) month, count(*) count')
            ->groupby('year', 'month')
            ->orderbyRaw('min(created_at) desc')
            ->get();

    }



// $post = DB::select('select * from posts where year(created_at) = 2017');

}
