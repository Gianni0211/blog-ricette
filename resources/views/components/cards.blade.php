@props ([

'post'
])



<div class="row mb-sm-5 mb-md-5 mt-sm-5 mt-md-5">
    <div class="col-md-7">
      <a href="#">
      <img class="img-fluid rounded mb-3 mb-md-0" src="{{Storage::url($post->img)}}" alt="">
      </a>
    </div>
    <div class="col-md-5">
      <h3>{{$post->title}}</h3>
      <p>{{$post->body}}</p>
      <h4 class="mb-4 text-primario"><strong class="test-secondario">Autore: </strong>{{$post->user->name}}</h4>
      <a class="btn-custom p-3 mt-sm-3 mt-md-4 text-decoration-none text-uppercase" href="{{ route('post.show', ['post' => $post]) }}">Scopri di più</a>
    </div>
</div>


    @if (Auth::user()->role == 'admin' || $post->user_id == Auth::user()->id)
    <form action="{{ route('post.destroy', ['post' => $post]) }}" method="POST">
      @csrf
        @method('DELETE')
        <button type="submit" class="btn-delete p-3">Elimina post</button>
    </form>

    <a href="{{ route('post.edit', ['post' => $post]) }}" class="text-decoration-none p-3 btn-edit ml-3">Modifica post</a>

    @endif
