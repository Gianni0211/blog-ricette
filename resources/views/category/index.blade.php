<x-app>
{{-- se nella categoria non ci sono post viene mostrato questo, sarebbe un tasto per aggiungere un post nella categoria --}}
@if (count($posts) === 0)
    <h1 class="mt-5">Non ci sono ancora post in questa categoria</h1>
@endif
@foreach ($posts as $post)

<h1 class="mt-5">{{  $post->title}}</h1>
    
@endforeach

</x-app>