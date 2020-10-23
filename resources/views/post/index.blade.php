<x-app>


<div class="container">
 <div class="row">

@foreach ($posts as $post)

<div class="col-12">

 <h1>

  {{ $post->title }}
  {{ $post->id }}
 </h1>

</div>
    
@endforeach



 </div>
</div>




</x-app>