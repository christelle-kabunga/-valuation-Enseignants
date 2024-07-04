<?php

include('connexion/connexion.php');

?>

<!DOCTYPE html>

<html lang="fr">

<head>

  <meta charset="utf-8">

  <meta content="width=device-width, initial-scale=1.0" name="viewport">



  <title>Évaluation des enseignants</title>

  <meta content="" name="description">

  <meta content="" name="keywords">



  <?php require_once('views/style.php'); ?>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>

  <main id="main" class="main">

    <div class="container mt-5">

      <div class="col-12 text-center">

        <h4 class="">Évaluation des enseignants</h4>

        <p>Merci de prendre quelques minutes pour évaluer les enseignants que vous avez eus ce semestre. Vos réponses nous aideront à améliorer la qualité de l'enseignement.</p>

      </div>

      <?php

      if (isset($_SESSION['msg']) && !empty($_SESSION['msg'])) {

        ?><div class="alert-info alert text-center"><?php echo $_SESSION['msg']; ?></div><?php

      }

      unset($_SESSION['msg']); // This line removes the value from the message session

      ?>
      <h1></h1>

      <form id="evaluationForm" class="mx-auto"> 
        <?php
        $getdata = $connexion->prepare("SELECT * from criteres WHERE supprimer=?");
        $getdata->execute([0]);
        $tab[]
        while ($get = $getdata->fetch()) {
          ?>
          <div class="form-group">
            <label for="critere1"> <?= $get["description"] ?></label>
            <?php
        $getdat = $connexion->prepare("SELECT * from assertion WHERE supprimer=?");
        $getdat->execute([0]);
        while ($gett = $getdat->fetch()) {
          ?>
            <div class="form-check">
              <input type="radio" class="form-check-input" id="" name="radio" value="">
              <label class="form-check-label" for="critere1Bien"><?= $gett["enonce"] ?></label>
            </div>
            <?php
             }
        ?>
            <?php
                 }
                 ?>
            
          </div>
        <button type="submit" class="btn btn-primary mt-3">Envoyer l'évaluation</button>
      </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </main>

</body>

</html>
