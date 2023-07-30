<?php

namespace App\Http\Livewire;

use App\Models\Peminjaman;
use Livewire\Component;
use Livewire\WithPagination;

class PeminjamanTable extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $search = '';

    public function render()
    {
        $peminjaman = Peminjaman::where('name', 'like', '%' . $this->search . '%')
            ->orWhere('tgl_sudah_dikembalikan', 'like', '%' . $this->search . '%')
            ->orWhere('tgl_kembali', 'like', '%' . $this->search . '%')
            ->orWhere('tgl_pinjam', 'like', '%' . $this->search . '%')
            ->orWhere('status', 'like', '%' . $this->search . '%')
            ->orWhere('no_wa', 'like', '%' . $this->search . '%')
            ->orWhere('ket', 'like', '%' . $this->search . '%')
            ->orderBy('id', 'DESC')->paginate(10);
        return view('livewire.Peminjaman-table', compact('peminjaman'));
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }
}