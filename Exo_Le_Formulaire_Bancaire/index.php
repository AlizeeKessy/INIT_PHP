
  <?php include "header.php"; ?>

  <form name="form" action="check.php" method="POST" class="bg bg-white p-3 bg-opacity-25" style="width: 60%; height: auto;" id="formulaire-bancaire">
    <div>
      <label for="lname" class="form-label">NOM</label>
      <input name="lname" type="text" class="form-control" id="lname" required />
      <span class="error-message" id="error-lname"></span>
    </div>
    <div>
      <label for="fname" class="form-label">PRENOM</label>
      <input name="fname" type="text" class="form-control" id="fname" required />
      <span class="error-message" id="error-fname"></span>
    </div>
    <div class="form-area">
      <label for="date-naissance">Date de naissance</label> <br />
      <input type="text" id="date-naissance" name="date-naissance" placeholder="jj/mm/aaaa" required />
      <span class="error-message" id="error-date"></span>
    </div>
    <div class="email">
      <label for="email" class="form-label">e-mail</label>
      <div class="input-group">
        <span class="input-group-text">@</span>
        <input type="email" name="email" class="form-control" id="email" required />
        <span class="error-message" id="error-email"></span>
      </div>
    </div>
    <div class="col-md-6">
      <label for="code-confidentiel" class="form-label">Code confidentiel</label>
      <input type="text" name="code-confidentiel" class="form-control" id="code-confidentiel" required />
      <span class="error-message" id="error-code"></span>
    </div>
    <br />
    <div class="col-12">
      <input class="btn btn-success border-white" id="submitButton" type="submit" value="Envoyer" />
      <input type="reset" id="reset-button" class="btn btn-success border-white" value="Annuler" />
    </div>
  </form>
  <div id="modal" class="modal hidden">
    <div class="modal-content">
      <p>Vos informations seront transmises au serveur pour traitement. <br />Nous sommes ravis de vous compter parmi nos clients.</p>
      <button id="close-modal">Fermer</button>
    </div>
  </div>
  
  <!-- Inclusion du fichier footer.php -->
  <?php include "footer.php"; ?>

