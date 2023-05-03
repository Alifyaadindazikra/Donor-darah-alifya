<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Page</title>
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
                                   <li><a class="dropdown-item" href="#">Di Terima</a></li>
                                   <li><a class="dropdown-item" href="#">Di Tolak</a></li>
                                   <li><a class="dropdown-item" href="#">All</a></li>
                              </ul>
                         </li>
                    </ul>
                    <form class="d-flex" role="search" action="{{ route('search') }}" method="GET">
                         @csrf
                         <input class="form-control me-2" type="text" placeholder="Search" aria-label="Search" name="search">
                         <button class="btn btn-outline-light btn-dark " type="submit">Search</button>
                    </form>
                    <a class="nav-link btn btn-dark text-light p-2 m-1" href="{{ route ('logout') }}">Logout</a>
               </div>
          </div>
     </nav>

     <div class="row container mx-auto my-2">
          <div class="col text-center m-2">
               <a href="{{ route('cetakPdf') }}" class="btn btn-info rounded-pill">Cetak PDF</a>
               <a href="{{ route('exportExcel') }}" class="btn btn-success rounded-pill">Cetak Excel</a>
          </div>
     </div>
     <div class="row my-1">
          <div class="col">
               <table class="table table-dark table-striped table-bordered border-danger text-center mx-auto">
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
                              {{-- <th scope="col">Action</th> --}}
                         </tr>
                    </thead>
                    <tbody>
                         @php
                             $i = 1; 
                         @endphp
                         @foreach($donors as $donor)
                         <tr>
                              <td>{{ $i++ }}</td>
                              <td>{{ $donor->id }}</td>
                              <td>{{ $donor->nama }}</td>
                              <td>{{ $donor->email }}</td>
                              <td>{{ $donor->umur }}</td>
                              <td>{{ $donor->bb }}</td>
                              <td>{{ $donor->jk }}</td>
                              {{-- @php
                                   $telp = substr_replace($donor->no_hp,"62",0,1 );
                              @endphp
                              @php
                                   if ($donor->response) {
                                        if ($donor->response->status == 'diterima') {
                                             $text = "Hallo" .$donor->nama. "pendaftaran donor anda kami terima, silahkan mengunjungi rumah sakit terdekat pada ".$donor->response['schedule'].;
                                        };
                                   }
                              @endphp

                              @php
                                   if ($donor->response) {
                                        if ($donor->response->status == 'ditolak') {
                                             $text = "Hallo " .$donor->nama. ", mohon maaf pendaftaran donor anda kami tolak"
                                        };
                                   }
                              @endphp --}}
                              <td>{{ $donor->no_hp }}</td>
                              <td>{{ $donor->darah }}</td>
                              <td><a href="assets/image/{{ $donor->foto }}" target="_blank"><img src="assets/image/{{ $donor->foto }}" alt="{{ $donor->foto }}" width="200px" height="100px"></a></td>
                              @if($donor->response == "")
                                   <td>-</td>   
                                   <td>-</td>   
                              @elseif($donor->response)
                                   <td>{{ $donor->response->status }}</td>
                                   <td>{{ date('d/m/Y', strtotime($donor->response->schedule)) }}</td>
                              @endif
                              {{-- <td><a href="{{ route('indexMessage', ['id' => $donor->id]) }}" class="btn btn-success">Send Message</a></td> --}}
                         </tr>
                         @endforeach
                    </tbody>
               </table>
          </div>
     </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    @include('sweetalert::alert')
</body>
</html>