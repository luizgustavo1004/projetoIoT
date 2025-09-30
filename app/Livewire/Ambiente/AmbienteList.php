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
        $ambiente = Ambiente::findOrFail($id);
        Ambiente::findOrFail($ambiente->id)->delete();
        session()->flash('error', 'Ambiente deletado com sucesso.');
    }

}
