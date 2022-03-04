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
  
    <!--Container Main start-->
<div class="height-100 bg-light">

<div class="container">
        <br>
        <h1>EDIT EXPENSE</h1> 
        <br>
        <form action="{{route('update_expense',$expense->id)}}" method="POST">  
          {{csrf_field()}}
          <div class="mb-3">
            <div class="form-group">
            <label for="expenseCategory" class="form-label">Expense Category</label>
               <select class="form-control" name="expenseCategory" required>
              @foreach($category as $category)
               <option value="{{$category->category_name}}">{{$category->category_name}}</option>
              @endforeach
               </select>
            </div>
          </div>
          <div class="mb-3">
            <label for="expenseAmount" class="form-label">Expense Amount</label>
            <input type="number" class="form-control" name="expenseAmount" value="{{$expense->expense_amount}}" required>
          </div>
          <div class="mb-3">
            <label for="expenseDate" class="form-label">Entry Date</label>
            <input type="date" class="form-control" name="expenseDate" value="{{$expense->expense_date}}" required>
          </div>

          <a type="button" class="btn btn-danger" href="{{route('delete_expense',$expense->id)}}">Delete</a>
          <button type="submit" class="btn btn-primary">Save</button>
        </form>
</div>
</div>
</body>
</html>