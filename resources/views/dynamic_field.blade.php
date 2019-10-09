
<!DOCTYPE html>
<html lang="en">
<head>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
    <title>Document</title>
</head>
<body>
  <div class="container">
  <form method ="POST" action= {{route("addmore.insert")}} enctype="multipart/form-data" >
          @csrf
          <h1 class="mt-3" style="text-align:center">Form Masuk Perusahaan</h1>
          <div id="tablebordered">
            <div id="card`+i+`" class="row my-4">
              <div class="col-lg-3"></div>
              <div  class="card col-lg-6">
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-11"></div>
                    <div class="col-lg-1">
                      
                                   </div>
                                  </div>
                                  <div class="form-group"></div>
                                  <label for="nama">Nama</label>
                                  <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan Nama" name="nama"value="{{old('nama')}}">
                                  @error('nama') <div class="invalid-feedback">{{$message}}</div> @enderror
                                  
                                  <div class="form-group"></div>
                                  <label for="username">Username</label>
                                  <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Masukkan username" name="username"value="{{old('username')}}">
                                  @error('username') <div class="invalid-feedback">{{$message}}</div> @enderror
                                  
                                  <div class="form-group"></div>
                                  <label for="password">Password</label>
                                  <input type="text" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Masukkan password" name="password"value="{{old('password')}}">
                                  @error('password') <div class="invalid-feedback">{{$message}}</div> @enderror
                                  
                                  <div class="form-group"></div>
                                  <label for="email">Email</label>
                                  <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukkan email" name="email"value="{{old('email')}}">
                                  @error('email') <div class="invalid-feedback">{{$message}}</div> @enderror
                                  
                                  <div class="form-group"></div>
                                  <label for="phone">No Telepon</label>
                                  <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" placeholder="Masukkan Phone" name="phone"value="{{old('phone')}}">
                                  @error('phone') <div class="invalid-feedback">{{$message}}</div> @enderror
                                  
                                  <div class="form-group">
                                    <div class="dropdown">
                                      <label for="occupation">Occupation</label>
                                      <select class="form-control" name="occupation" id="occupation">
                                        <option>BackEnd Programmer</option>
                       <option>FrontEnd Programmer</option>
                       <option>FullStack Programmer</option>
                      </select>
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
                <div class="col-lg-3"></div>
              </div>
            </div>
            
            <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
              <button type="button" name="add" id="add" class="btn btn-success">Add More Form</button>
              <button type="submit" class="btn btn-info">Submit</button>
            </div>
            
          </div>
          
        </div>
      </form>
    
      
        
      </div>
      
      <script type="text/javascript">
        $(document).ready(function(){ 
            var i=1;
    
        $(document).on('click', '.btn_close', function(){  
           var button_id = $(this).attr("id");   
              $('#card'+button_id+'').remove();  
        });  
    
            $('#add').click(function(){  
               i++;  
               $('#tablebordered').append(`
               <div id="card`+i+`" class="row my-4">
               <div class="col-lg-3"></div>
                <div  class="card col-lg-6">
                                <div class="card-body">
                                    <div class="row">
                                    <div class="col-lg-11"></div>
                                    <div class="col-lg-1">
                                            <button type="button" name="close" id="`+i+`" class="btn btn-danger btn_close">X</button>
                                    </div>
                                    </div>
                                    <div class="form-group"></div>
                  <label for="nama">Nama</label>
                  <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan Nama" name="nama"value="{{old('nama')}}">
                  @error('nama') <div class="invalid-feedback">{{$message}}</div> @enderror
                  
                  <div class="form-group"></div>
                  <label for="username">Username</label>
                  <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Masukkan username" name="username"value="{{old('username')}}">
                  @error('username') <div class="invalid-feedback">{{$message}}</div> @enderror

                  <div class="form-group"></div>
                  <label for="password">Password</label>
                  <input type="text" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Masukkan password" name="password"value="{{old('password')}}">
                  @error('password') <div class="invalid-feedback">{{$message}}</div> @enderror
                
                  <div class="form-group"></div>
                  <label for="email">Email</label>
                  <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukkan email" name="email"value="{{old('email')}}">
                  @error('email') <div class="invalid-feedback">{{$message}}</div> @enderror
                
                  <div class="form-group"></div>
                  <label for="phone">No Telepon</label>
                  <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" placeholder="Masukkan Phone" name="phone"value="{{old('phone')}}">
                  @error('phone') <div class="invalid-feedback">{{$message}}</div> @enderror
              
                  <div class="form-group">
                    <div class="dropdown">
                      <label for="occupation">Occupation</label>
                      <select class="form-control" name="occupation" id="occupation">
                        <option>BackEnd Programmer</option>
                        <option>FrontEnd Programmer</option>
                        <option>FullStack Programmer</option>
                      </select>
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
                        <div class="col-lg-3"></div>
                        </form>
                        </div>
               `);  
          });  
        });  

        // $('#form').on('submit', function (event){
        //   event.preventDefault();
        //   $.ajaxSetup({
        //     headers:{
        //       'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
        //     }
        //   });

        //   $.ajax({
        //     url:'{{route("addmore.insert")}}',
        //     method:'post',
        //     data:$(this).serialize(),
        //     dataType:'json',
        //     beforeSend:function(){
        //       $('#save').attr('disabled', 'disabled');
        //     },
        //     success:function(data){
        //       if(data.error){
        //         var error_html ='';
        //         for(var count = 0; count < data.error.length; count++){
        //           error_html +='<p>'+data.error[count]+'</p>';
        //         }
        //         $('#result').html('<div class="alert alert-danger">'+error_html+'</div>');
                
        //       }
        //       else{
                
        //         $('#result').html('<div class="alert alert-success">'+data.success+'</div>');

        //       }
        //       $('#save').attr('disabled', false);
        //     }
        //   })
        // });
    
    </script>
    </body>
    </html>
    