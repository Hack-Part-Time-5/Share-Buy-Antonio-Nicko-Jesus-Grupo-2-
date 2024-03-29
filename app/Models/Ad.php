<?php

namespace App\Models;

use App\Models\User;
use App\Models\Image;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Scout\Searchable;
use Maize\Markable\Markable;
use Maize\Markable\Models\Favorite;



class Ad extends Model
{
    use Markable;
    use HasFactory, Searchable;

                
    protected $fillable = ['title', 'body', 'price'];
    use HasFactory;

    protected static $marks = [
        Favorite::class,
    ];

    public function category()
    {
        return $this->belongsTo(Category::class );
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function setAccepted($value)
	{
		$this->is_accepted = $value;
		$this->save();
		return true;
    }
    static public function ToBeRevisionedCount(){
        return Ad::where('is_accepted', null)->count();
    }
    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function toSearchableArray()
    {
        return [
            'title'=>$this->title,
            'body'=>$this->body,
        ];
    }
}
