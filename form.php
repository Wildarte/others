<!doctype html>
<html lang="pt-br">
  <head>
    <title>Formulario</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  </head>
  <body>
    
    <header>
        
        <nav class="navbar navbar-dark bg-dark">
            <a class="navbar-brand" style="color: #fff">Navbar</a>
            <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </nav>

    </header>

    <div class="container" style="margin-top: 20px; margin-bottom: 20px; min-height: 70vh">

        <!-- ***************** response ************************ -->

        <?php

            $name = $_POST['name'];
            $email = $_POST['email'];

            if(!empty($name) && !empty($email)){
                echo "<h2 class='h2 text-success'
                style='
                    border: 2px solid #00ff00;
                    border-radius: 5px
                '
                >Envio bem sucessido</h2>";
            }

        ?>

        <!-- *************************************************** -->

        <div class="row">
            <div class="col-12">
                <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                    <div class="form-row">
                        <div class="col-md-6">
                            <label for="username">E-Mail<span class="text-danger">*</span></label>
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text">@</span>
                              </div>
                              <input type="text" class="form-control" id="username" placeholder="" name="email" required oninvalid="this.setCustomValidity('Campo requerido')" 
                              onchange="try{setCustomValidity('')}catch(e){}">
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Nome<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="inputPassword4" name="name" required oninvalid="this.setCustomValidity('Campo requerido')" onchange="try{setCustomValidity('')}catch(e){}">
                        </div>
                    </div>
                    <div class="form-group">
                      <label for="inputAddress">Endereço</label>
                      <input type="text" class="form-control" id="inputAddress" placeholder="" name="address">
                    </div>
                    <div class="form-group">
                      <label for="inputAddress2">Endereço 2(opcional)</label>
                      <input type="text" class="form-control" id="inputAddress2" placeholder="" name="addressOpt">
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputCity">Cidade</label>
                        <input type="text" class="form-control" id="inputCity" name="city">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputState">Estado</label>
                        <select id="inputState" class="form-control">
                          <option selected><soft>Escolha</soft></option>
                          <option value="SP">SP</option>
                          <option value="RJ">RJ</option>
                          <option value="PE">PE</option>
                          <option value="AM">AM</option>
                          <option value="ES">ES</option>
                          <option value="RO">RO</option>
                          <option value="BA">BA</option>
                          <option value="PR">PR</option>
                        </select>
                      </div>
                      
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Assinar</button>
                  </form>
            </div>
        </div>
        
    </div>


    <!-- Footer -->
<footer class="page-footer lighten-5" style="background-color:lightgray; padding-top: 10px;">
  
    <!-- Footer Links -->
    <div class="container text-center text-md-left mt-5">
  
      <!-- Grid row -->
      <div class="row mt-3 dark-grey-text">
  
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mb-4">
  
          <!-- Content -->
          <h6 class="text-uppercase font-weight-bold">Sobre mim</h6>
          <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet,
            consectetur
            adipisicing elit.</p>
  
        </div>
        <!-- Grid column -->
  
        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
  
          <!-- Links -->
          <h6 class="text-uppercase font-weight-bold">Links úteis</h6>
          <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>
            <a class="dark-grey-text" href="#!">Cursos</a>
          </p>
          <p>
            <a class="dark-grey-text" href="#!">Curiosidades</a>
          </p>
          <p>
            <a class="dark-grey-text" href="#!">Portifólio</a>
          </p>
          <p>
            <a class="dark-grey-text" href="#!">Mapa do site</a>
          </p>
  
        </div>
        <!-- Grid column -->
  
        
  
      </div>
      <!-- Grid row -->
  
    </div>
    <!-- Footer Links -->
  
    <!-- Copyright -->
    <div class="footer-copyright text-center text-black-50 py-3">© 2020 Copyright:
      <a class="dark-grey-text" href="https://mdbootstrap.com/"> MDBootstrap.com</a>
    </div>
    <!-- Copyright -->
  
  </footer>
  <!-- Footer -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>