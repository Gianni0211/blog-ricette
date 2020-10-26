<x-app>
    <div class="container top-login">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-9 col-xl-9">
                <img src={{Storage::url($post->img)}} class='img-fluid' alt="prova">
                <h1 class="text-primario mt-3">{{ $post->title }}</h1>
                <h2 class="test-secondario">{{ $post->slug }}</h2>
                <p class="lead mt-4">{{ $post->body }}</p>
                        @if (Auth::user()->role == 'admin' || $post->user_id == Auth::user()->id)
        
                            <form action="{{ route('post.destroy', ['post' => $post]) }}" method="POST">
                            @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-delete p-3">Elimina post</button>
                            </form>
        
                            <a href="{{ route('post.edit', ['post' => $post]) }}" class="text-decoration-none p-3 btn-edit">Modifica post</a>
                            
                        @endif
                 </div>
            
            <x-sidebar />
        </div>
  
    </div>

</x-app>
