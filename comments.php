<?php
        // Here i make initilize for project
        $cp = curl_init();
                    // Here i make Set for URL by curl-> setop
                    // curl_setopt($cp,CURLOPT_URL);
                    // Here i set return trasfer to return data with string & true -> to take associative arrays
                    //  curl_setopt($cp,CURLOPT_RETURNTRANSFER);
        /**
         * Here i can send data in arrays style with key => value with $variable of init curl
         * And this meaning to off code of second and third party of code left this command line
         */ 
        curl_setopt_array($cp ,[
            CURLOPT_URL => "https://jsonplaceholder.typicode.com/comments",
            CURLOPT_RETURNTRANSFER =>true
        ]);
        // here i make execution for all old code review to make curl->APIS work 
        $respone = curl_exec($cp);
        // Here i use the variable to return data from json style to unzip to object  
        $respone = json_decode($respone,true);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="container text-center">Hello, world!</h1>
<div class="container">
    <div class="row">
        <div class="col-12 mx-auto">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>PostId</th>
                    <th>Id</th>
                    <th>name</th>
                    <th>email</th>
                    <th>body</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($respone as $row): ?>
                <tr>
                    <td><?php echo $row['postId'] ?></td>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['name'] ?></td>
                    <td><?php echo $row['email'] ?></td> 
                    <td><?php echo $row['body'] ?></td> 
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>