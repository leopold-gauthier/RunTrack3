<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/44c9193141.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="text-center">
  <header>
    <nav class="text-blue-600">
      <a href="index.php">Accueil</a>
      <a href="#">Inscription</a>
      <a href="#">Connexion</a>
      <a href="#">Rechercher</a>
    </nav>
  </header>
  <br>
  <main>
    <section>
      <h2>Créer un compte</h2>
      <form action="#" method="post">
        <fieldset>
          <legend>Civilité :</legend>
          <input type="radio" name="civilite" id="civilite-mr" value="mr" required>
          <label for="civilite-mr">M.</label>
          <input type="radio" name="civilite" id="civilite-mme" value="mme" required>
          <label for="civilite-mme">Mme</label>
          <input type="radio" name="civilite" id="civilite-mlle" value="mlle" required>
          <label for="civilite-mlle">Mlle</label>
        </fieldset>
        <!-- Information perso -->
        <div class="inline-flex flex-row">
          <fieldset class="grid grid-cols-3 gap-4 justify-items-center p-2 max-w-md">
            <legend>Informations personnelles <i class="far fa-address-card"></i></legend>
            <label for="prenom"><i class="fas fa-user-edit"></i></label>
            <input class="ml-2 px-2 py-1 border" type="text" placeholder="Prénom" name="prenom" id="prenom" required>
            <br>
            <label for="nom"><i class="fas fa-user-edit"></i></label>
            <input class="ml-2 px-2 py-1 border" type="text" placeholder="Nom" name="nom" id="nom" required>
            <br>
            <label for="adresse"><i class="fas fa-mail-bulk"></i></label>
            <input class="ml-2 px-2 py-1 border" type="text" placeholder="Adresse" name="adresse" id="adresse" required>
          </fieldset>

          <fieldset class="grid grid-cols-3 gap-4 justify-items-center p-2 max-w-md">
            <legend>Informations de connexion <i class="fab fa-connectdevelop"></i></legend>
            <label for="email"><i class="fas fa-mail-bulk"></i></label>
            <input class="ml-2 px-2 py-1 border" placeholder="eMail" type="email" name="email" id="email" required>
            <br>
            <label for="password"><i class="fas fa-lock"></i></label>
            <input class="ml-2 px-2 py-1 border" placeholder="Password" type="password" name="password" id="password" minlength="8" required>
            <br>
            <label for="password-confirmation"><i class="fas fa-user-lock"></i></label>
            <input class="ml-2 px-2 py-1 border" type="password" placeholder="Confirm Password" name="password-confirmation" id="password-confirmation" minlength="8" required>
          </fieldset>
        </div>
        <fieldset>
          <legend>Passions :</legend>
          <input type="checkbox" name="passions[]" id="passion-informatique" value="informatique">
          <label for="passion-informatique"><i class="fas fa-gamepad"></i></label>
          <input type="checkbox" name="passions[]" id="passion-voyages" value="voyages">
          <label for="passion-voyages"><i class="fas fa-plane-departure"></i></label>
          <input type="checkbox" name="passions[]" id="passion-sport" value="sport">
          <label for="passion-sport"><i class="fas fa-running"></i></label>
          <input type="checkbox" name="passions[]" id="passion-lecture" value="lecture">
          <label for="passion-lecture"><i class="fas fa-book-open"></i></label>
        </fieldset>
        <button class="border-solid border-2 border-black-500 p-4" type="submit">Envoyer</button>
      </form>
    </section>
  </main>
  <br>
  <footer class="text-blue-600 flex-row justify-items-center">
    <ul>
      <li><a href="index.php">Accueil</a></li>
      <li><a href="#">Inscription</a></li>
      <li><a href="#">Connexion</a></li>
      <li><a href="#">Rechercher</a></li>
    </ul>
    <a href="https://github.com/leopold-gauthier" target="_blank"><i class="fa-brands fa-github"></i></a>
  </footer>
</body>

</html>