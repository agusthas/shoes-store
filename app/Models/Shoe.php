<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shoe extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getStock($size_id)
    {
        return $this->sizes()->where('size_id', $size_id)->first()->stock->quantity;
    }

    public function sizes()
    {
        // example:
        // Get all stock related to a shoe:
        // @foreach($shoe->sizes as $size) $size->stock->quantity @endforeach
        return $this->belongsToMany(Size::class, 'stocks')
            ->withPivot('quantity')
            ->as('stock');
    }

    public function getAllStocks()
    {
        return $this->sizes()->get()->mapWithKeys(function ($item) {
            return [$item->id => $item->stock->quantity];
        })->all();
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function style()
    {
        return $this->belongsTo(Style::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }
}
