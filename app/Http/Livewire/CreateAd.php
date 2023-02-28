<?php

namespace App\Http\Livewire;

use App\Models\Ad;
use Livewire\Component;


class CreateAd extends Component
{

    public $title;
    public $body;
    public $price;



    protected $rules = [
        'title'=>'requires|min:4',
        'body'=>'required|min:8',
        'price'=>'required|numeric'
    ];
    protected $messages = [
        'requires'=>'Field :atrtibute is required, please fill it',
        'min'=>'Field :attribute should be longer than :min',
        'numeric'=>'Field :attribute must be a number'
    ];
    public function store()
    {
        Ad::create([
            'title'=>$this->title,
            'body'=>$this->body,
            'price'=>$this->price
        ]);

        session()->flash('message', 'Ad created successfully');

        $this->cleanForm();

    }

    public function update($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function cleanForm()
    {
        $this->title = "";
        $this->body = "";
        $this->price = "";
    }
    public function render()
    {
        return view('livewire.create-ad');
    }
}