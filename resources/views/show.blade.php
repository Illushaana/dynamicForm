<!DOCTYPE html>
<html lang="en">
<head>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
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
                                    <a class="nav-link" href="/lists">Data</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                
                <form method="POST" id="form" action="/lists/{id}/edit">
                    @csrf
                    @method('put')
                <h1 class="mt-3" style="text-align: center">Insert</h1>
                <div id="insert">
                <div id="card1" class="row my-4">
                    <div class="col-lg-3"></div>
                    <div  class="card col-lg-6">
                                    <div class="card-body">
                                                    <div class="form-group">
                                                      <label for="nama">Nama</label>
                                                      <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan Nama" name="nama[]"value="{{$listforms->nama}}">
                                                      @error('nama') <div class="invalid-feedback">{{$message}}</div> @enderror
                                                    </div>
                                                    <div class="form-group">
                                                      <label for="username">Username</label>
                                                      <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Masukkan Username" name="username[]"value="{{$listforms->username}}">
                                                      @error('username') <div class="invalid-feedback">{{$message}}</div> @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="password">Password</label>
                                                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Masukkan Password" name="password[]" value="{{$listforms->password}}">
                                                        @error('password') <div class="invalid-feedback">{{$message}}</div> @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="email">Email</label>
                                                        <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukkan Email" name="email[]" value="{{$listforms->email}}">
                                                         @error('email') <div class="invalid-feedback">{{$message}}</div> @enderror
                                                   </div>
                                                    <div class="form-group">
                                                        <label for="phone">Nomor phone</label>
                                                        <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" placeholder="Masukkan Nomor phone" name="phone[]" value="{{$listforms->phone}}">
                                                         @error('phone') <div class="invalid-feedback">{{$message}}</div> @enderror
                                                   </div>
                                                    <div class="form-group">
                                                        <div class="dropdown">
                                                                <label for="occupation">occupation</label>
                                                                <select class="form-control @error('occupation') is-invalid @enderror" id="occupation" name="occupation[]" value="{{$listforms->occupation}}">
                                                                        <ul id="tableMenu" class="dropdown-menu">
                                                                        <option >Pilih occupation...</option>
                                                                        <option value=Frontend>Frontend</option>
                                                                        <option value=Backend>Backend</option>
                                                                        <option value=Fullstack>Fullstack</option>
                                                                        </ul>
                                                                </select>
                                                                @error('occupation') <div class="invalid-feedback">{{$message}}</div> @enderror

                                                                    <button>Submit</button>
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

                    
                  <script>
                      $("#occupation option").click(function(e){
                        e.preventDefault();
                        var selText = $(this).text();
                        $("#occupation").text(selText);
                      });
                  </script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

                        
</body>
</html>