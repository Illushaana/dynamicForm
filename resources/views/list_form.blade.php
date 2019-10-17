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
            <ul class="nav nav-tabs">
                    <li class="nav-item">
                      <a class="nav-link active" href="/">List</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/addmore">Insert</a>
                    </li>
                  </ul>
                  <br>
                  <br>
                  <h1>Form List</h1>
<table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Username</th>
        <th scope="col">Password</th>
        <th scope="col">Email</th>
        <th scope="col">phone</th>
        <th scope="col">Occupation</th>
      </tr>
      
      @foreach ($listforms as $f)
    </thead>
    <tbody>
      <tr>
      <td>{{$f->id}}</td>
        <td>{{$f->nama}}</td>
        <td>{{$f->username}}</td>
        {{-- <td>{{$f->password}}</td> --}}
        <td>{{$f->email}}</td>
        <td>{{$f->phone}}</td>
        <td>{{$f->occupation}}</td>    
        <td>
        
        <form action="/show" class="d-inline">
        <input type="text" hidden name="id" value="{{$f->id}}">
          <button type="submit" class="btn btn-primary">Edit</button>
        </form>
          
        <form action="/lists/{{$f->id}}" method="POST" class="d-inline">
          @method('delete')
          @csrf
          <button type="submit" class="btn btn-danger">Hapus</button>
        </form>
      {{-- <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Edit
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="color: black">Update Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="/lists/{{$f->id}}/edit" method="POST">
      <div class="modal-body">
          <div class="form-group">
            <label style="color:black">Nama</label>
          </div>
          <input type="email" class="form-control" id="exampleFormControlInput1" value="{{$f->nama}}" >
          <div class="form-group">
            <label style="color:black">Username</label>
          <input type="email" class="form-control" id="exampleFormControlInput1" value="{{$f->username}}">
          </div>
          <div class="form-group">
            <label style="color:black">Password</label>
          <input type="email" class="form-control" id="exampleFormControlInput1" value="{{$f->password}}">
          </div>
          <div class="form-group">
            <label style="color:black">Email address</label>
          <input type="email" class="form-control" id="exampleFormControlInput1" value="{{$f->email}}">
          </div>
          <div class="form-group">
            <label style="color:black">No Hp</label>
          <input type="email" class="form-control" id="exampleFormControlInput1" value="{{$f->phone}}">
          </div>
          <div class="form-group">
            <label style="color: black">Occupation</label>
            <select class="form-control" id="exampleFormControlSelect1">
              <option>Frontend</option>
              <option>Backend</option>
              <option>Fullstack</option>
            </select>
         
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
         --}}

        </td>
      </tr>
      
    </tbody>
    
    @endforeach
  </table>

  
</div>

<script>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</script>

</body>
</html>