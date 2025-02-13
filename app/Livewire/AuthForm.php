<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Livewire\Component;

class AuthForm extends Component
{
    public string $name, $password, $password_confirmation;

    public function render()
    {
        return view('livewire.auth-form');
    }

    public function register()
    {
        $this->validate([
            "name"     => "required",
            "password" => "required|confirmed",
        ]);

        $user = User::create([
            'name'     => $this->name,
            'password' => $this->password,
        ]);

        Auth::login($user);

        return redirect()->to('/dashboard');
    }

    /**
     * @throws ValidationException
     */
    public function login()
    {
        $this->validate([
            "name"     => "required",
            "password" => "required"
        ]);

        if (Auth::attempt(['name' => $this->name, 'password' => $this->password])) {
            return redirect()->to('/dashboard');
        }

        throw ValidationException::withMessages([
            'name' => [trans('auth.failed')],
        ]);
    }
}
