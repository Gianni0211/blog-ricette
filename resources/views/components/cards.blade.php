@props ([

'post'
])



<div class="row mb-sm-5 mb-md-5 mt-sm-5 mt-md-5">
    <div class="col-md-7">
        <a href="#">
            <img class="img-fluid rounded mb-3 mb-md-0" src="{{ Storage::url($post->img) }}" alt="">
        </a>
    </div>
    <div class="col-md-5">
<<<<<<< HEAD
      <h3>{{$post->title}}</h3>
      <p>{{$post->body}}</p>
      <h4 class="mb-4 text-primario"><strong class="test-secondario">Autore: </strong>{{$post->user->name}}</h4>
      <a class="btn-custom p-3 mt-sm-3 mt-md-4 text-decoration-none" href="{{ route('post.show', ['post' => $post]) }}">Scopri di più</a>
=======
        <h3>{{ $post->title }}</h3>
        <p>{{ $post->body }}</p>
        <p class="small">{{ $post->user->name }}</p>
        <a class="btn-custom p-3 mt-sm-3 mt-md-3" href="{{ route('post.show', ['post' => $post]) }}">Scopri di più</a>
>>>>>>> ec08cee69cf22fd723e6e5837cc6d3b218d9a845
    </div>
</div>


<<<<<<< HEAD
    @if (Auth::user()->role == 'admin' || $post->user_id == Auth::user()->id)
    <form action="{{ route('post.destroy', ['post' => $post]) }}" method="POST">
      @csrf
        @method('DELETE')
        <button type="submit" class="btn-delete p-3">Elimina post</button>
    </form>

    <a href="{{ route('post.edit', ['post' => $post]) }}" class="text-decoration-none p-3 btn-edit ml-3">Modifica post</a>

    @endif
=======
@guest

   
@else
    @if (Auth::user()->role == 'admin' || $post->user_id == Auth::user()->id)
        <form action="{{ route('post.destroy', ['post' => $post]) }}" method="POST">@csrf
            @method('DELETE') <button type="submit">Elimina post</button></form>

        <a href="{{ route('post.edit', ['post' => $post]) }}">Modifica post</a>



    @endif
@endguest
>>>>>>> ec08cee69cf22fd723e6e5837cc6d3b218d9a845
