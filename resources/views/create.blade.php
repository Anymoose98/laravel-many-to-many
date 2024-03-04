@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{-- Titolo --}}
                    <div class="col-6">
                        <div class="form-group mt-5">
                            <label for="title" class="">Inserisci titolo</label>
                            <input type="text" name="title" class="form-control" placeholder="Inserisci il titolo" required>
                        </div>
                    </div>

                    {{-- IMG --}}
                    <div class="col-6">
                        <div class="form-group mt-3">
                            <label for="img" class="">Inserisci immagine di copertina</label>
                            <input type="file" name="img" class="form-control" required>
                        </div>
                    </div>

                    {{-- SLUG --}}
                    <div class="form-group mt-3">
                        <label for="slug" class="">Inserisci uno slug personale</label>
                        <input type="text" name="slug" class="form-control" placeholder="Inserisci uno slug personale" required>
                    </div>

                    {{-- Categoria --}}
                    <div class="form-group mt-3">
                        <label for="title">Seleziona categoria</label><br>
                        <select name="type_id" class="form-select">
                            <option value="">Seleziona categoria</option>
                            @foreach ($types as $type)
                                <option value="{{ $type->id }}">{{ $type->type }}</option>
                            @endforeach
                        </select>
                    </div>

                    {{-- tags --}}
                    <div class="form-group mt-3">
                        <label for="tag_id">Seleziona tags</label><br>
                        
                        @foreach ($tags as $tag)
                        <div class="mr-3 form-check-inline my-2">
                            <input type="checkbox" name="tags[]" value="{{ $tag->id }}">
                            <label for="tag_{{ $tag->id }}" class="form_check-label">{{ $tag->name }}</label>
                        </div>
                    @endforeach
                    
                        
                    </div>

                    {{-- Descrizione --}}
                    <div class="form-group mt-3">
                        <label for="title">Inserisci una descrizione</label><br>
                        <textarea required name="description" placeholder="Inserisci una descrizione" cols="85" rows="5" class="form-control"></textarea>
                    </div>

               
                    <button type="submit" class="btn btn-primary mt-3">Salva il contenuto</button>
                </form>
            </div>
        </div>
    </div>

@endsection