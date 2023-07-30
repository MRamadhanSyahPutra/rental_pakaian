<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;

class CategoryTable extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $search = '';
    public function render()
    {
        $categories = Category::where('name', 'like', '%' . $this->search . '%')->orderBy('id', 'DESC')->paginate(2);
        return view('livewire.category-table', compact('categories'));
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }
}