<?php

namespace App\Http\Livewire;
use App\Models\Product;

use Livewire\Component;
use Livewire\WithPagination;

class Pagination extends Component
{
    use WithPagination;
    public function render()
    {
        $products = Product::orderBy("id")->paginate(8);
        return view('livewire.pagination', compact("products"));

    }
}

