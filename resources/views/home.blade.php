@extends('layouts.app')

@section('content')
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/mdb.min.css">
    <link rel="stylesheet" href="css/style.css">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        You are logged in!
                    </div>
                    <main>
                        <div class="container">
                            <nav class="navbar navbar-expand-lg navbar-dark mdb-color lighten-3 mt-3 mb-5">
                                <span class="navbar-brand">Categories:</span>
                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                        data-target="#nextNav" aria-controls="nextNav" aria-expanded="false"
                                        aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="nextNav">
                                    <ul class="navbar-nav mr-auto">
                                        <li class="nav-item active">
                                            <a href="#" class="nav-link">All</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">Serials</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">TV shows</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">Trailers</a>
                                        </li>
                                    </ul>

                                    <form class="form-inline">
                                        <div class="md-form my-0">
                                            <input type="text" class="form-control mr-sm-2" placeholder="Search" aria-label="Search">
                                        </div>
                                    </form>
                                </div>
                            </nav>
                            <section class="text-center mb-4">
                                <div class="row wow fadeIn">
                                    @foreach($data as $film)
                                    <div class="col-lg-3 col-md-6 mb-4">
                                        <div class="card">

                                            <div class="view overlay">
                                                <img class="card-img-top" src="{{$film->img}}" alt="{{$film->filmName}}">
                                                <a href="">
                                                    <div class="mask rgba-white-slight"></div>
                                                </a>
                                            </div>

                                            <div class="card-body text-center">
                                                <a href="" class="grey-text">
                                                    <h5>{{$film->type}}</h5>
                                                </a>
                                                <h5>
                                                    <strong>
                                                        <a href="" class="dark-grey-text">{{$film->filmName}}</a>
                                                    </strong>
                                                </h5>
                                                <h5 class="font-weight-bold blue-text"><strong>{{$film->genre}}</strong></h5>
                                            </div>
                                        </div>
                                    </div>
                                        @endforeach


                                </div>
                            </section>

                            <nav class="d-flex justify-content-center wow fadeIn">
                                <ul class="pagination pg-blue">
                                    <li class="page-item">
                                        <a href="" class="page-link" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                    <li class="page-item active">
                                        <a href="" class="page-link" aria-label="Previous">
                                            <span aria-hidden="true">1</span>
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a href="" class="page-link" aria-label="Previous">
                                            <span aria-hidden="true">2</span>
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a href="" class="page-link" aria-label="Previous">
                                            <span aria-hidden="true">3</span>
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a href="" class="page-link" aria-label="Previous">
                                            <span aria-hidden="true">4</span>
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a href="" class="page-link" aria-label="Previous">
                                            <span aria-hidden="true">5</span>
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a href="" class="page-link" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </main>

                </div>
            </div>
        </div>
    </div>

@endsection
