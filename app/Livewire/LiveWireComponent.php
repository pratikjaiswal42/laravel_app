<?php

namespace App\Livewire;

use Livewire\Component;

class LiveWireComponent extends Component
{
    public $counter = 1;
    public $test =1;

    public function render()
    {
        return view('livewire.live-wire-component');
    }

    public function increment()
    {
        $this->counter++;
    }

    public function decrement()
    {
        $this->counter--;
    }

    public $page = null;

    public function page1(){
        $this->page = 'page1';
    }

    public function page2(){
        $this->page = 'page2';
    }
}
