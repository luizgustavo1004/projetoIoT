<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="card shadow-lg p-4 rounded-4 w-100" style="max-width: 600px;">
        <h3 class="text-center mb-4">
            <i class="text-success bi bi-tree-fill"></i>Criar Ambiente
        </h3>

        @if (session()->has('message'))
        <div class="alert alert-success d-flex align-items-center" role="alert">
            <i class="bi bi-check-circle-fill me-2"></i>
            <div>{{ session('message') }}</div>
        </div>
        @endif

        <form wire:submit.prevent="store">

            <div class="mb-3">
                <label class="form-label"><i class="text-warning bi bi-sun-fill"></i> Nome</label>
                <input type="text" wire:model="nome" class="form-control" required placeholder="Ex.: Temp">
                @error('nome') <span class="text-danger small">{{ $message }}</span> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label"><i class=" text-info bi bi-chat-left-dots-fill"></i>Descricao</label>
                <input type="text" wire:model="descricao" class="form-control" required placeholder="Ex.: Bom">
                @error('descricao') <span class="text-danger small">{{ $message }}</span> @enderror
            </div>

             <div class="mb-3">
                <label for="status" class="form-label"><i class="text-success bi bi-hand-thumbs-up-fill"></i>Status<i class="text-danger bi bi-hand-thumbs-down-fill"></i></label>
                <select class="form-select" id="status" wire:model.defer="status">
                    <option hidden>Selecione o status</option>
                    <option  value=1 >Ativo</option>
                    <option value=0>Inativo</option>
                </select>
            </div> 

        
             

            <button type="submit" class="btn btn-success w-100">
                <i class=" bi bi-plus-circle-fill"></i>Criar ambiente
            </button>

            

        </form>
    </div>
</div>