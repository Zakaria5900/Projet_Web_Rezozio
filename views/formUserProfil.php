<!-- <Salah Zakaria OUAICHOUCHE> -->

<section id="authentification" >
   <form method="POST" action="services/login.php"  id="formlogin" class="formulairehidden">
        <!-- <legend>Connexion</legend> -->
  <div class="middle-container feed-container" style="margin-left: 400px;">
      <center>
        <div class="menu-box block" style="height: 455px;">
          <!-- MENU BOX (LEFT-CONTAINER) -->
          <h2 class="titular">Se connecter a Rezozio</h2>
          <ul class="menu-box-menu">

            <?php
            if (isset($erreurCreation) && $erreurCreation)
              echo "<p class='message'>Le compte n'a pas pu être connecter</p>";
            ?>

            <div class="newAccountDiv" style="clear:both;">
               
                <form method="POST" action="services/login.php" id="authentification">
                <label for="login" style="width:100px; display:inline-block; color:white;">Login </label>

                <input type="text" name="login" id="loginInput" required="" autofocus="" 
                style=" color: black;
                      width: 70%;
                            clear: both; 
                            background-color: #FFFFFF;
                        padding: 12px 20px;
                        margin: 8px 30px;
                        display: inline-block;
                        border: 1px solid #ccc;
                        border-radius: 4px;
                        box-sizing: border-box;" /> <br>

                <label for="password" style="width:100px; display:inline-block; color:white;">Mot de passe</label>
                <input type="password" name="password" id="password" required="required" 
                style="color: black;
                width: 70%;
                            clear: both; 
                            background-color: #FFFFFF;
                        padding: 12px 20px;
                        margin: 8px 30px;
                        display: inline-block;
                        border: 1px solid #ccc;
                        border-radius: 4px;
                        box-sizing: border-box;" /> <br>


                <center><button type="submit" name="valid" style="background-color: #11A8AC;
                width: 175px;
                border: none;
                color: white;
                padding: 12px 20px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 4px 2px;
                cursor: pointer;">Se connecter</button></center>

                  <output  for="login password" name="message"></output>
              </form>
              
            </div><br />

          </ul>
        </div>
      </center>


    </div>
    </form>
</section>
<br><br>
<section id="register" class="formulairehidden" >
  <div class="middle-container feed-container" style="margin-left: 400px;">


      <center>
        <div class="menu-box block" style="height: 455px;">
          <!-- MENU BOX (LEFT-CONTAINER) -->
          <h2 class="titular">Créer votre nouveau compte</h2>
          <ul class="menu-box-menu">

            <?php
            if (isset($erreurCreation) && $erreurCreation)
              echo "<p class='message'>Le compte n'a pas pu être créé</p>";
            ?>

            <div class="newAccountDiv" style="clear:both;">
               
                <form method="POST" action="services/createUser.php" id="form_register">
                <label for="login" style="width:100px; display:inline-block; color:white;">Login </label>

                <input type="text" name="userId" id="login" required="" autofocus="" 
                style=" color: black;
                      width: 70%;
                            clear: both; 
                            background-color: #FFFFFF;
                        padding: 12px 20px;
                        margin: 8px 30px;
                        display: inline-block;
                        border: 1px solid #ccc;
                        border-radius: 4px;
                        box-sizing: border-box;" /> <br>




                <label for="prenom" style="width:100px; display:inline-block; color:white;">Pseudo </label>
                <input type="text" name="pseudo" id="pseudo" required="" autofocus="" 
                style="color: black;
                width: 70%;
                            clear: both; 
                            background-color: #FFFFFF;
                        padding: 12px 20px;
                        margin: 8px 30px;
                        display: inline-block;
                        border: 1px solid #ccc;
                        border-radius: 4px;
                        box-sizing: border-box;" /> <br>

                


                <label for="password" style="width:100px; display:inline-block; color:white;">Mot de passe</label>
                <input type="password" name="password" id="password" required="required" 
                style="color: black;
                width: 70%;
                            clear: both; 
                            background-color: #FFFFFF;
                        padding: 12px 20px;
                        margin: 8px 30px;
                        display: inline-block;
                        border: 1px solid #ccc;
                        border-radius: 4px;
                        box-sizing: border-box;" /> <br>



                  

                <center><button type="submit" name="valid" style="background-color: #11A8AC;
                width: 175px;
                border: none;
                color: white;
                padding: 12px 20px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 4px 2px;
                cursor: pointer;">Créer mon compte</button></center>

                  <output  for="login password" name="message"></output>
              </form>
              
            </div><br />

          </ul>
        </div>
      </center>


    </div>
</section>


