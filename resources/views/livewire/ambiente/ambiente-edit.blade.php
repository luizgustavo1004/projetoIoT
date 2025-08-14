<div style="margin-top: 20px; margin-bottom: 20px"
    class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="card shadow-lg p-4 rounded-4 w-100" style="max-width: 600px;">
        <h3 class="text-primary text-center mb-4">
            <i class="bi bi-pencil-square me-2"></i>Editar Ambiente
        </h3>

      

            <form wire:submit.prevent="save">

                <div class="mb-3">
                    <label class="form-label">Nome</label>
                    <input type="text" wire:model="nome" class="form-control" required>
                   
                </div>

                <div class="mb-3">
                    <label class="form-label">Descricao</label>
                    <input type="text" wire:model="descricao" class="form-control" required>
                   
                </div>

                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
    
                    <select class="form-select" id="status" wire:model.defer="status">
                        <option hidden>Selecione o status</option>
                        <option value=1>True</option>
                        <option value=0>False</option>
                       
                    </select>
    
                </div>
               
                <button type="submit" class="btn btn-primary w-100 text-black">
                    <i class="bi bi-save2 me-2"></i>Salvar Alterações
                </button>

            </form>






     


    </div>
</div>