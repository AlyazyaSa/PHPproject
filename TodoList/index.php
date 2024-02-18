<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>To-Do List</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./js/style.js">

</head>
<body>
<div class="main-section">
<div class="add-section">
  <form  method="POST" action="userListItem/infoHandle.php">
<input type="text" name="title" placeholder="This field is required" />
  <button type="Submit"> Add &nbsp; <span></span>&#43</button>
  </form>
  </div>


  <form method="POST" action="userListItem/infoHandle.php" >

<div class="show-todo-section">
<div class="todo-item">
    <input type="checkbox"/>
    <h2>This Is your task</h2>
    <button class="btn btn-danger delete-btn">Delete</button>
    <br>
    
</div>

   </div>
</form>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
