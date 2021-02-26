<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BugdemoOk extends Component
{
    public function getMessageProperty()
    {
        return 'Hello from computed properties!';
    }

    public function render()
    {
        return view('livewire.bugdemo-ok');
    }
}
