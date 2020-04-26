<?php
  include 'login/Session.php';
  Session::checkSession();
  include_once 'Config/Config.php';
  include_once 'Database/Database.php';
?>
<!DOCTYPE html>
<head>

    <title>Oop Practice</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>    
</head>
<body>     
<div class="container">
  <!-- logout -->
     <div class="text-right">
        <?php
        if(isset($_GET['action'])&&$_GET['action']=='logout')
        {
          Session::destroy();
        }
        ?>
      <a href="index.php?action=logout" class="btn btn-primary" style="margin-top: 10px">Sign Out</a>
    </div>
  <!-- logout -->
  <div class="col-sm-6" style="margin: auto;">
  <h2>Add Student</h2>
  <form action="" method="post" id="submit">
    <div class="form-group">
      <label>Student Name</label>
      <input type="text" class="form-control" placeholder="Enter Student Name" name="name">
    </div>
    <div class="form-group">
      <label>Roll</label>
      <input type="number" min="0" class="form-control" id="roll" placeholder="Enter Roll" name="roll">
      <span id="roll_exits" ></span>  
    </div>
    <div class="form-group">
      <label>Father's Name</label>
      <input type="text" class="form-control" placeholder="Enter Father's Name" name="father_name">
    </div>
    <div class="form-group">
      <label>Institute Name</label>
     <select  class="form-control institute_name" name="institute_name">
      <option value=0 hidden="">Select</option>
       <option value="Feni Computer Institute">Feni Computer Institute</option>
       <option value="Comilla Polytechnic Institute">Comilla Polytechnic Institute</option>
       <option value="Feni Polytechnic Institute">Feni Polytechnic Institute</option>
       <option value="Dhaka Polytechnic Institute">Dhaka Polytechnic Institute</option>
     </select>
    </div>
    <button type="submit"class="btn btn-success submit">Submit</button>
  </form>
  </div>
  <div class="col-sm-6"></div>
</div>
<br>
  <!-- Student List -->
  <h3 class="container">Student List</h3>
  <div class="container">
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Sl</th>
      <th scope="col">Name</th>
      <th scope="col">Roll</th>
      <th scope="col">Father Name</th>
      <th scope="col">Institute</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th>1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>@mdo</td>
    </tr>
  </tbody>
</table>
  </div>

</body>
</html>
