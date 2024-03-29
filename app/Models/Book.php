<?php

namespace App\Models;


use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Book extends Model
{
    use HasFactory;
    use Sluggable;


    // Menambahakan data ke dalam tabel books (book_code, title, cover, slug)
    protected $fillable = [
        "book_code",
        "title",
        "cover",
        "slug"
    ];

    // Data pada slug diambil dari field nama pada tabel
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    // Fungsi untuk menambahkan data buku
    public function store(Request $request)
    {
        dd($request->all());
    }

    /**
     * The roles that belong to the Book
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class, 'book_category', 'book_id', 'category_id');
    }
}
