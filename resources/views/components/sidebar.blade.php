@props ([
  'post'
])


<div class="col-12 col-md-12 col-lg-3 mt-5 border-sidebar">

    <div class=" p-3 border-bottom text-center">
      <img src="Media/mica_cook.png" class="img-fluid mb-md-4" alt="">
      <h3 class="mt-2 text-center mb-3">{{ $post->user->name }}</h3>
      <p class="lead">{{ $post->slug }} </p>
    </div>
    <div class="box2 mt-3 border-bottom pb-4 mb-md-4">
    {{-- Aggiunge il titolo di tutti i post dell'utente che ha scritto il post --}}
      @foreach ($post->user->posts as $post)
      <a href="{{ route('post.show', ['post' => $post]) }}" class="font-weight-bold text-primario h4 text-center mb-4">{{ $post->title }}</a>
          
      @endforeach  
    

      <p>
        <i class="fas fa-utensils text-primario h4"></i> <a class="test-secondario" href="#!">tag</a>
      </p>
      <p>
        <i class="fas fa-hamburger text-primario h4"></i></i> <a class="test-secondario" href="#!">tag</a>
      </p>
      <p>
        <i class="fas fa-pizza-slice text-primario h4"></i></i> <a class="test-secondario" href="#!">tag</a>
      </p>
      <p>
        <i class="fas fa-hotdog text-primario h4"></i> <a class="test-secondario" href="#!">tag</a>
      </p>
    </div>

  </div>
