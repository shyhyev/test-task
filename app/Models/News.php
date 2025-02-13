<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;

class News extends Model
{
    protected $table = "news";

    protected $fillable = [
        "title",
        "description",
        "image",
        "user_id"
    ];

    protected static function booted(): void
    {
        static::updated(function (News $news) {
            if ($news->wasChanged("image")) {
                Storage::disk("public")->delete($news->getOriginal("image"));
            }
        });
        static::deleted(function (News $news) {
            Storage::disk("public")->delete($news->getOriginal("image"));
        });
    }


    // Relations

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
