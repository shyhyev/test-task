<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;

class ChangePassword extends Component
{
    #[Validate("required|confirmed")]
    public string $password;
    public string $password_confirmation;

    #[Layout('components.layout')]
    public function render()
    {
        return view('dashboard.change-password');
    }

    public function save()
    {
        $this->validate();

        auth()->user()->update([
            "password" => $this->password
        ]);

        session()->flash('status', 'Password successfully changed.');
    }
}
