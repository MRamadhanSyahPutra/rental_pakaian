<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ProductsTable extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $search = '';

    public function render()
    {
        $Products = Product::where('name', 'like', '%' . $this->search . '%')
            ->orWhere('harga', 'like', '%' . $this->search . '%')
            ->orWhere('bio_deskripsi', 'like', '%' . $this->search . '%')
            ->orderBy('id', 'DESC')->paginate(2);
        return view('livewire.products-table', compact('Products'));
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

}