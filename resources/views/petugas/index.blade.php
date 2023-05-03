<!doctype html>
<html lang="en">
  <head>  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Petugas Page</title>
    <link rel="shortcut icon" href="{{ asset('assets/login-form/images/boold.png') }}" type="img/x-icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body class="bg-dark">
     <nav class="navbar navbar-expand-lg bg-danger">
          <div class="container">
               <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                         <li class="nav-item">
                              <a class="nav-link text-light fs-5" aria-current="page" href="#">Home</a>
                         </li>
                         <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle text-light fs-5" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                   Filter
                              </a>
                              <ul class="dropdown-menu">
                                   <li><a class="dropdown-item" href="{{-- route('filterDonor',['status'=>'diterima']) --}}">Di Terima</a></li>
                                   <li><a class="dropdown-item" href="{{-- route('filterDonor',['status'=>'ditolak']) --}}">Di Tolak</a></li>
                                   <li><a class="dropdown-item" href="#">All</a></li>
                              </ul>
                         </li>
                    </ul>
                    <form class="d-flex" role="search">
                         <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                         <button class="btn btn-outline-light btn-dark " type="submit">Search</button>
                    </form>
                    <a class="nav-link btn btn-dark text-light p-2 m-1" href="{{ route ('logout') }}">Logout</a>
               </div>
          </div>
     </nav>
     <div class="row my-1">
          <div class="col">
               <table class="table table-dark table-striped table-bordered border-danger text-center ">
                    <thead>
                         <tr>
                              <th scope="col" width="50">No</th>
                              <th scope="col" width="50">Nomor Pendonor</th>
                              <th scope="col">Nama</th>
                              <th scope="col">Email</th>
                              <th scope="col">Umur</th>
                              <th scope="col">Berat Badan</th>
                              <th scope="col">Jenis Kelamin</th>
                              <th scope="col">No. Handphone</th>
                              <th scope="col">Gol. Darah</th>
                              <th scope="col">Identitas</th>
                              <th scope="col">Status</th>
                              <th scope="col">Tanggal</th>
                              <th scope="col">Action</th>
                         </tr>
                    </thead>
                    <tbody>
                         <?php
                              $i = 1;     
                         ?>
                         @foreach($donors as $donor)
                         <tr>
                              <td>{{ $i++ }}</td>
                              <td>{{ $donor->id }}</td>
                              <td>{{ $donor->nama }}</td>
                              <td>{{ $donor->email }}</td>
                              <td>{{ $donor->umur }} Tahun</td>
                              <td>{{ $donor->bb }} Kg</td>
                              <td>{{ $donor->jk }}</td>
                              <td>{{ $donor->no_hp }}</td>
                              <td>{{ $donor->darah }}</td>
                              <td><a href="assets/image/{{ $donor->foto }}" target="_blank"><img src="assets/image/{{ $donor->foto }}" alt="{{ $donor->foto }}" width="200px" height="100px"></a></td>
                              @if($donor->response)                                                                                                                                                                                                                                                                                                                                           NULL)
                                   <td>{{ $donor->response->status }}</td>
                                   @if($donor->response->status == "diterima")
                                        <td>{{ date('d/m/Y', strtotime($donor->response->schedule)) }}</td>
                                   @else
                                        <td>-</td>
                                   @endif
                              @else
                                   <td>-</td>
                                   <td>-</td>     
                              @endif
                              
                              @if($donor->response)
                                   <td><a href="{{ route('editResponse', ['id' => $donor->id]) }}" class="btn btn-success">Change Response</a></td>   
                              @else
                                   <td><a href="{{ route('createResponse', ['id' => $donor->id]) }}" class="btn btn-success">Send Response</a></td>
                              @endif
                         </tr>
                         @endforeach
                    </tbody>
               </table>
          </div>
     </div>
     @include('sweetalert::alert')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>