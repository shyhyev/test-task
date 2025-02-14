<?php

namespace App\Livewire;

use App\Models\News;
use Livewire\Component;
use Livewire\WithPagination;

class NewsList extends Component
{
    use WithPagination;

    public function render()
    {
        $news = News::select(["id", "title", "image", "created_at"])->latest()->paginate(4);

        return view('components.news-list', [
            'news' => $news
        ]);
    }
}
