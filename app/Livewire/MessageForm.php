<?php

namespace App\Livewire;

use App\Http\Controllers\MessageController;
use Livewire\Component;

class MessageForm extends Component
{
    public $name;
    public $email;
    public $phone;
    public $subject;
    public $content;

    public function render()
    {
        return view('livewire.message-form');
    }

    public function submitForm() {
        $this->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'content' => 'required',
        ], [
            'name.required' => 'هذا الحقل مطلوب',
            'phone.required' => 'هذا الحقل مطلوب',
            'email.email' => 'هذا الحقل مطلوب بصيغة بريد الكتروني',
            'email.required' => 'هذا الحقل مطلوب',
            'subject.required' => 'هذا الحقل مطلوب',
            'content.required' => 'هذا الحقل مطلوب',
        ]);

        $massege = new MessageController();
        $massege->store([
            'name' => $this->name,
            'phone' => $this->phone,
            'email' => $this->email,
            'subject' => $this->subject,
            'content' => $this->content,
        ]);

        session()->flash('success', 'تم ارسال رسالتك بنجاح، شكرا لك');
    }
}
