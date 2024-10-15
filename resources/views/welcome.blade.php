<x-layout>

    <div class="container">
        <div class="row text-center bg-warning p-2 my-2">
            <div class="col-12">
                <h1>Welcome</h1>
            </div>
        </div>
    </div>

    @if (session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif

    <div class="container-fluid">
        <div class="row justify-content-center align-items-center">

            @foreach ($articles as $article)
                <div class="col-12">

                    <div class="card m-5 p-2 text-center shadow-lg">

                        <img src="{{ Storage::url($article->image) }}" class="card-img-top" alt="Foto dell'articolo">
                        <div class="card-body">

                            <h5 class="card-title">{{ $article->title }}</h5>

                            <p class="card-text">{{ $article->subtitle }}</p>

                            <p class="small text-danger fw-bold">Categoria: <a href=""
                                    class="text-muted">{{ $article->category->name }}</a></p>

                            <a href="{{ route('article.show', $article->id) }}" class="btn btn-primary">Leggi</a>
                        </div>

                        <div class="card-footer text-body-secondary border-separate">
                            <p>Redatto il: {{ $article->created_at->format('d/m/Y') }} <br> da:
                                {{ $article->user->name }}</p>



                        </div>
                    </div>

                </div>
            @endforeach
        </div>
    </div>
</x-layout>
