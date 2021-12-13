<?php include_once "header.php" ?>

<div class="container">
    <h1 class="bg-dark text-light p-5">Add New Todo</h1>
   <div class="row mx-auto">
       <div class="col-md-6">
       <form action="index.php?url=addController/insert" method="GET">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" id="title" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" name="desc" class="form-control" id="description" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="description">Status</label>
            <input type="number" name="status" class="form-control" id="description" aria-describedby="emailHelp">
        </div>
        <button class="btn btn-primary" name="AddTodo" type="submit">Add Todo</button>
      </form>
       </div>
   </div>
</div>