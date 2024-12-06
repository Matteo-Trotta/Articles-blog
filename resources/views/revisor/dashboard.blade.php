<x-layout>

    
    <div class="container-fluid p-5 bg-secondary-subtle text-center">
        <div class="row justify-content-center">
            
            <div class="col-12">
                <h1 class="display-1">Bentornato, Revisore {{ Auth::user()->name }}</h1>
            </div>
            
        </div>
        
    </div>
    
    @if (session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif

    @if (session('message'))
        <div class="alert alert-warning fs-3 text-center shadow-md">{{ session('message') }}</div>
    @endif


    {{-- DA REVISIONARE --}}

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">

                <h2>Articoli da revisionare</h2>

                <x-articles-table :articles="$unrevisionedArticles" />

            </div>

        </div>

    </div>

    {{-- PUBBLICATI --}}

    <div class="container my-5">

        <div class="row justify-content-center">
            <div class="col-12">

                <h2>Articoli pubblicati</h2>
                <x-articles-table :articles="$acceptedArticles" />
            </div>

        </div>

    </div>

    {{-- RIFIUTATI --}}


    <div class="container y-5">

        <div class="row justify-content-center">
            <div class="col-12">

                <h2>Articoli respinti</h2>
                <x-articles-table :articles="$rejectedArticles" />

            </div>

        </div>

    </div>

</x-layout>
