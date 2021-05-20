<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="src/Resources/Css/meetingListStyle.css">
    <title>Meeting Lista</title>
</head>
<body>
    <div class="container">        
        <header>
            <img src="src/Resources/Img/alarico.jpg" alt="Logo Alarico">
            <h1>Scheduled meetings</h1>
        </header>

        <table class="table table-hover table-dark">
            <thead class="thHead">
                <th class="">Coder</th>
                <th class="">Topic</th>
                <th class="">Created at</th>
                <th class=""></th>            
            </thead>

            <tbody>

            <?php            
            foreach ($result as $data){
                echo "
                
                    <tr class='table table-hover table-dark'>
                        
                        <td>{$data->getCoder()}</td>
                        <td>{$data->getTopic()}</td>
                        <td>{$data->getTimeDate()}</td>
                        <td>
                            <a class='btn btn-primary' href='?action=edit&id={$data->getId()}'>Edit</a>
                            <a class='btn btn-danger' href='?action=delete&id={$data->getId()}'>Delete</a>
                        </td>
                    </tr>";  
            }
            ?>

            </tbody>
        </table>

        <div>
            <a class="btnNewMeeting create btn btn-success" href="?action=create">New Meeting</button></a>
        </div>
    </div>
</body>
</html>