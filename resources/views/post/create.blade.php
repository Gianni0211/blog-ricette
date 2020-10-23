<x-app>
    <h1>Create</h1>
  
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="{{ route('post.store')}}" method="POST"  enctype="multipart/form-data"
                    >
                        @csrf
                     
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" value="{{ old('title') }}" id="title" class="form-control"
                                placeholder="Modifica il titolo" aria-describedby="titleInput">
                        </div>
                        <div class="form-group">
                            <label for="slug">Sottotitolo</label>
                            <input type="text" name="slug" value="{{ old('slug')}}" id="slug" class="form-control"
                                placeholder="Inserisci sottotitolo" aria-describedby="slug">
                        </div>
                        <div class="form-group">
                            <label for="body">Corpo articolo</label>
                            <textarea name="body" id="body" cols="100" rows="10">{{ old('body')}}</textarea>
                        </div>
                        <div class="form-group">
                          <label for="img">Immagine</label>
                          <input type="file" class="form-control-file" name="img" id="img" placeholder="inserisci l'immagine" aria-describedby="file">
                          <small id="file" class="form-text text-muted">Inserisci una foto</small>
                        </div>
                        
                        <button type="submit" class="btn btn-info">Crea</button>
                    </form>
                </div>
            </div>
        </div>
    
 
</x-app>