<x-layout>
    <div class="container-fluid p-5 bg-secondary-subtle text-center">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="display-1">Bentornato, Revisore {{Auth::user()->name}}</h1>
                <table class=" table table-stripped table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Titolo</th>
                            <th scope="col">Sottotitolo</th>
                            <th scope="col">Redattore</th>
                            <th scope="col">Azioni</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($articles as$article)
                            <tr>
                                <th scope="row">{{$article->id}}</th>
                                <td>{{$artcle->title}}</td>
                                <td>{{$article->subtitle}}</td>
                                <td>{{$article->user->name}}</td>
                                <td>
                                    @if (is_null($article->is_accepted))
                                        <a href="{{route('article.show', $article)}}" class="btn btn-secondary">Leggi l'articolo</a>
                                    @else
                                        <form href="{{route('revisor.undoArticle', $article)}}" method="POST">
                                        @csrf
                                        <button type="submit"
                                         class="btn btn-secoday">Riporta in revisione</button>
                                        </form>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Articoli da revisionare</h2>
                <x-articles-table :articles="$unrevisionedArticles"/>
                <table class=" table table-stripped table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Titolo</th>
                            <th scope="col">Sottotitolo</th>
                            <th scope="col">Redattore</th>
                            <th scope="col">Azioni</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($articles as$article)
                            <tr>
                                <th scope="row">{{$article->id}}</th>
                                <td>{{$artcle->title}}</td>
                                <td>{{$article->subtitle}}</td>
                                <td>{{$article->user->name}}</td>
                                <td>
                                    @if (is_null($article->is_accepted))
                                        <a href="{{route('article.show', $article)}}" class="btn btn-secondary">Leggi l'articolo</a>
                                    @else
                                    <form href="{{route('revisor.undoArticle', $article)}}" method="POST">
                                        @csrf
                                        <button type="submit"
                                         class="btn btn-secoday">Riporta in revisione</button>
                                        </form>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Articoli pubblicati</h2>
                <x-articles-table :articles="$acceptedArticles"/>
                <table class=" table table-stripped table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Titolo</th>
                            <th scope="col">Sottotitolo</th>
                            <th scope="col">Redattore</th>
                            <th scope="col">Azioni</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($articles as$article)
                            <tr>
                                <th scope="row">{{$article->id}}</th>
                                <td>{{$artcle->title}}</td>
                                <td>{{$article->subtitle}}</td>
                                <td>{{$article->user->name}}</td>
                                <td>
                                    @if (is_null($article->is_accepted))
                                        <a href="{{route('article.show', $article)}}" class="btn btn-secondary">Leggi l'articolo</a>
                                    @else
                                    <form href="{{route('revisor.undoArticle', $article)}}" method="POST">
                                        @csrf
                                        <button type="submit"
                                         class="btn btn-secoday">Riporta in revisione</button>
                                        </form>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Articoli respinti</h2>
                <x-articles-table :articles="$rejectedArticles"/>
                <table class=" table table-stripped table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Titolo</th>
                            <th scope="col">Sottotitolo</th>
                            <th scope="col">Redattore</th>
                            <th scope="col">Azioni</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($articles as$article)
                            <tr>
                                <th scope="row">{{$article->id}}</th>
                                <td>{{$artcle->title}}</td>
                                <td>{{$article->subtitle}}</td>
                                <td>{{$article->user->name}}</td>
                                <td>
                                    @if (is_null($article->is_accepted))
                                        <a href="{{route('article.show', $article)}}" class="btn btn-secondary">Leggi l'articolo</a>
                                    @else
                                    <form href="{{route('revisor.undoArticle', $article)}}" method="POST">
                                        @csrf
                                        <button type="submit"
                                         class="btn btn-secoday">Riporta in revisione</button>
                                        </form>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-layout>
