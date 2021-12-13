<?php require_once "header.php" ?>
<body>
    <div class="container my-5">
            <a href="index.php?url=InsertController/insertTodo" class="btn btn-primary">Add Todo</a href="">
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Status</th>
                    <td>Actions</td>
                </tr>
            <tbody>

                <?php if (isset($todos)) : ?>

                    <?php foreach ($todos as $todo) : ?>
                        <tr>
                            <td><?= $todo->id ?></td>
                            <td><?= $todo->title ?></td>
                            <td><?= $todo->description ?></td>
                            <td>
                                <?php echo $todo->completed ? "Completed":"Not completed" ?>
                            </td>
                            <td>
                                <a href="" class="btn btn-primary">Edit</a href="">
                                <a href="" class="btn btn-danger">Delete</a href="">
                            </td>
                        </tr>
                    <?php endforeach ?>
                <?php endif ?>
            </tbody>
            </thead>
        </table>
    </div>
</body>

</html>