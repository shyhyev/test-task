<?php

namespace App\Livewire;

use App\Models\News;
use Illuminate\Support\Str;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateNews extends Component
{
    use WithFileUploads;

    #[Validate("required")]
    public string $title;

    #[Validate("required")]
    public string $description;

    #[Validate('image')]
    public $image;

    #[Layout("components.layout")]
    public function render()
    {
        return view('dashboard.news');
    }

    public function save()
    {
        $this->validate();


        $fileName = Str::random(20) . '.' . $this->image->getClientOriginalExtension();

        $this->image->storeAs('', $fileName, 'public');

        News::create([
            "image"       => $fileName,
            "title"       => $this->title,
            "description" => $this->description,
            "user_id"     => auth()->id()
        ]);

        $this->image = null;
        $this->title = "";
        $this->description = "";

        session()->flash('status', 'Successfully created!');
    }
}
