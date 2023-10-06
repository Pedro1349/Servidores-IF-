<header id="header" class="header fixed-top d-flex align-items-center">
    <img src="../../public/assets/img/logo.JPEG" style="width: 50px; height: 50px;">
    
    <div class="d-flex align-items-center justify-content-between m-3" style="max-height: 15px">
      <a href="/dash" class="logo d-flex align-items-center">
        
        <span class="d-none d-lg-block ">Recanto Federal</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->


    <div class="search-bar ">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input class="rounded-5" type="text" name="query" placeholder="Pesquisar" title="Enter search keyword" >
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">0</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              Você não tem novas notificações
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">Ver tudo</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
            </li>
            <li class="dropdown-footer">
              <a href="#">Mostrar todas as notificações</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown">
          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-chat-left-text"></i>
            <span class="badge bg-success badge-number">3</span>
          </a><!-- End Messages Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              Você tem 3 novas notificações
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">Ver tudo</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="../../public/assets/img/icon_login.png" alt="" class="rounded-circle">
                <div>
                  <h4>Wandson Guimarães</h4>
                  <p>E aí, meu chapa! Você viu a nova publicação de materiais do curso de Informática?
                    Os recursos parecem ser muito úteis para nós, 
                    estudantes da área!</p>
                  <p>4 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="../../public/assets/img/icon_login.png" alt="" class="rounded-circle">
                <div>
                  <h4>Kauã Bayron</h4>
                  <p>E ai meu consagrado como vai ? você viu a nova públição de material do curso de Eletrotécnica. Os matérias são ótimos... </p>
                  <p>2 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="../../public/assets/img/icon_login.png" alt="" class="rounded-circle">
                <div>
                  <h4>Andressa Carla</h4>
                  <p>Olá amigo(a), Acabei de ver os materiais atualizados para os cursos de Vestuário e Têxtil eles vão me ajudar muito 📚👚...</p>
                  <p>8 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="dropdown-footer">
              <a href="#">Mostrar todas as notificações</a>
            </li>

          </ul>

        </li> 

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="../../public/assets/img/icon_login.png" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2"> <?php $name= Auth::userName(); echo $name['firstname']; ?> </span>
          </a>

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6> <?php $name= Auth::userName(); echo $name['firstname']; ?> </h6>
              <span><?php $course= Auth::userCourse(); echo $course ?></span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="/users/user">
                <i class="bi bi-person"></i>
                <span>Meu Perfil</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="/users/user">
                <i class="bi bi-gear"></i>
                <span>Configuração</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="/errors/notfound">
                <i class="bi bi-question-circle"></i>
                <span>Ajuda</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            
            <li>
              <a class="dropdown-item d-flex align-items-center" href="/logout ">
              <i class="bi bi-box-arrow-right"></i> 
                <span>Sair</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->
