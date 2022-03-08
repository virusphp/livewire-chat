<div>
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-header">
                        Group
                    </div>
                    <div class="card-body">
                        <div class="list-group list-group-flush">
                            @foreach ($groups as $item)
                                <div wire:click="selectGroup({{$item->id}})" role="button" class="list-group-item text-capitalize">{{ $item->nama }}</div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            @if ($group != NULL)
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header text-capitalize">{{ $group->nama }}</div>
                        <div class="card-body">
                            <div wire:poll.1s class="list-group list-group-flush mb-4 overflow-auto" style="max-height: 300px;display: flex; flex-direction:column-reverse">
                                @foreach ($chats as $item)
                                    <div class="list-group-itemn @if($item->user_id == $user->id) text-end @endif">
                                        <div>{{ $item->created_at }} {{ $item->user->name }} </div>
                                        <div>{{ $item->message }}</div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="d-flex">
                                <input wire:model="text_message" type="text" class="form-control me-3 @error('text_message') is-invalid @enderror" placeholder="Message...">
                                <button wire:click="send" class="btn btn-primary">Kirim</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
