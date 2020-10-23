<x-app>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>{{ $post->title }}</h1>
                <h3>{{ $post->slug }}</h3>
                <p class="lead">{{ $post->body }}</p>
               
            </div>
            <div class="col-12">
                
                <img src={{Storage::url($post->img)}} class='img-fluid' alt="prova">
            </div>
        </div>
    </div>
</x-app>
