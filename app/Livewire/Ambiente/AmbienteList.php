<?php

namespace App\Livewire\Ambiente;

use App\Models\Ambiente;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class AmbienteList extends Component
{

    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    
    public $search = '';
    public $perPage = 10;

    protected $queryString = [
        'search' => ['except' => ''],
        'perPage' => ['except' => 10],
    ];
    
    public function render()
    {
        $ambientes = Ambiente::where('nome', 'like', "%{$this->search}%")
        ->orWhere('nome', 'like', "%{$this->search}%")
        ->paginate($this->perPage);

        return view('livewire.ambiente.ambiente-list', compact('ambientes'));
    }

    public function delete($id)
    {
        if(auth()->check() && auth()->ambientes()->id){
        $ambientes = Ambiente::findOrFail($id);
        User::findOrFail($ambientes->id)->delete();
        session()->flash('success', 'Ambiente deletado com sucesso.');
    }
}
    
}
