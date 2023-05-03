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
    <title>Pendaftaran Pendonor</title>
</head>
<body>
<div class="container contact-form">
        <a href="/" type="submit" class="back btn btn-dark float-right mr-10">Back</a>
        

        <form action="{{route('storeDonor')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <h3 class="text-dark">Masukkan Data Calon Pendonor</h3>
            <div class="row">
                <div class="col-md-10">
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" placeholder="Alifya" value="{{ Session::get('nama') }}"/>
                        @error('nama')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="">Berat Badan</label>
                        <input type="text" name="berat_badan" class="form-control @error('berat_badan') is-invalid @enderror" placeholder="**Kg" value="{{ Session::get('berat_badan') }}"/>
                        @error('berat_badan')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="">Umur</label>
                        <input type="text" name="umur" class="form-control @error('umur') is-invalid @enderror" placeholder="Umur" value="{{ Session::get('umur') }}"/>
                        @error('umur')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="alifya@example.com" value="{{ Session::get('email') }}"/>
                        @error('email')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Jenis Kelamin</label>
                        <select name="jenis_kelamin"  class="form-control @error('jenis_kelamin') is-invalid @enderror">
                            <option hidden>Jenis Kelamin</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>                
                        </select>
                            @error('jenis kelamin')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Nomor Handphone</label>
                        <input type="text" name="no_hp" class="form-control @error('no_hp') is-invalid @enderror" placeholder="0868********" value="{{ Session::get('no_hp') }}"/>
                        @error('no_hp')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="formFileMultiple" class="form-label">Kartu Identitas</label>
                        <input class="form-control @error('kartu_identitas') is-invalid @enderror" type="file" id="formFileMultiple" name="kartu_identitas">
                        @error('kartu_identitas')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="">Pilih Golongan Darah Anda</label>
                        <select name="gol_darah"  class="form-control @error('gol_darah') is-invalid @enderror">
                            <option hidden>Golongan Darah</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="AB">AB</option>
                            <option value="O">O</option>
                        </select>
                        @error('gol_darah')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button class="btn btn-dark fs-5">Daftar</button>
                </div>
            </div>
        </form>
</div>
@include('sweetalert::alert')
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>
<!------ Include the above in your HEAD tag ---------->


