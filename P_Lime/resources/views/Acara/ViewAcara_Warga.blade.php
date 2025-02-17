

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Responsive Admin Dashboard Template">
        <meta name="keywords" content="admin,dashboard">
        <meta name="author" content="stacks">
        <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        
        <!-- Title -->
        <title>Acara View</title>

        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="{{ asset('lime/theme/assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{ asset('lime/theme/assets/plugins/font-awesome/css/all.min.css')}}" rel="stylesheet">
      
        <!-- Theme Styles -->
        <link href="{{ asset('lime/theme/assets/css/lime.min.css')}}" rel="stylesheet">
        <link href="{{ asset('lime/theme/assets/css/custom.css')}}" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        
        @include('layouts.sidebar')
        
        
        
        @include('layouts.header')

        <div class="lime-container">
            <div class="lime-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="page-title">
                                <nav aria-label="breadcrumb">
                                  <ol class="breadcrumb breadcrumb-separator-1">
                                    <li class="breadcrumb-item"><a href="#">Acara</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">View</li>
                                  </ol>
                                </nav>
                                <h3>View Acara</h3>
                                
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl">
                            <div class="container">
                                @php $i = 0; @endphp
                                @foreach($data as $key => $d)
                                    @if($i % 3 == 0)
                                        <div class="row row-cols-3">
                                    @endif
                                        <div class="col">
                                            <div class="card">
                                                <img src="{{ asset('storage/photo-acara/'.$d->image) }}" class="card-img-top" alt="Placeholder" style="width: 100%; height: 200px; object-fit: cover;">
                                                <div class="card-body">
                                                    <h5 class="card-title">{{ $d->judul }}</h5>
                                                    <p class="card-text">{{ $d->deskripsi }}</p>
                                                    <a href="#" class="badge badge-primary" data-toggle="modal" data-target="#Read_More_{{ $key }}">Read More</a>
                                                    <div class="text-right">
                                                        <span class="badge badge-pill badge-info">{{ $d->tipe_acara }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @if($i % 3 == 2 || $loop->last)
                                        </div>
                                    @endif
                                    @php $i++; @endphp
                                    @include('Acara.modal')
                                @endforeach
                            </div>
                            <a href="" class="btn btn-primary">Detail</a>
                        </div>
                    </div>

                    
            <div class="lime-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <span class="footer-text"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
        <!-- Javascripts -->
        <script src="{{ asset('lime/theme/assets/plugins/jquery/jquery-3.1.0.min.js')}}"></script>
        <script src="{{ asset('lime/theme/assets/plugins/bootstrap/popper.min.js')}}"></script>
        <script src="{{ asset('lime/theme/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{ asset('lime/theme/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
        <script src="{{ asset('lime/theme/assets/js/lime.min.js')}}"></script>
    </body>
</html>