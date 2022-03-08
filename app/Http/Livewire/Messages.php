<?php

namespace App\Http\Livewire;

use App\Models\Chat;
use App\Models\Group;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Messages extends Component
{
    public $user;
    public $groups;
    public $group = NULL;
    public $text_message;

    public function mount()
    {
        $this->user = Auth::user();
        $this->groups = Group::get();
    }

    public function render()
    {
        $chats = NULL;
        if($this->group != NULL) {
            $chats = Chat::where('group_id', $this->group->id)->orderBy('created_at', 'desc')->get();
        }
        return view('livewire.messages', compact('chats'));
    }

    public function selectGroup($id)
    {
        $this->group = Group::find($id);
    }

    public function send() {
        $this->validate([
            'text_message' => 'required'
        ]);

        Chat::create([
            'group_id' => $this->group->id,
            'user_id' => $this->user->id,
            'message' => $this->text_message
        ]);

        $this->text_message = NULL;
    }
}
