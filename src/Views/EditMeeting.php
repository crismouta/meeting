<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="src/Resources/Css/editStyle.css">

    <title>Document</title>
</head>
<body>
    <div class="container">
        <header>
            <img src="src/Resources/Img/calico_logo.png" alt="Logo Calico Electronico">
            <h1>Insert your data here</h1>
        </header>

        <form action='?action=update&id=<?php echo "{$meetingEdit->getId()}" ?>' method="post">
            <div class="inputData">
                <div class="insertData">
                    <input class="form-control mb-2 mt-2" type="text" name="coder" required placeholder="<?php echo "{$meetingEdit->getCoder()}"?>">
                    <input class="form-control mb-2 mt-2" type="text" name="topic" required placeholder="<?php echo "{$meetingEdit->getTopic()}"?>">
                </div>

                <div class="btnData">
                    <input class="btn btn-success" type="submit" value="Edit Meeting">
                    <input class="btn btn-warning" type="reset" value= "Reset">            
                    <a class="btn btn-danger" href="?action=index">Cancel Editing</a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
