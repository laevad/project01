<?php

namespace App\Http\Livewire;

use App\Models\Languages;
use App\Models\TextContents;
use App\Models\Types;
use Livewire\Component;

class Index extends Component
{
    public $ll =0;

    public function render()
    {
        $textContent = TextContents::where('types_id', Types::MOVIES)->get();
        $lang = Languages::all();
        return view('livewire.index',[
            'textContents' =>$textContent,
            'languages' =>$lang,
        ]);
    }
    public function changeLang($val){
        $this->ll = $val;
    }
}
