<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/44c9193141.js" crossorigin="anonymous"></script>
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

        <fieldset>
          <legend>Informations personnelles :</legend>
          <label for="prenom">Prénom :</label>
          <input type="text" name="prenom" id="prenom" required>
          <br>
          <label for="nom">Nom :</label>
          <input type="text" name="nom" id="nom" required>
          <br>
          <label for="adresse">Adresse :</label>
          <input type="text" name="adresse" id="adresse" required>
        </fieldset>

        <fieldset>
          <legend>Informations de connexion :</legend>
          <label for="email">Adresse email :</label>
          <input type="email" name="email" id="email" required>
          <br>
          <label for="password">Mot de passe :</label>
          <input type="password" name="password" id="password" minlength="8" required>
          <br>
          <label for="password-confirmation">Confirmation du mot de passe :</label>
          <input type="password" name="password-confirmation" id="password-confirmation" minlength="8" required>
        </fieldset>

        <fieldset>
          <legend>Passions :</legend>
          <input type="checkbox" name="passions[]" id="passion-informatique" value="informatique">
          <label for="passion-informatique">Informatique</label>
          <input type="checkbox" name="passions[]" id="passion-voyages" value="voyages">
          <label for="passion-voyages">Voyages</label>
          <input type="checkbox" name="passions[]" id="passion-sport" value="sport">
          <label for="passion-sport">Sport</label>
          <input type="checkbox" name="passions[]" id="passion-lecture" value="lecture">
          <label for="passion-lecture">Lecture</label>
        </fieldset>
        <button type="submit">Valider</button>
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