<?php

namespace App\Livewire;

use App\Models\contact;
use Livewire\Component;

class ContactUs extends Component
{
    public function render()
    {
        $contact = contact::where('id', 1)->get();
        dd($contact);
        return view('livewire.contact-us',[
            'contact' => $contact
        ]);
    }
}
