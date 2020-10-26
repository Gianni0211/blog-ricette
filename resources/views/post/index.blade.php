<x-app>


    <div class="container">
        <div class="row">


        @if (Session::has('message'))
                <div class="alert alert-success">{{ 
                session('message') }}</div>
        @endif


            @foreach ($posts as $post)

                <div class="col-12">

                    <h1>

                        {{ $post->title }}
                        {{ $post->id }}
                        <a href="{{ route('post.show', ['post' => $post]) }}"> vedi post</a>

                        
                        {{-- MOSTRA TASTI IN BASE A USER ROLE --}}
                        @if (Auth::user()->role == 'admin' || $post->user_id == Auth::user()->id)
                            <form action="{{ route('post.destroy', ['post' => $post]) }}" method="POST">@csrf
                                @method('DELETE') <button type="submit">Elimina post</button></form>

                            <a href="{{ route('post.edit', ['post' => $post]) }}">Modifica post</a>

                            

                        @endif
                    </h1>

                </div>

            @endforeach

            <div class="col-12">
            
                {{-- MOSTRA I LINK PER NAVIGARE TRA LE PAGINE --}}
                 {{$posts->links()}}
            </div>
            

        </div>
        
        
    </div>


    


</x-app>
