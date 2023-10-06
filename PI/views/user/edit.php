<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Perfil</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="../../public/assets/img/logo.jpeg" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link href="../../public/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../public/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../../public/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../../public/assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="../../public/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="../../public/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../../public/assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <link href="../../public/assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- barra de pesquisa -->
  <?php Import::importComponent('/content/header');?>

  <!-- ======= Sidebar ======= -->
  <?php Import::importComponent('/content/navbar');?>


  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="card mt-5">

                <div class="card-body " style="width: 100vh;">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4 ">Edite seus dados</h5>
                </div>

                  <form action="/users/user/update" method="POST" class="row g-3 needs-validation" novalidate>

                    <div class="col-6">
                      <label for="yourName" class="form-label">Nome</label>
                      <input type="text" name="firstname" class="form-control" required id="yourName" 
                      value= "<?php  $userData=Auth::userAuth(); echo $userData['firstname']?>"
                      required>
                      <div class="invalid-feedback">Por favor, coloque seu nome!</div>
                    </div>

                    <div class="col-6">
                      <label for="yourName" class="form-label">Sobrenome</label>
                      <input type="text" name="lastname" class="form-control" required id="yourName"
                      value= "<?php  $userData=Auth::userAuth(); echo $userData['lastname']?>"
                       required>
                      <div class="invalid-feedback">Por favor, coloque seu sobrenome!</div>
                    </div>

                    <div class="col-6">
                      <label for="yourName" class="form-label">País</label>
                      <input type="text" name="country" class="form-control" id="yourName" required 
                      value= "<?php  $userData=Auth::userAuth(); echo $userData['country']?>"
                       required>
                      <div class="invalid-feedback">Por favor, coloque seu país!</div>
                    </div>

                    <div class="col-6">
                      <label for="yourName" class="form-label">Cidade</label>
                      <input type="text" name="city" class="form-control" required  id="yourName" 
                      value= "<?php  $userData=Auth::userAuth(); echo $userData['city']?>"
                      required>
                      <div class="invalid-feedback">Por favor, coloque sua cidade!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourName" class="form-label">Endereço</label>
                      <input type="text" name="address" class="form-control" id="yourName" required 
                      value= "<?php  $userData=Auth::userAuth(); echo $userData['address']?>"
                      required>
                      <div class="invalid-feedback">Por favor, coloque seu endereço!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourName" class="form-label">Trabalho</label>
                      <input type="text" name="work" class="form-control" id="yourName" required  
                      value= "<?php  $userData=Auth::userAuth(); echo $userData['work']?>"
                      required>
                      <div class="invalid-feedback">Por favor, coloque seu trabalho!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourName" class="form-label">Telefone</label>
                      <input type="number" name="telephone" class="form-control" id="yourName" required 
                      value= "<?php  $userData=Auth::userAuth(); echo $userData['telephone']?>"
                       required>
                      <div class="invalid-feedback">Por favor, coloque seu telefone!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourEmail" class="form-label"> E-mail</label>
                      <input type="email" name="email" class="form-control" id="yourEmail" required 
                      value= "<?php  $userData=Auth::userAuth(); echo $userData['email']?>"
                       required>
                      <div class="invalid-feedback">Por favor, coloque seu e-mail!</div>
                    </div>
                  
                    <div class="mb-3">
                      <label for="" class="form-label">Curso</label>
                      <select required class="form-select " name="course" id="">
                        <option selected value="<?php  $userData=Auth::userAuth(); echo $userData['course']?>"><?php  $userData=Auth::userAuth(); echo $userData['course']?></option>
                        
                        <option value="Informática">Informática</option>
                        <option value="Vestuário">Vestuário</option>
                        <option value="Têxtil">Têxtil</option>
                        <option value="Eletrotécnica">Eletrotécnica</option>
                      </select>
                    </div>

                    <div class="col-12">
                      <label for="yourEmail" class="form-label"> Sobre mim</label>
                      <textarea  name="about" class="form-control" required><?php $userData=Auth::userAuth(); echo $userData['about']?></textarea>
                      <div class="invalid-feedback">Por favor, coloque algo sobre você</div>
                    </div>


                    <div class="col-12 d-flex justify-content-center">
                      <button class="btn btn-success w-50 " type="submit">Editar</button>
                    </div>

                  </form>

                </div>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->



  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
     <strong><span><p> © Copyright 2023 | Instituto Federal de Educação, Ciência e Tecnologia do Rio Grande do Norte</p></span>
    </div>
  
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../../public/assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="../../public/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../public/assets/vendor/chart.js/chart.umd.js"></script>
  <script src="../../public/assets/vendor/echarts/echarts.min.js"></script>
  <script src="../../public/assets/vendor/quill/quill.min.js"></script>
  <script src="../../public/assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="../../public/assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="../../public/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../../public/assets/js/main.js"></script>

</body>

</html>