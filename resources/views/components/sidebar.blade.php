@props ([
  'post'
])


<div class="col-12 col-md-12 col-lg-3 mt-5 border-sidebar bg-sidebar">

    <div class=" p-3 border-bottom text-center">
      
      <h3 class="mt-2 text-center mb-3">{{ $post->user->name }}</h3>
      <p class="lead"><span class="font-weight-bold">Utente dal:</span> {{ explode(' ',$post->user->created_at)[0] }} </p>
    </div>
    <div class="box2 mt-3 pb-4 mb-md-4">
      {{-- Aggiunge il titolo di tutti i post dell'utente che ha scritto il post --}}
      <h3 class="text-center my-4">I tuoi articoli</h3>
      <div class="text-left  border-bottom">
        @foreach ($post->user->posts as $post)
        
        <a href="{{ route('post.show', ['post' => $post]) }}" class="font-weight-bold test-secondario ml-2 mb-4 d-block text-decoration-none"><i class="fas fa-utensils fa-lg text-primario mr-2"></i> {{ $post->title }}</a>
            
        @endforeach 
      </div>
    </div>
    <div>
      <h3 class="text-center my-4">Etichette</h3>
      @foreach ($post->tags as $tag)
          <div class="d-flex justify-content-start align-items-center">
          <p class="test-secondario tag ml-2" ><i class="fas fa-tags text-primario mr-1 fa-flip-horizontal "></i> {{ $tag->name }}</p>
          </div>
      @endforeach
    </div>
</div>
