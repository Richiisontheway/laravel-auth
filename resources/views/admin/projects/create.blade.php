@extends('layouts.app')

@section('page-title', 'crea project')

@section('main-content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-center text-success">
                        Crea un nuovo Project
                    </h1>
                    <br>
                </div>
                {{-- action per indicare dove portare i dati e method post a causa della route --}}
                <form action="{{'admin.project.store'}}" method="POST">
                    {{-- token che serve a far accettare a laravel i dati del form --}}
                    @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Titolo <span class=" text-danger ">*</span></label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci il titolo" maxlength="64">
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">SRC</label>
                            <input type="text" class="form-control" id="image" name="image" placeholder="Inserisci il titolo" maxlength="1024">
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Descrizione <span class=" text-danger ">*</span></label>
                            <textarea class="form-control" name="description" id="description" rows="3" placeholder="Inserisci la descrizione..."></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="date" class="form-label">Data</label>
                            <input class="w-25 form-control"  type="date" class="form-control" id="date" name="date" placeholder="Inserisci il titolo" maxlength="64">
                        </div>
                </form>

            </div>
        </div>
    </div>
@endsection
