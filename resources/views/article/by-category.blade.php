<x-layout>

    <div class="container-fluid p-5 bg-secondary-subtle">
        <div class="row text-center">
            <div class="col-12">

                <h2 class="fs-1 bg-success">Tutto su : {{ $category->name }}</h2>

            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-evenly">
            @foreach ($articles as $article)
                <div class="col-12 col-md-3">

                    <div class="card" style="width: 18rem;">
                        <img src="{{ Storage::url($article->image) }}" class="card-img-top"
                            alt="Immagine dell'articolo: {{ $article->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $article->title }}</h5>
                            <p class="card-subtitle">{{ $article->subtitle }}</p>

                        </div>

                        <div class ="card-footer d-flex justify-content-between align-items-center">
                            <p>Redatto il {{ $article->created_at->format('d/m/Y') }} <br>
                                da {{ $article->user->name }}</p>

                            <a href="{{ route('article.show', $article) }}" class="btn btn-success">Leggi</a>

                        </div>

                    </div>

                </div>
            @endforeach

        </div>

</x-layout>
