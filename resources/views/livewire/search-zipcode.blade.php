
<div>
    <x-notifications />
    <form class="p-8 bg-gray-200 flex flex-col w-1/2 mx-auto gap-4">
        <h1>Buscador de CEP</h1>
        <div class="flex flex-col w-1/2">
            <label for='zipcode'>CEP</label>
            <input class="border" id="zipcode" type="text" wire:model.lazy="data.zipcode" />
            @error("data.zipcode")
            <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <div class="flex flex-col w-1/2">
            <label for='street'>Logradouro</label>
            <input class="border" id="street" type="text" wire:model="data.street" />
            @error('data.street')
            <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <div class="flex flex-col w-1/2">
            <label for='neighborhood'>Bairro</label>
            <input class="border" id="neighborhood" type="text" wire:model="data.neighborhood" />
            @error('data.neighborhood')
            <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <div class="flex flex-col w-1/2">
            <label for='city'>Cidade</label>
            <input class="border" id="city" type="text" wire:model="data.city" />
            @error('data.city')
            <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <div class="flex flex-col w-1/2">
            <label for='state'>Estado</label>
            <input class="border" id="state" type="text" wire:model="data.state">
            @error('data.state')
            <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <div class="gap-x-4">
            <button class="px-4 py-2 bg-green-500 hover:bg-green-400 text-white rounded-md" wire:click="save">Salvar
                Endereço
            </button>
        </div>
    </form>
    <hr>
    <div class="my-8 w-[60%] container mx-auto bg-gray-200">
        <table class="table-auto">
            <thead>
                <tr>
                    <th class="px-4 py-2">CEP</th>
                    <th class="px-4 py-2">Rua</th>
                    <th class="px-4 py-2">Bairro</th>
                    <th class="px-4 py-2">Cidade</th>
                    <th class="px-4 py-2">Estado</th>
                    <th class="px-4 py-2">Acoes</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($addresses as $address)
                <tr>
                    <td class="px-4 py-2">{{ $address['zipcode'] }}</td>
                    <td class="px-4 py-2">{{ $address['street'] }}</td>
                    <td class="px-4 py-2">{{ $address['neighborhood'] }}</td>
                    <td class="px-4 py-2">{{ $address['city'] }}</td>
                    <td class="px-4 py-2">{{ $address['state'] }}</td>
                    <td class="border px-4 py-2 flex gap-x-4">
                        <button class="text-blue-500" wire:click="edit({{ $address['id'] }})"
                            type="button">Editar</button>
                        <button class="text-red-500" wire:click="remove({{ $address['id'] }})" x`
                            type="button">Deletar</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
