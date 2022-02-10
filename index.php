<?php 
    require_once 'config/database.php';
    require_once 'model/olimpo.php';

    $crud = new CRUD("asignaturas");
    $list = $crud->getAsignaturesByProfessor();
    echo "<pre>";
    print_r($list);
    echo "</pre>";
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Olimpo High School</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <script src="js/jquery.js"></script>
    <script src="js/index.js"></script>
</head>
<body>  
    <div class="container text-white" style="background-color: green; text-align: center;">
        <br>
        <H3>Olimpo's HighSchool</H3>
        <p>In this platform you can consult the grades and shedules of the 12 olimpic gods</p>
        <br>
    </div>

    <div class="container">
        <p class="display-6">Choose the teacher</p>
        <button class="btn btn-success" onclick="getNemesis();"> Némesis</button>
        <button class="btn btn-success" onclick="getPriapo();">  Príapo</button>
        <button class="btn btn-success" onclick="getIris();">    Iris</button>
        <hr>
    </div>
    <br><br>

    <div   class = "container">
    <table class = "table table">
    <thead class = "thead-dark">
        <tr>
        <th scope="col">#</th>
        <th scope="col">Asignature</th>
        <th scope="col">Course</th>
        <th scope="col">Student</th>
        </tr>
    </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td id="asignature">Mark</td>
      <td id="course">Otto</td>
      <td id="student">@mdo</td>
    </tr>
    <tr>
  </tbody>
</table>
    </div>

</body>
</html>
