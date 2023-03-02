<?php
error_reporting(E_ALL);
require "./class/validator/Validable.php";
require "./class/validator/ValidateRequired.php";

print_r($_POST);
// //rappresenta l'ambiente dove gira lo script ed è una variabile super globale
//print_r($_SERVER['REQUEST_METHOD']);
if($_SERVER['REQUEST_METHOD'] === 'POST'){
  echo "dati inviati, adesso li devo controllare";

  $validatorName = new ValidateRequired();
  $validatedName = $validatorName->isValid($_POST['first_name']);
  $validatorSurname = new ValidateRequired();
  $validatedSurname = $validatorSurname->isValid($_POST['last_name']);
  $validatorBirth = new ValidateRequired();
  $validatedBirth = $validatorBirth->isValid($_POST['birth_place']);
  $validatorUsername = new ValidateRequired();
  $validatedUsername = $validatorUsername->isValid($_POST['username']);
  $validatorPassword = new ValidateRequired();
  $validatedPassword = $validatorPassword->isValid($_POST['password']);
  $validatorGender = new ValidateRequired();
 // $validatedGender = $validatorGender->isValid($_POST['gender']);
  //ciclo if scritto diversamente:
  $isValidNameClass = $validatorName->isValid($_POST['first_name']) ? '' : 'is-invalid';
  $isValidLastNameClass = $validatorSurname->isValid($_POST['last_name']) ? '' : 'is-invalid';
  $isValidBirthClass = $validatorBirth->isValid($_POST['birth_place']) ? '' : 'is-invalid';
  $isValidUsernameClass = $validatorUsername->isValid($_POST['username']) ? '' : 'is-invalid';
  $isValidPasswordClass = $validatorPassword->isValid($_POST['password']) ? '' : 'is-invalid';
  $validatedGender = $validatorGender->isValid(!isset($_POST['gender']) ? '' : $_POST['gender']);
  //$isValidGenderClass = $validateGender;
  }

  if($_SERVER['REQUEST_METHOD'] === 'GET'){
    //assegno false dato che inizialmente non esiste ancora questa variabile
    //dato che entriamo via GET
     $validatedName = false;
     $isValidNameClass = ' ';
     $validatedSurname = false;
     $isValidLastNameClass = ' ';
     $validatedBirth = false;
     $isValidBirthClass = ' ';
     $validatedUsername = false;
     $isValidUsernameClass = ' ';
     $validatedPassword = false;
     $isValidPasswordClass = ' ';
  }

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
  <header class="bg-light p-1">
    <h1 class="display-6">Applicazione demo</h1>
  </header>
  <main class="container">

    <section class="row">
      <div class="col-sm-2">

      </div>
      <div class="col-sm-8">

        <form class="mt-1 mt-md-5" action="create-user.php" method="POST">

          <div class="mb-3">
            <label for="first_name" class="form-label">nome</label>
            <input type="text" value="<?php echo $_POST['first_name']?>" class="form-control <?php echo $isValidNameClass ?>" name="first_name" id="first_name">
            <?php
            if (!$validatedName) {  ?>
              <div class="invalid-feedback">
                il nome è obbligatorio

              </div>

            <?php
            }
            ?>
          </div>
          

          <div class="mb-3">
            <label for="last_name" class="form-label">cognome</label>
            <input type="text" class="form-control <?php echo $isValidLastNameClass ?>" name="last_name" id="last_name">
            <?php
            if (!$validatedSurname) {  ?>
              <div class="invalid-feedback">
                il cognome è obbligatorio

              </div> 

            <?php
            }
            ?>


          </div>
          <div class="mb-3">
            <label for="birthday" class="form-label">data di nascita</label>
            <input type="date" class="form-control" name="birthday" id="birthday">
            <div class="invalid-feedback">
              errore
            </div>
          </div>
          <div class="mb-3">
            <label for="birth_place" class="form-label">luogo di nascita</label>
            <input type="text" class="form-control <?php echo $isValidBirthClass ?>" name="birth_place" id="birth_place">
            <?php
            if (!$validatedBirth) {  ?>
              <div class="invalid-feedback">
                il luogo di nascita è obbligatorio

              </div>

            <?php
            }
            ?>

          </div>

          <div class="mb-3">
            <span>Genere</span>
            <div class="form-check">
              <input class="form-check-input <?php !$validatedGender ? 'is-invalid': ''?>" type="radio" name="gender" value="M" id="gender_M">
              <label class="form-check-label" for="gender_M">
                Maschile
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input <?php !$validatedGender ? 'is-invalid': ''?>" type="radio" name="gender" value="F" id="gender_F">
              <label class="form-check-label" for="gender_F">
                Femminile
              </label>
              <?php
            if (!$validatedGender):  ?>
              <div class="invalid-feedback">
                il sesso è obbligatorio

              </div>

            <?php endif ?>

            </div>
          </div>
          <div class="mb-3">
            <label for="username" class="form-label">Nome utente</label>
            <input type="text" class="form-control <?php echo $isValidUsernameClass ?>" name="username" id="username">
            <?php
            if (!$validatedUsername) {  ?>
              <div class="invalid-feedback">
                l'username è obbligatorio

              </div>

            <?php
            }
            ?>
          </div>


          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control <?php echo $isValidPasswordClass ?>" name="password" id="password">
            <?php
            if (!$validatedPassword) {  ?>
              <div class="invalid-feedback">
                la password è obbligatoria

              </div>

            <?php
            }
            ?>
          </div>


          <button class="btn btn-primary btn-sm" type="submit"> Crea </button>
        </form>
      </div>

      <div class="col-sm-2">
      </div>
    </section>
  </main>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
</body>

</html>