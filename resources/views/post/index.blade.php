<x-app>


<div class="container">
 <div class="row">

@foreach ($posts as $post)

<div class="col-12">

 <h1>

  {{ $post->title }}
  {{ $post->id }}
  @if (Auth::user()->role == 'admin' || $post->user_id == Auth::user()->id)
      <form action="{{route('post.destroy', ['post'=>$post])}}" method="POST">@csrf @method('DELETE') <button type="submit">Elimina post</button></form>
 
  @endif
 <a href="{{route('post.show', ['post'=>$post] )}}"> vedi post</a>
 </h1>

</div>
    
@endforeach



 </div>
</div>




</x-app>