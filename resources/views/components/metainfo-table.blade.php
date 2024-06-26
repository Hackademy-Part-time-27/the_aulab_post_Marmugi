<hr>
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-12">
            <h2>Tutti i tags</h2>
            <x-metainfo-table :metaInfos="$tags" metaType="tags"/>
        </div>
    </div>
</div>

<table class="table table-striped table-hover">
    <thead class="table-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nome tag</th>
            <th scope="col">Q.tà articoli</th>
            <th scope="col">Aggiorna</th>
            <th scope="col">Canella</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($metaInfos as $metaInfo)
            <tr>
                <th scope="row">{{$metaInfo->id}}</th>
                <td>{{$metaInfo->name}}</td>
                <td>{{count($metaInfo->articles)}}</td>
                @if ($metaType == 'tags')
                    <td>
                        <form action="{{route('admin.editTag', ['tag => $metaInfo])}}" method="POST">
                            @csrf
                            @method('PUT')
                            <input type="text" value="{{$metaInfo->name}}" name="name" placeholder="Nuovo nome tag" class="form-control w-50 d-inline">
                            <button type="submit" class="btn btn-secondary">Modifica</button>
                        </form>
                    </td>
                    <td>
                        <form action="{{route('admin.deleteTag', ['tag' => $metaInfo])}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Elimina</button>
                        </form>
                    </td>
                @else
                    <td>
                        <form action="{{route('admin.editCategory', ['category' => $metaInfo])}}" method="POST">
                            @csrf
                            @method('PUT')
                            <input type="text" value="{{$metaInfo->name}}" name="name" placeholder="Nuovo nome categoria" class="form-control w-50 d-inline">
                            <button type="submit" class="btn btn-secondary">Aggiorna</button>
                        </form>
                    </td>
                    <td>
                        <form action="{{route('admin.deleteCategory', ['category' => $metaINfo])}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Elimina</button>
                        </form>
                    </td>
                @endif
            </tr>
        @endforeach
    </tbody>
</table>