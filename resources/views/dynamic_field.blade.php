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

        <form method ="POST" action="/insert">
          @csrf
          <h1 class="mt-12" style="text-align:center">Insert</h1>
          <div id="insert">
            <div class="card1" class="row my-3">
              <div class="col-lg-3"></div>
              <div class="card col-lg-6">
                <div class="card-body">
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
                  <label for="Phone">No Telepon</label>
                  <input type="text" class="form-control @error('Phone') is-invalid @enderror" id="Phone" placeholder="Masukkan Phone" name="Phone"value="{{old('Phone')}}">
                  @error('Phone') <div class="invalid-feedback">{{$message}}</div> @enderror
              
                  <div class="form-group">
                    <div class="dropdown">
                      <label for="occupation">Occupation</label>
                      <select class="form-control" id="occupation">
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

              </div>
              <div class="col-lg-3">

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
            var postURL = "<?php echo url('addmore'); ?>";
            var i=1;

            $('#add').click(function(){
              i++;
              $('#insert').append('<tr id="row'+i+'" class="dynamic-added"><td><input type="text" name="name[]" placeholder="Enter your Name" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
              
            });

            $(document).on('click', '.btn_remove', function(){
              var button_id = $(this).attr("id");
              $('#row'+button_id+'').remove();
            });

            $.ajaxSetup({
              headers:{
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
            });

            $('#submit').click(function(){
              $.ajax({
                url:postURL,
                method:"POST",
                data:$('#addname').serialize(),
                type:'json',
                success:function(data){
                  if(data.error){
                    printErrorMsg(data.error);
                  }else{
                    i=1;
                    $('.tablebordered').remove();
                    $('#add_name')[0].reset();
                    $('.print-success-msg').find("ul").html('');
                    $('.print-success-msg').css('display', 'block');
                    $('.print-error-msg').css('display', 'none');
                    $('.print-succes-msg').find("ul").append('<li>Record Inserted Successfully.</li>');
                  }
                }
              });
            });
                function printErrorMsg (msg){
                  $(".print-error-msg").find("ul").html('');
                  $(".print-error-msg").css('display', 'block');
                  $(".print-error-msg").css('display', 'none');
                  $.each(msg , function(key, value){
                    $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
                  });
                }
        });

      </script>

</body>
</html>