<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <div class="container">
        
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
            
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="/addmore">Insert</a>
                            </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/">Data</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                
                <form method="POST" id="form" action="{{lists/{{$f->id}}}">
                    @method('patch')
                    @csrf
                <h1 class="mt-3" style="text-align: center">Insert</h1>
                <div id="insert">
                <div id="card1" class="row my-4">
                    <div class="col-lg-3"></div>
                    <div  class="card col-lg-6">
                                    <div class="card-body">
                                                    <div class="form-group">
                                                      <label for="nama">Nama</label>
                                                      <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan Nama" name="nama[]"value="{{old('nama')}}">
                                                      @error('nama') <div class="invalid-feedback">{{$message}}</div> @enderror
                                                    </div>
                                                    <div class="form-group">
                                                      <label for="username">Username</label>
                                                      <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Masukkan Username" name="username[]"value="{{old('username')}}">
                                                      @error('username') <div class="invalid-feedback">{{$message}}</div> @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="password">Password</label>
                                                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Masukkan Password" name="password[]" value="{{old('password')}}">
                                                        @error('password') <div class="invalid-feedback">{{$message}}</div> @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="email">Email</label>
                                                        <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukkan Email" name="email[]" value="{{old('email')}}">
                                                         @error('email') <div class="invalid-feedback">{{$message}}</div> @enderror
                                                   </div>
                                                    <div class="form-group">
                                                        <label for="phone">Nomor phone</label>
                                                        <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" placeholder="Masukkan Nomor phone" name="phone[]" value="{{old('phone')}}">
                                                         @error('phone') <div class="invalid-feedback">{{$message}}</div> @enderror
                                                   </div>
                                                    <div class="form-group">
                                                        <div class="dropdown">
                                                                <label for="occupation">occupation</label>
                                                                <select class="form-control @error('occupation') is-invalid @enderror" id="occupation" name="occupation[]" value="{{old('occupation')}}">
                                                                        <option selected>Pilih occupation...</option>
                                                                        <option>Frontend</option>
                                                                        <option>Backend</option>
                                                                        <option>Fullstack</option>
                                                                </select>
                                                                @error('occupation') <div class="invalid-feedback">{{$message}}</div> @enderror
                                                            </div>
                                                        </div>
                                                    <div>
                                                            @if (session('status'))
                                                            <div id="berhasil" class="alert alert-success">
                                                                {{ session('status') }}
                                                            </div>
                                                            @endif
                                                    </div>
                                    </div>
                                                
                                  </div>
                            <div class="col-lg-3">
                            </div>
                        </div>
                    </div>
                        
</body>
</html>