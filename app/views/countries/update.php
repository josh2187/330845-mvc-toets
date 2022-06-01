<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Local CSS -->
    <link rel="stylesheet" href="../css/users.css">

    <title>updating_records</title>
  </head>

  <body>
    <?php
        $data['names'] ?? '';
        // var_dump($data);
        // var_dump($data['names']->continent);
        // var_dump($data['names']);
        // var_dump($data);
    ?>

    <Form action="<? URLROOT; ?>/Countries/update" method="post">
      <div class="container">
      <h1>Land wijzigen</h1> 
        <div class="container-fluid mb-5">
          <div class="row input-bundle">
            <div class="col-sm-6">
              <div class="form-group mb-2">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" value="<?php echo $data['names']->name?>" required placeholder="name">
              </div>
            </div>
    
            <div class="col-sm-6">
              <div class="form-group mb-2">
                <label for="capitalcity">Capital</label>
                <input type="text" name="capitalcity" class="form-control" value="<?php echo $data['names']->capitalCity?>" placeholder="capitalcity">
              </div>
            </div>
    
            <div class="col-sm-6">
            <div class="form-group mb-2">
                <label for="population">Population</label>
                <input type="text" name="population" class="form-control" value="<?php echo $data['names']->population?>" required placeholder="population">
              </div>
            </div>

            <h6>Continent</h6>
                <select class="form-select" name="continent" aria-label="Default select example" id="continent">
                    <option value="<?php echo $data['names']->continent?>"><?php echo $data["names"]->continent?></option>
                    <option value="Afrika">Afrika</option>
                    <option value="Antartica">Antartica</option>
                    <option value="Azië">Azië</option>
                    <option value="Australië/Oceanië">Australië/Oceanië</option>
                    <option value="Europa">Europa</option>
                    <option value="Noord-Amerika">Noord-Amerika</option>
                    <option value="Zuid-Amerika">Zuid-Amerika</option>
                </select>
            <label for="continent"></label>
          </div>
        </div>

        <input type="hidden" name="id" value="<?=$data['names']->id?>">

        <button type="submit" value="submit" class="submit btn btn-lg">Opslaan</button>
      </div>
    </Form>
  </body>
    
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- boxicons usage link -->
  <script src="https://unpkg.com/boxicons@2.1.2/dist/boxicons.js"></script>
</html>