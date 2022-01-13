<?php

namespace App\Http\Livewire\Profile;

use Livewire\Component;
use App\Models\User;
class App extends Component
{
    public function UpdateUser(User $user)
    {
        dd($user);
    }
    public function render()
    {
        return view('livewire.profile.app');
    }
}
