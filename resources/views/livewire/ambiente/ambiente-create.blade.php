<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="card shadow-lg p-4 rounded-4 w-100" style="max-width: 600px;">
        <h3 class="text-success text-center mb-4">
            <i class="bi bi-pencil-square me-2"></i>Criar Ambiente
        </h3>

        @if (session()->has('success'))
        <div class="alert alert-success d-flex align-items-center" role="alert">
            <i class="bi bi-check-circle-fill me-2"></i>
            <div>{{ session('success') }}</div>
        </div>
        @endif

        <form wire:submit.prevent="store">

            <div class="mb-3">
                <label class="form-label">Nome</label>
                <input type="text" wire:model="nome" class="form-control" required placeholder="Ex.: Temp">
                @error('nome') <span class="text-danger small">{{ $message }}</span> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Descricao</label>
                <input type="text" wire:model="descricao" class="form-control" required placeholder="Ex.: Bom">
                @error('descricao') <span class="text-danger small">{{ $message }}</span> @enderror
            </div>

             <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select class="form-select" id="status" wire:model.defer="status">
                    <option hidden>Selecione o status</option>
                    <option value=1>True</option>
                    <option value=0>False</option>
                </select>
            </div> 

        
             

            <button type="submit" class="btn btn-success w-100">
                <i class="bi bi-save2 me-2"></i>Criar ambiente
            </button>

            

        </form>
    </div>
</div>