<x-app>

    <div class="container top-login">
        <div class="row">
            <div class="col-12">


                <h1 class="text-primario mb-4">Crea un nuovo articolo</h1>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" value="{{ old('title') }}" id="title" class="form-control"
                            placeholder="Modifica il titolo" aria-describedby="titleInput">
                    </div>
                    <div class="form-group">
                        <label for="slug">Sottotitolo</label>
                        <input type="text" name="slug" value="{{ old('slug') }}" id="slug" class="form-control"
                            placeholder="Inserisci sottotitolo" aria-describedby="slug">
                    </div>
                    <div class="form-group">
                        <label for="body">Corpo articolo</label>
                        <textarea name="body" id="body" class="form-control" rows="3">{{ old('body') }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="img">Carica la tua immagine quì</label>
                        <input type="file" class="form-control-file" name="img" id="img"
                            placeholder="inserisci l'immagine" aria-describedby="file">
                    </div>

                    <button type="submit" class="btn-custom p-3 text-uppercase">Crea nuovo articolo</button>
                </form>
            </div>
        </div>
    </div>
    </div>


    <<<<<<< HEAD </x-app>

        =======
</x-app>
>>>>>>> e66e3d2d1976cfa9bfd25d3963cad8ddba91c761
