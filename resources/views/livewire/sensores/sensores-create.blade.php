<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="card shadow-lg p-4 rounded-4 w-100" style="max-width: 600px;">
        <h3 class="text-success text-center mb-4">
            <i class="bi bi-pencil-square me-2"></i>Criar Sensor
        </h3>

        @if (session()->has('success'))
            <div class="alert alert-success d-flex align-items-center" role="alert">
                <i class="bi bi-check-circle-fill me-2"></i>
                <div>{{ session('success') }}</div>
            </div>
        @endif

        <form wire:submit.prevent="store">

            <div class="mb-3">
                <div class="mb-3">
                    <label for="ambiente_id" class="form-label">Ambiente ID</label>
                    <select class="form-select" id="ambiente_id" wire:model.defer="ambiente">
                        <option hidden>Selecione o Ambiente que o Sensor será instalado</option>
                        @foreach ($ambientes as $ambiente)
                            <option value={{ $ambiente->id }}> {{ $ambiente->nome }} </option>
                        @endforeach
                    </select>
                </div>

                <label class="form-label">Codigo</label>
                <input type="text" wire:model="codigo" class="form-control" required placeholder="Ex.: 1029">
                @error('codigo')
                    <span class="text-danger small">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Tipo</label>
                <input type="text" wire:model="tipo" class="form-control" required placeholder="Ex.: Temperatura">
                @error('tipo')
                    <span class="text-danger small">{{ $message }}</span>
                @enderror
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
                    <option value=1>Ativo</option>
                    <option value=0>Inativo</option>
                </select>
            </div>


            <button type="submit" class="btn btn-success w-100">
                <i class="bi bi-save2 me-2"></i>Criar ambiente
            </button>

        </form>
    </div>

      <div class="mt-3">

      </div>
</div>
