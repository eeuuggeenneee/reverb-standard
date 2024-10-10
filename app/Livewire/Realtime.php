<?php

namespace App\Livewire;

use App\Events\ButtonClick;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\On;

class Realtime extends Component
{
    use LivewireAlert;

    public function realtimefunction(){
        $message = 'hello';
        event(new ButtonClick($message));
    }

    #[On('echo:my-channel,ButtonClick')]
    public function handlerealtimemessage(): void
    {
        $this->alert('success', 'Success is approaching!');
    }
    public function render()
    {
        return view('livewire.realtime');
    }
}
