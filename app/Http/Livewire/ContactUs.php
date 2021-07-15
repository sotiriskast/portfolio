<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Mail\TestEmail;
use Illuminate\Support\Facades\Mail;

class ContactUs extends Component
{
    public $name, $subject, $message, $email;


    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'subject' => 'required',
        'message' => 'required|min:6',
    ];

    public function submit()
    {
        $this->validate();

        // Execution doesn't reach here if validation fails.


        $data = ['message' => $this->message, 'name' => $this->name, 'subject' => $this->subject, 'email' => $this->email];

        Mail::to('soteris100@gmail.com')->send(new TestEmail($data));

        session()->flash('msg', 'Your Email has been send');

        $this->message = '';
        $this->name = '';
        $this->subject = '';
        $this->email = '';
    }

    public function render()
    {
        return view('livewire.contact-us');
    }
}
