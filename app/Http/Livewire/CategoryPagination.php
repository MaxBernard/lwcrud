<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Category;

class CategoryPagination extends Component
{
  public function render()
  {
    return view('livewire.category-pagination', [
      'categories' => Category::paginate(5),
    ]);
  }
}
