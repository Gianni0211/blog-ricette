<x-app>

    <x-header 
    title="{{ucfirst($category->name)}}"
    />


    {{-- se nella categoria non ci sono post viene mostrato questo, sarebbe un tasto per aggiungere un post nella categoria --}}
    <div class="container">
        
        
        @if (count($posts) === 0)
            <h1 class="mt-5">Non ci sono ancora post in questa categoria</h1>
        @endif
        
        


    <div class="row">
    
    @foreach ($posts as $post)  
    <div class="col-lg-4 col-sm-6 mb-4">
            <div class="card">
        <a href="#"><img class="card-img-top" src="{{ Storage::url($post->img) }}" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="#" class="text-primario">{{$post->title}}</a>
                        </h4>
                        <p class="display-5">{{ $post->slug }}</p>
                        <p>{{ substr($post->body,0,300) }} [...]</p>
                        <p class="lead font-weight-bold mb-4"><strong>Autore:</strong> {{ $post->user->name }}</p>
                        {{-- <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra
                            euismod odio, gravida pellentesque urna varius vitae.</p> --}}
                        <a class="btn-custom p-3 mt-sm-3 my-md-3 text-decoration-none" href="{{ route('post.show', ['post' => $post]) }}">Scopri di più</a>
                    </div>
                </div>
            </div>
            @endforeach
</div>       
        
</x-app>