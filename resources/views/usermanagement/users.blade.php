<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">

    <title>Expense Manager</title>
<!-- CSS only -->
<link rel="stylesheet" type="text/css" href="https://bootswatch.com/5/lux/bootstrap.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sidebars/">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/styles.css') }}"  rel="stylesheet">
    <script src="{{ asset('js/welcome.js') }}"></script>
  </head>

<body id="body-pd">

    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> 
              <a href="#" class="nav_logo"> 
              <span class="nav_logo-name">Expense Manager</span>
              </a>
                <div class="nav_list"> 
                  <a href="dashboard" class="nav_link"> 
                  <span class="nav_name">Dashboard</span> 
                  </a> 

                  <span class="nav_link active" data-bs-toggle="collapse" data-bs-target="#User-collapse">User Management</span> 
                  <div class="collapse" id="User-collapse">
                    <li class="nav_link"><a href="roles" class="link-dark rounded">Roles</a></li>
                    <li class="nav_link"><a href="users" class="link-dark rounded">Users</a></li>
                  </div>
                  <span class="nav_link" data-bs-toggle="collapse" data-bs-target="#Expense-collapse">Expense Management</span> 
                  <div class="collapse" id="Expense-collapse">
                    <li class="nav_link"><a href="expensescategories" class="link-dark rounded">Expense Categories</a></li>
                    <li class="nav_link"><a href="expenses" class="link-dark rounded">Expenses</a></li>
                  </div>

                  </div>
            </div> <a href="#" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span> </a>
        </nav>
    </div>
    <!--Container Main start-->
<div class="height-100 bg-light">
<div class="container">
        <br>
        <h1>USERS</h1> 
        <br>
            
    <table id="usertable" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email Address</th>
                <th>Role</th>
                <th>Created At</th>
            </tr>
        </thead>
        <tbody>
          @foreach($users as $users)
          <tr>
            <td><a href="{{route('edit_user',$users->id)}}"  >{{$users->user_name}}</a></td>
            <td>{{$users->user_email}}</td>
            <td>{{$users->user_role}}</td>
            <td>{{$users->created_at}}</td>
          </tr>
          @endforeach
        </tbody>

    </table>
    <button style="align:right" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Adduser">Add User</button>
</div>

</div>
</body>
  
<!--ADD MODAL-->
<div class="modal fade" id="Adduser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="{{route('submit_user')}}" method="POST">  
          {{csrf_field()}}
          <div class="mb-3">
            <label for="userName" class="form-label">Name</label>
            <input type="text" class="form-control" name="userName" required>
          </div>
          <div class="mb-3">
            <label for="userEmail" class="form-label">Email Address</label>
            <input type="email" class="form-control" name="userEmail" required>
          </div>
          <div class="mb-3">
          <div class="form-group">
               <label for="userRole" class="form-label">Role</label>
               <select class="form-control" name="userRole" required>
              @foreach($roles as $roles)
               <option value="{{$roles->role_name}}">{{$roles->role_name}}</option>
              @endforeach
               </select>
          </div>
          </div>

          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save</button>
        </form>
      </div>
    </div>
  </div>
</div>  
<!---END MODAL-->

</html>