<?php

namespace App\Livewire\Category;

use App\Models\Category;
use Livewire\Component;

class Index extends Component
{
    
    public function destroy(Category $category)
    {
        $category->delete();
        // session()->flash('success', 'Prodotto cancellato con successo');
    }
    public function render()
    {
        $categories=Category::all();
        return view('livewire.category.index',compact('categories'));
    }

}
