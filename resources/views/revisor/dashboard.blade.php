<x-layout>
    <div class="container-fluid p-5 bg-secondary-subtle text-center">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="display-1">Bentornato, Revisore {{Auth::user()->name}}</h1>
            </div>
        </div>
    </div>
    <table class="table table-stripped table-hover">
        <thead class="table dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Titolo</th>
                <th scope="col">Sottotitolo</th>
                <th scope="col">Categoria</th>
                <th scope="col">Tags</th>
                <th scope="col">Inserito</th>
                <th scope="col">Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $article)
                <tr>
                    <th scope="row">{{$article->id}}</th>
                    <td>{{$article->title}}</td>
                    <td>{{$article->subtitle}}</td>
                    <td>{{$article->category->name ?? 'Nessuna categoria'}}</td>
                    <td>
                        @foreach ($article->tags as $tag)
                            #{{ $tag->name }}
                        @endforeach
                    </td>
                    <td>
                        <a href="{{route('article.show', $article)}}" class="btn btn-secondary">Leggi</a>
                        <a href="#" class="btn btn-warning text-white">Modifica</a>
                        <form action="#" method="#" class="d-inline">
                            <button type="submit" class="btn btn-danger">Elimina</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Articoli in attesa di revisione</h2>
                <x-writer-articles-table :article="$unrevisionedArticles"/>
            </div>
       </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Articoli pubblicati</h2>
                <x-writer-articles-table :article="$acceptedArticles"/>
            </div>
       </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Articoli respinti</h2>
                <x-writer-articles-table :article="$rejectedArticles"/>
            </div>
       </div>
    </div>
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message')}}
        </div>
    @endif
</x-layout>