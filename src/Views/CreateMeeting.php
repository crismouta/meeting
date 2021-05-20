<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="src/Resources/Css/createStyle.css">

    <title>Document</title>
</head>
<body>
    <div class="container">        
        <header>
            <img src="src/Resources/Img/calico_logo.png" alt="Logo Calico Electronico">
            <h1>Insert your data here</h1>
        </header>
        
        <form action="?action=store" method="post">
            <div class="inputData">
                <div class="insertData">
                    <input class="form-control mb-2 mt-2" type="text" name="coder" required placeholder="Name">
                    <input class="form-control mb-2 mt-2" type="text" name="topic" required placeholder="Topic">
                </div> 

                <div class="btnData">
                    <input class="create btn btn-success" type="submit" value="Create Meeting" >
                    <input class="btn btn-warning" type="reset"  value="Reset">
                    <a class="btn btn-danger" href="?action=index">Cancel Meeting</a>
                </div>            
            </div>
        </form>
    </div>
</body>
</html>