<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>category</title>
    <?php
    include_once "headerfiles.php";
    ?>
</head>
<body>
<?php
include_once "adminheader.php";
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Category</h1>
        </div>
    </div>
    <form action="addcategory.php" method="post">
        <div class="form-group row">
            <label for="username" class="col-md-2">Category name</label>
            <div class="col-md-10">
                <input type="text" name="categoryname" class="form-control" data-rule-required="true"
                       id="username"
                       placeholder=" name of category">
            </div>
        </div>
        <div class="form-group row">
            <label for="username" class="col-md-2">description</label>
            <div class="col-md-10">
                    <textarea name="description" class="form-control" data-rule-required="true"
                              id="desc" placeholder="description"></textarea>
            </div>
        </div>
        <div class="form-group justify-content-right row">
            <label for="username" class="col-md-2"></label>
            <div class="col-md-10 offset-4">
                <input type="submit" class="btn btn-primary">
            </div>
        </div>
        <div class="form-group row">
            <label for="username" class="col-md-2"></label>
            <div class="col-md-10">
                <?php
                if (isset($_REQUEST['er'])) {
                    $val = $_REQUEST['er'];
                    if ($val == 0) {
                        ?>
                        <div class="alert alert-danger"><b>Fail!</b> Categoryname already exist
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                        </div>
                        <?php
                    } elseif ($val == 1) {
                        ?>
                        <div class="alert alert-success"><b>success !</b> Category added succesfully
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
    </form>
</div>
</body>
</html>







