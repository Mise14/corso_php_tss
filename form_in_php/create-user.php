<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Login Sito</title>
</head>

<body>

    <header class="bg-light p-1">
        <h1 class="display-6">Create account</h1>
    </header>

    <main class="container">

        <section class="row">
            <div class="col-sm-4">

            </div>
            <div class="col-sm-4">
                <form class="mt-1 mt-md-5" action="register-user.php" method="GET">
                    <div class="mb-2">
                        <label for="name" class="form-label">Nome</label>
                        <input type="name" class="form-control" id="name" name="first_name">
                    </div>
                    <div class="mb-2">
                        <label for="last_name" class="form-label">Cognome</label>
                        <input type="last_name" id="last_name" class="form-control" name="last_name">
                    </div>
                    <div class="mb-2">
                        <label for="birthday" class="form-label">Data di nascita</label>
                        <input type="date" id="birthday" class="form-control" name="birthday">
                    </div>
                    <div class="mb-2">
                        <label for="birth_place" class="form-label">Luogo di nascita</label>
                        <input type="birth_place" id="birth_place" class="form-control" name="birth_place">
                    </div>
                    <div class="mb-2">
                        <label for="gender" class="form-label">Sesso</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="gender-m" value= "M">
                            <label class="form-check-label" for="gender-m">M</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="gender-s" value="F">
                            <label class="form-check-label" for="gender-s">F</label>
                        </div>
                    </div>
                    <div class="mb-2">
                        <label for="username" class="form-label">Username</label>
                        <input type="username" id="username" class="form-control" name="username">
                    </div>
                    <div class="mb-2">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" id="password" class="form-control" name="password">
                    </div>
                    <div class="position-relative">
                        <div class="position-absolute top-50 start-50 translate-middle mt-3">
                            <button class="btn btn-primary btn-sm" type="submit"> Sign in </button>
                        </div>
                    </div>
                </form>

            </div>

            <div class="col-sm-4">
            </div>
        </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>