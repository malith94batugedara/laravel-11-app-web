<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EMS | Add New Employee</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"/>
</head>
<body>
    <div class="container mt-4">
        <h1 class="text-center">Add New Employee</h1><a href="{{ route('employee.index') }}" class="btn btn-success float-end">All Employees</a><br/><br/>
    <div>
    @if ($errors->any())
    <div class="alert alert-danger" role="alert">
        @foreach($errors->all() as $error)
          <div> {{ $error }} </div>
        @endforeach
    </div>
    @endif
    </div>
    <form action="{{ route('employee.store') }}" method="post">
         @csrf
         <label>Employee Name</label>
         <input type="text" name="emp_name" class="form-control" placeholder="Enter Your Name"/><br/>
         <label>Employee Address</label>
         <input type="text" name="emp_address" class="form-control" placeholder="Enter Your Address"/><br/>
         <label>Employee Id</label>
         <input type="text" name="emp_id" class="form-control" placeholder="Enter Your Id"/><br/>

         <input type="submit" value="Save" class="btn btn-success"/>
    </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
