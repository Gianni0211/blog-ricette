<x-app>


    <div class="container">
        <div class="row">
        @if (Session::has('message'))
                <div class="alert alert-success">{{ 
                session('message') }}</div>
        @endif

        </div>
        
        
    </div>


    
  <!-- slider iniziale -->

  <header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active bg-slider ">
          <div class="carousel-caption d-md-block bg-secondario-transp">
            <h3 class="display-4">Titolo articolo 1</h3>
            <p class="lead">This is a description for the first slide.</p>
          </div>
        </div>
        <div class="carousel-item bg-slider"  >
          <div class="carousel-caption d-md-block bg-secondario-transp">
            <h3 class="display-4">Titolo articolo 2</h3>
            <p class="lead">This is a description for the second slide.</p>
          </div>
        </div>
  
        <div class="carousel-item bg-slider" >
          <div class="carousel-caption d-md-block bg-secondario-transp">
            <h3 class="display-4 ">Titolo articolo 3</h3>
            <p class="lead">This is a description for the third slide.</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </header>

  <!-- fine slider iniziale  -->

    <!-- articoli verticali -->

    <div class="container">
      <div class="row">
        <div class="col-12 col-md-12 col-lg-9 col-xl-9">

          <!-- Page Content -->
          <div class="container">

            @foreach ($posts as $post)

                <div class="row mb-sm-5 mb-md-5 mt-sm-5 mt-md-5">                  
                        <x-cards
                        :post='$post'
                        
                        />
                </div>

            @endforeach

              <!-- Pagination -->
              <div class="row pagination justify-content-center">
            
                {{-- MOSTRA I LINK PER NAVIGARE TRA LE PAGINE --}}
                 {{$posts->links()}}
              
                </div>

          </div>
            <!-- /.container -->


          </div>
          <div class="col-12 col-md-12 col-lg-3 mt-5 border-sidebar">

            <div class=" p-3 border-bottom text-center">
              <img src="Media/mica_cook.png" class="img-fluid mb-md-4" alt="">
              <h3 class="mt-2 text-center mb-3">Ultimo post caricato</h3>
              <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur fugiat corporis veritatis, quidem distinctio odio. </p>
            </div>
            <div class="box2 mt-3 border-bottom pb-4 mb-md-4">
<<<<<<< HEAD
              <h6 class="font-weight-bold text-primario h4 text-center mb-4">I migliori post</h6>
        
              <p>
                <i class="fas fa-utensils text-primario h4"></i> <a class="test-secondario" href="#!">Titolo ricetta 1</a>
              </p>
              <p>
                <i class="fas fa-hamburger text-primario h4"></i></i> <a class="test-secondario" href="#!">Titolo ricetta 2</a>
              </p>
              <p>
                <i class="fas fa-pizza-slice text-primario h4"></i></i> <a class="test-secondario" href="#!">Titolo ricetta 3</a>
              </p>
=======
              <h6 class="font-weight-bold text-primario h4 text-center mb-4">Ultime ricette</h6>
              
              @foreach ($lastPosts as $lastPost)
>>>>>>> 657bdfef9eb9d2690b99ab5bbbcfae1b79ee9136
              <p>
              <i class="fa fa-user text-primario h4"></i> <a class="test-secondario" href="{{route('post.show', $lastPost)}}">{{$lastPost->title}}</a>
              </p>
             
             
              @endforeach
            </div>
        
          </div>

         </div>
      </div>

      <!-- fine articoli verticali -->

      <!-- start label catogory -->
      {{-- <div class="container mt-5">
        <div class="row">
          <div class="col-12">
            <div class="bg-primario p-2 label-category w-md-50">
              <h3 class="text-white">I miei secondi piatti</h3>

            </div>
          </div>
        </div>
      </div> --}}
      <!-- and label category -->

      <!-- box 6 seconda categoria -->
      {{-- <div class="container mt-5"> --}}

        <!-- Page Heading -->


        {{-- <div class="row">
          <div class="col-lg-4 col-sm-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="https://picsum.photos/700/400" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#" class="text-primario">Titolo articolo 1</a>
                </h4>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="https://picsum.photos/700/400" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#" class="text-primario">Titolo articolo 2</a>
                  </h4>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="https://picsum.photos/700/400" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#" class="text-primario">Titolo articolo 3</a>
                  </h4>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="https://picsum.photos/700/400" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#" class="text-primario">Titolo articolo 4</a>
                  </h4>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="https://picsum.photos/700/400" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#" class="text-primario">Titolo articolo 5</a>
                  </h4>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="https://picsum.photos/700/400" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#" class="text-primario">Titolo articolo 6</a>
                  </h4>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                </div>
              </div>
            </div>
          </div>
          <!-- /.row -->

          <!-- Pagination -->
          <ul class="pagination justify-content-center">
            <li class="page-item">
              <a class="page-link text-primario" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
              </a>
            </li>
            <li class="page-item">
              <a class="page-link text-primario" href="#">1</a>
            </li>
            <li class="page-item">
              <a class="page-link text-primario" href="#">2</a>
            </li>
            <li class="page-item">
              <a class="page-link text-primario" href="#">3</a>
            </li>
            <li class="page-item">
              <a class="page-link text-primario" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Next</span>
              </a>
            </li>
          </ul>

        </div> --}}
        <!-- end box 6 secodna categoria -->


<x-gallery />

        

</x-app>
