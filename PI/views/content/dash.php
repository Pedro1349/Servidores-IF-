<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Recanto Federal</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="../../public/assets/img/logo.jpeg" rel="icon">

  <link href="../../public/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

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

  
  <?php Import::importComponent('/content/header');?>
  
  <!-- ======= Sidebar ======= -->
  
  <?php Import::importComponent('/content/navbar'); ?>

  <main id="main" class="main">

    <div class="pagetitle ">
      <h1>Pagina inicial</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item "><a href="index.html">Pagina inicial</a></li>
          <li class="breadcrumb-item active">Usuário</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

            <form action="/users/comment"  method="post">

              <div class="form-floating" >
                <textarea class="form-control" required name="comment" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                <label for="floatingTextarea2" >O que está acontecendo?</label>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end ">
                  <button class="btn btn-success me-md-1 m-2">Postar</button>
                </div>
              </div>

            </form>

            <?php
              $comment = new Comment(connection());
              $comments=$comment->all();              
              	while($row = $comments->fetchArray()){
                echo "
                    <div class='col-12'>
                    <div class='card p-2'>
      
                      <div class='filter'>
                        <a class='icon' href='#' data-bs-toggle='dropdown'><i class='bi bi-three-dots'></i></a>
                        <ul class='dropdown-menu dropdown-menu-end dropdown-menu-arrow'>
                          <li class='dropdown-header text-start'>
                            <h6>Dados | Poste</h6>
                          </li>
      
                          <li><a class='dropdown-item' href='#'>Bloquear poste</a></li>
                          <li><a class='dropdown-item' href='#'>Deixar de seguir</a></li>
                          <li><a class='dropdown-item' href='#'>Ocultar publicações</a></li>
                        </ul>
                      </div>
      
                      <div class='card-body'>
      
                        <div class='container-fluid ' style='width: 100%; height: 50px;'>
                          
                          <div class='row'>

                            <div class='col'>
                              <a class='nav-link nav-profile d-flex align-items-center pe-0' href='#' data-bs-toggle='dropdown'>
                                <img src='../../public/assets/img/icon_login.png' alt='Profile' class='rounded-circle' style='width: 35; height: 35px;'>
                                <span class='d-none d-md-block ps-2'>".Auth::findUser($row['user_id'])."</span>
                              </a>
                          
                            </div>
                            <div class='col'></div>

                            <div class='col'>
                              <div class='justify-content-end'>
                              ".date("d-m-Y", strtotime($row["created_at"]))."
                              </div>
                            </div>

                          </div>

                        </div>
  
                      <p>".$row['comment']."</p>

                      </div>
      
                    </div>
                  </div>
                  
                ";
              }
            ?>

            <!-- Reports -->
              <div class="col-12">
              <div class="card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Dados | Poste</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Bloquear poste</a></li>
                    <li><a class="dropdown-item" href="#">Deixar de seguir</a></li>
                    <li><a class="dropdown-item" href="#">Ocultar publicações</a></li>
                  </ul>
                </div>

                <div class="card-body">

                  <div class="container-fluid " style="width: 100%; height: 50px;">
                    <div class="row">

                      <div class="col">
                        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                          <img src="../../public/assets/img/icon_login.png" alt="Profile" class="rounded-circle" style="width: 35; height: 35px;">
                          <span class="d-none d-md-block ps-2">Estevam José</span>
                        </a>
                      </div>

                      <div class="col">

                      </div>

                      <div class="col">
                          10-09-2023
                      </div>  
                    </div>
                
                  </div>
                  
                <p>
                  📚🤬 O IFRN precisa mudar! Minha carga de trabalho é insuportável, 
                  decoreba sem sentido, currículo ultrapassado e comunicação nula! 🤯 Vamos 
                  fazer a educação ser uma experiência de aprendizado significativa! 💪✏️ 
                  #EducaçãoMelhor #EscolaRevolucionária #MudançaNecessária</p>

                </div>

              </div>
            </div>

            <div class="col-12">

              <div class="card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Dados | Poste</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Bloquear poste</a></li>
                    <li><a class="dropdown-item" href="#">Deixar de seguir</a></li>
                    <li><a class="dropdown-item" href="#">Ocultar publicações</a></li>
                  </ul>
                </div>

                <div class="card-body">

                  <div class="container-fluid " style="width: 100%; height: 50px;">
                    <div class="row">

                      <div class="col">
                        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                          <img src="../../public/assets/img/icon_login.png" alt="Profile" class="rounded-circle" style="width: 35; height: 35px;">
                          <span class="d-none d-md-block ps-2">Vanesca Hellen</span>
                        </a>

                      </div>
                      <div class="col"></div>
                      <div class="col">
                        09-09-2023
                      </div>
                    </div>
                  
                  </div>
                  <p>
                    🐶❤️ Os cachorros do campus são a melhor parte do meu dia! Não importa o estresse das aulas, esses peludos sempre nos fazem sorrir. 
                    Quem mais adora esses terapeutas caninos não-oficiais? 🐕🐾 #CachorrosDoCampus #FofuraCanina #AmoMeuCampus 🏫😍
                 </p>
                  <img src="../../public/assets/img/dog.jpeg" style="width: 100%; height: 100%;">
                </div>
               
              </div>
            </div>

            <div class="col-12">
              <div class="card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Dados | Poste</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Bloquear poste</a></li>
                    <li><a class="dropdown-item" href="#">Deixar de seguir</a></li>
                    <li><a class="dropdown-item" href="#">Ocultar publicações</a></li>
                  </ul>
                </div>

                <div class="card-body">

                  <div class="container-fluid " style="width: 100%; height: 50px;">

                    <div class="row">
                      <div class="col">
                        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                          <img src="../../public/assets/img/icon_login.png" alt="Profile" class="rounded-circle" style="width: 35; height: 35px;">
                          <span class="d-none d-md-block ps-2">Wandson Guim...</span>
                        </a>
                      </div>
                      <div class="col"></div>

                      <div class="col">
                        08-09-2023
                      </div>
                    </div>

                  </div>
                  <p>
                  
                  🤣💻 Por que o curso de informática do IFRN é como um filme de suspense? 
                   Porque a cada dia que passa, a gente fica mais tenso esperando as atualizações do 
                   Pratica Profissional! 🎥🙈 #CursoDeInformática #IFRN #InformáticaEmSuspense 😂🖥️

                 </p>
                  <img src="../../public/assets/img/meme.jpg" style="width: 100%; height: 100%;">
                </div>
               
              </div>
            </div>
              
            <div class="col-12">
              <div class="card top-selling overflow-auto">

                <div class="card-body pb-0">
                  
                </div>

              </div>
            </div><!-- End Top Selling -->

          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4">

          <!-- Website Traffic -->
          <div class="card">

            <div class="card-body pb-0">
              <h5 class="card-title d-flex justify-content-center text-dark">Cursos | Acessados </h5>

              <div id="trafficChart" style="min-height: 400px;" class="echart"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  echarts.init(document.querySelector("#trafficChart")).setOption({
                    tooltip: {
                      trigger: 'item'
                    },
                    legend: {
                      top: '5%',
                      left: 'center'
                    },
                    series: [{
                      name: 'Inscritos',
                      type: 'pie',
                      radius: ['40%', '70%'],
                      avoidLabelOverlap: false,
                      label: {
                        show: false,
                        position: 'center'
                      },
                      emphasis: {
                        label: {
                          show: true,
                          fontSize: '18',
                          fontWeight: 'bold'
                        }
                      },
                      labelLine: {
                        show: false
                      },
                      data: [{
                          value: 1048,
                          name: 'Informatica'
                        },
                        {
                          value: 735,
                          name: 'Têxtil'
                        },
                    
                        {
                          value: 484,
                          name: 'Vestuário'
                        },
                        {
                          value: 300,
                          name: 'Eletrotécnica '
                        }
                      ]
                    }]
                  });
                });
              </script>

            </div>
          </div><!-- End Website Traffic -->

          <!-- News & Updates Traffic -->
          <div class="card">

            <div class="card-body pb-0  ">
              <h5 class="card-title text-dark d-flex justify-content-center">Notícias do Campus</h5>

              <div class="news">
                <div class="post-item clearfix">
                  <img src="../../public/assets/img/img-robt.jpg" alt="">
                  <h4><a href="#">Aluna do IFRN Vence Competição Nacional de Robótica:</a></h4>
                  <p>Blá, blá, blá, blá, blá, blá, blá, blá, blá, blá, blá, blá, blá, blá, blá. </p>
                </div>

                <div class="post-item clearfix">
                  <img src="../../public/assets/img/img-moda.jpg" alt="">
                  <h4><a href="#">Curso de Moda Apresenta Desfile de Tendências:</a></h4>
                  <p>Blá, blá, blá, blá, blá, blá, blá, blá, blá, blá, blá, blá, blá, blá, blá.</p>
                </div>

                <div class="post-item clearfix">
                  <img src="../../public/assets/img/img-prem.jpg" alt="">
                  <h4><a href="#">Docente do IFRN Recebe Prêmio Nacional por Pesquisa Revolucionária: </a></h4>
                  <p>Blá, blá, blá, blá, blá, blá, blá, blá, blá, blá, blá, blá, blá, blá, blá.</p>
                </div>

                <div class="post-item clearfix">
                  <img src="../../public/assets/img/logo.jpeg" alt="">
                  <h4><a href="#">IFRN Inova na Educação a Distância com Novo Ambiente Virtual de estudo (Recanto Federal):</a></h4>
                  <p>Blá, blá, blá, blá, blá, blá, blá, blá, blá, blá, blá, blá, blá, blá, blá.</p>
                </div>

                <div class="post-item clearfix">
                  <img src="../../public/assets/img/news-5.jpg" alt="">
                  <h4><a href="#">Escândalo de Corrupção Abala a Administração do IFRN:</a></h4>
                  <p>Blá, blá, blá, blá, blá, blá, blá, blá, blá, blá, blá, blá, blá, blá, blá.</p>
                </div>

              </div><!-- End sidebar recent posts-->

            </div>
          </div><!-- End News & Updates -->

        </div><!-- End Right side columns -->

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
       <strong><span><p> © Copyright 2023 | Instituto Federal de Educação, Ciência e Tecnologia do Rio Grande do Norte</p></span></strong>
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
  <script src="assets/js/main.js"></script>

</body>

</html>