<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/registrasi/daftar.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <style>
     li{
          list-style: none
     }
    </style>
    <title>Send Response</title>
</head>
<body>
<div class="container contact-form">
        <a href="{{ route('indexPetugas') }}" type="submit" class="back btn btn-dark float-right mr-10">Back</a>
        

        <form action="{{ route('storeResponse', ['id' => $donor->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <h3 class="text-dark">Send Response</h3>
               <div class="row">
                    <div class="col-md-10">
                         <h2>Data Pendonor</h2>
                         <div class="row">
                              <div class="col">
                                   <ul>
                                        <li>ID Pendonor: {{ $donor->id }}</li>
                                        <li>Nama: {{ $donor->nama }}</li>
                                        <li>Email: {{ $donor->email }}</li>
                                        <li>No. Handphone: {{ $donor->no_hp }}</li>
                                   </ul>
                              </div>
                              <div class="col">
                                   <ul>
                                        <li>Umur: {{ $donor->umur }} Tahun</li>
                                        <li>Jenis Kelamin: {{ $donor->jk }}</li>
                                        <li>Gol. Darah: {{ $donor->darah }}</li>
                                        <li>Berat Badan: {{ $donor->bb }}</li>
                                   </ul>
                              </div>
                         </div>
                    </div>
                    <div class="col-md-10 m-5">
                         <div class="form-group">
                              <label for="">Status</label>
                              <select name="status"  class="form-control @error('status') is-invalid @enderror">
                              <option hidden>Status</option>
                              <option value="ditolak">Di Tolak</option>
                              <option value="diterima">Di Terima</option>                
                              </select>
                              @error('status')
                                   <div class="text-danger">{{ $message }}</div>
                              @enderror
                         </div>
                         
                         <div class="form-group">
                         <label for="">Schedule</label>
                         <input type="date" name="schedule" class="form-control @error('schedule') is-invalid @enderror" placeholder="dd/mm/yyyy"/>
                         @error('schedule')
                              <div class="text-danger">{{ $message }}</div>
                         @enderror
                         </div>
                         
                         <button class="btn btn-dark fs-5">Daftar</button>
                    </div>
               </div>
        </form>
</div>
@include('sweetalert::alert')
  <script src="https://kit.fontawesome.com/2779d159af.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>

