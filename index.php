<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
      <div class="row">
         <div class="col-6 bg-dark border border-info">
             <form action="index.php" method="post" enctype="multipart/form-data">
                 <input type="file" name="uploadedFile" />
                 <input  class="btn-info" type="submit" value="Ver Archivo">
             </form>    
        </div>
         <?php 
         if (isset($_FILES['uploadedFile']) && $_FILES['uploadedFile']['error'] === UPLOAD_ERR_OK) {
              echo("<h5 class='txt-light'>Archivo Cargado Correctamente</h5>");
            }
         ?>
      </div>
    </div>

</body>
</html>