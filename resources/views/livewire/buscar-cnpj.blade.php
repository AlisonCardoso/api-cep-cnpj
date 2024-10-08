<div>
   
        <form class="p-8 bg-gray-200 flex flex-col w-1/2 mx-auto gap-4">


            <h1>Buscar CNPJ</h1>
            <div class="col-md-12">
              <label for="cnpj" :value="__('CNPJ') " >CNPJ</label>
              <input type="text" class="block mt-1 w-full" id="cnpj" wire:model.lazy="cnpj" placeholder="Insira o CNPJ (Apenas números)" />
              @error('cnpj')
                    <span class="mt-2 ">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-md-5">
              <label for="razao_social" class="form-label">Razão Social</label>
              <input type="text" class="form-control" id="razao_social" wire:model="razao_social">
              @error('razao_social')
                    <span class="badge bg-warning">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-md-5">
              <label for="nome_fantasia" class="form-label">Nome Fantasia</label>
              <input type="text" class="form-control" id="nome_fantasia" wire:model="nome_fantasia">
              @error('nome_fantasia')
                    <span class="badge bg-warning">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-md-2">
                <label for="descricao_situacao_cadastral" class="form-label">Situação</label>
                <input type="text" class="form-control" id="descricao_situacao_cadastral" wire:model="descricao_situacao_cadastral">
                @error('descricao_situacao_cadastral')
                    <span class="badge bg-warning">{{ $message }}</span>
                @enderror
              </div>
            <div class="col-12">
                <label for="cnae_fiscal_descricao" class="form-label">Descrição</label>
                <input type="text" class="form-control" id="cnae_fiscal_descricao" wire:model="cnae_fiscal_descricao">
                @error('cnae_fiscal_descricao')
                    <span class="badge bg-warning">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <button class="btn btn-sm btn-outline-success" type="button" wire:click="save" >Salvar Empresa</button>
            </div>
          </form>

          <br>

          <table class="table">
            <thead>
                <tr class="text-center table-dark">
                    <th scope="col">CNPJ</th>
                    <th scope="col">Razão Social</th>
                    <th scope="col">Nome Fantasia</th>
                    <th scope="col">Situação</th>
                    <th scope="col">Descrição</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($workshop as $workshop)
                <tr class="text-center table-light">
                    <td>{{ $workshop['cnpj'] }}</td>
                    <td>{{ $workshop['razao_social'] }}</td>
                    <td>{{ $workshop['nome_fantasia'] }}</td>
                    <td>{{ $workshop['descricao_situacao_cadastral'] }}</td>
                    <td>{{ $workshop['cnae_fiscal_descricao'] }}</td>
                    <td>
                        <button wire:click="edit({{ $workshop['id'] }})" type="button" class="btn btn-sm btn-outline-info m-1">Editar</button>
                        <button wire:click="remove({{ $workshop['id'] }})" type="button" class="btn btn-sm btn-outline-danger m-1">Excluir</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>
    </div>
</div>

