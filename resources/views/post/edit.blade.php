<x-app>
    <div class="container top-login">
        <div class="row">
            <div class="col-12 ">
                <h1 class="text-primario mb-5">Modifica il tuo post</h1>
                <form action="{{ route('post.update', compact('post')) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" value="{{ $post->title }} "id="title" class="form-control"
                            placeholder="Modifica il titolo" aria-describedby="titleInput">
                    </div>
                    <div class="form-group">
                        <label for="slug">Sottotitolo</label>
                        <input type="text" name="slug" value="{{ $post->slug }} "id="slug" class="form-control"
                            placeholder="Inserisci sottotitolo" aria-describedby="slug">
                    </div>
                    <div class="form-group">
                        <label for="body">Corpo articolo</label>
                        <textarea name="body" id="body" class="form-control" rows="3">{{ $post->body }}</textarea>
                    </div>
                    {{-- <div class="form-group">
                        <label for="img">Modifica la tua immagine quì</label>
                        <input type="file" class="form-control-file" name="img" id="img" placeholder="inserisci l'immagine" aria-describedby="file">
                      </div> --}}

                    <button type="submit" class="btn-edit p-2 text-uppercase">Modifica articolo</button>
                </form>
            </div>
        </div>
    </div>

</x-app>
