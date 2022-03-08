<?php

namespace App\Http\Livewire;

use App\Models\Artikel;
use Livewire\Component;

class Contents extends Component
{
    public $count = 4;

    public function render()
    {
        $artikels = Artikel::take($this->count)->get();
        return view('livewire.contents', compact('artikels'));
    }

    public function loadmore()
    {
        $this->count += 4;
        sleep(2);
    }
}
