<x-app>
    <div class="container top-login">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-9 col-xl-9">
                <h1 class="text-primario mb-3">{{ $post->title }}</h1>
                <img src={{Storage::url($post->img)}} class='img-fluid' alt="prova">
                <h2 class="test-secondario mt-3">{{ $post->slug }}</h2>
                <p class="lead mt-4">{{ $post->body }}</p>


                <p class="lead mb-4">Questo post piace a <span class="text-primario font-weight-bold">{{$post->likesCount()}}</span> persone</p> 
                <a class="btn-like py-2 px-3" href="{{route('post.like', compact('post'))}}" ><i class="far fa-thumbs-up"></i> Like</a>
                @guest
                    
                @else
                        @if (Auth::user()->role == 'admin' || $post->user_id == Auth::user()->id)
        
                            <div class="d-flex justify-content-start">
                                <form action="{{ route('post.destroy', ['post' => $post]) }}" method="POST">
                                    @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn-delete p-3">Elimina post</button>
                                    </form>
                
                                    <a href="{{ route('post.edit', ['post' => $post]) }}" class="text-decoration-none p-3 btn-edit ml-3">Modifica post</a>
                            </div>
                            
                            
                        @endif
                        
                @endguest
            </div>
            
          <x-sidebar
          :post="$post"
          />

          
        </div>
  
    </div>

</x-app>
