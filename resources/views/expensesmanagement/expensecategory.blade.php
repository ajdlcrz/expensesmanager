<!doctype html>
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

                  <span class="nav_link " data-bs-toggle="collapse" data-bs-target="#User-collapse">User Management</span> 
                  <div class="collapse" id="User-collapse">
                    <li class="nav_link"><a href="roles" class="link-dark rounded">Roles</a></li>
                    <li class="nav_link"><a href="users" class="link-dark rounded">Users</a></li>
                  </div>
                  <span class="nav_link active" data-bs-toggle="collapse" data-bs-target="#Expense-collapse">Expense Management</span> 
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
        <h1>Expense Categories</h1> 
        <br>
            
    <table id="expensescategory" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Display Name</th>
                <th>Description</th>
                <th>Created At</th>
            </tr>
        </thead>
        <tbody>
          @foreach($category as $category)
          <tr>
              <td><a href="{{route('edit_category',$category->id)}}" >{{$category->category_name}}</a></td>
              <td>{{$category->category_desc}}</td>
              <td>{{$category->created_at}}</td>
          </tr>
          @endforeach
        </tbody>

    </table>
    <button style="align:right" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Addcategory">Add Category</button>

</div>
</div>
</body>
<!--ADD MODAL-->
<div class="modal fade" id="Addcategory" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="{{route('submit_category')}}" method="POST">  
          {{csrf_field()}}
          <div class="mb-3">
            <label for="categoryName" class="form-label">Display Name</label>
            <input type="text" class="form-control" name="categoryName" required>
          </div>
          <div class="mb-3">
            <label for="categoryDesc" class="form-label">Description</label>
            <input type="text" class="form-control" name="categoryDesc" required>
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
