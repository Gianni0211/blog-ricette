<x-app>
    <h1>edit</h1>
    <div class="container">
        <div class="row">
            <div class="col-12">
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
                        <textarea name="body" id="body" cols="30" rows="10">{{ $post->body }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-info">Modifica</button>
                </form>
            </div>
        </div>
    </div>

</x-app>
