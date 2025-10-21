<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class Form extends Component
{
    use WithFileUploads;
    public $name, $email, $mobile, $photo;

    public function render()
    {
        return view('livewire.form');
    }

    public function submitForm()
    {
        $this->validate([
            'name'   => 'required|string|max:255',
            'email'  => 'required|email|max:255',
            'mobile' => 'required|string|max:15',
            'photo'  => 'required|image', // 1MB Max
        ],[
            'photo.required' => 'Ye photo to apun ko chahiye bhai, warna nahi hoga 😏!',
        ]);

        dd('Form submitted successfully with data: ', [
            'name' => $this->name,
            'email' => $this->email,
            'mobile' => $this->mobile,
            'photo' => $this->photo,
        ]);
    }
}
