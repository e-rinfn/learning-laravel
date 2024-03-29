<?php

namespace App\Models;

// Import dari beberapa class
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

// Model Category
class Category extends Model
{
    use HasFactory;
    use Sluggable;
    use SoftDeletes;


    // Menambahkan data ke dalam tabel categories name dan slug pada tabel
    protected $fillable = [
        'name',
        'slug'
    ];

    // Data pada slug diambil dari field nama pada tabel
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}
