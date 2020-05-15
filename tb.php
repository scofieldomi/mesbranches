<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SMSENDER</title>

  <!-- template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

 
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">

</head>

<body id="page-top">


  <div id="wrapper">

  
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

     
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-envelope-open-text"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SMSENDER</div>
      </a>

    
      <hr class="sidebar-divider my-0">


      <li class="nav-item active">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Tableau de bord</span></a>
      </li>

   
      <hr class="sidebar-divider">

  
      <div class="sidebar-heading">
        Interface
      </div>

     
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-sms"></i>
          <span>Envoyer </span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <!-- <h6 class="collapse-header">ENVOI :</h6> -->
            <a class="collapse-item" href="#" data-toggle="modal" data-target="#individuel" data-whatever="@mdo">Envoi individuel</a>
            <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Open modal for @mdo</button> -->
            <a class="collapse-item" href="#" data-toggle="modal" data-target="#groupee" data-whatever="@mdo">Envoi groupé</a>
          </div>
        </div>
      </li>

 
      <!-- separateur -->
      <!-- <hr class="sidebar-divider"> -->

      <!-- Heading -->
      <!-- <div class="sidebar-heading">
        Addons
      </div> -->

      
         <li class="nav-item">
          <a class="nav-link" href="tables.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Base clientèle</span></a>
        </li>

      <li class="nav-item">
        <a class="nav-link" href="charts.html">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>statistiques</span></a>
      </li>

      
           <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
              <i class="fas fa-fw fa-wrench"></i>
              <span>Paramètre</span>
            </a>
          </li>
    
   

  
      <hr class="sidebar-divider d-none d-md-block">


      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

 
    <div id="content-wrapper" class="d-flex flex-column">


      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Recherche..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

         
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter">3+</span>
              </a>
           
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Alerts Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 12, 2019</div>
                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-success">
                      <i class="fas fa-donate text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 7, 2019</div>
                    $290.29 has been deposited into your account!
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-warning">
                      <i class="fas fa-exclamation-triangle text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 2, 2019</div>
                    Spending Alert: We've noticed unusually high spending for your account.
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
              </div>
            </li>

            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter">7</span>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Message Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div class="font-weight-bold">
                    <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">
                    <div class="status-indicator"></div>
                  </div>
                  <div>
                    <div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>
                    <div class="small text-gray-500">Jae Chun · 1d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">
                    <div class="status-indicator bg-warning"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
                    <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
                    <div class="small text-gray-500">Chicken the Dog · 2w</div>
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">User</span>
                <img class="img-profile rounded-circle" src="img/user.png">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Deconnexion
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tableau de bord</h1>
          </div>

          <!-- Content Row -->
          <div class="row">

           
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Base clientèle</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">50.000</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-users fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

         
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Chiffre d'affaire </div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">215.000 FCFA</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-coins fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">SMS ENVOYER</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">100</div>
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">SMS NON ENVOYER</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Content Row -->

          <div class="jumbotron">
            <h1>Envoi de sms</h1>
            <p class="lead">Un système d’envoi de sms efficace et simple d’utilisation et idéalement adapté aux besoins et attentes des entreprises. SMSENDER trouve une solution à chacune de vos problématiques en communication mobile.</p>
            <a class="btn btn-lg btn-primary" href="#" role="button">Envoyer un sms</a>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; smsender 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Voulez-vous vraiment vous déconnecter ?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          Sélectionnez "Déconnexion" si vous êtes prêt à mettre fin à votre session</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Annuler</button>
          <a class="btn btn-primary" href="index.html">Déconnexion</a>
        </div>
      </div>
    </div>
  </div>


  <!-- Modal envoi individuel -->
  <div class="modal fade" id="individuel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Nouveau Message</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <form id="form_individuel" method="POST" action="public/smsTest.php">
		  
		  <input type="hidden" name="type" value="sendalone" >
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Destinataire:</label>
                  <input type="text" name="numero" class="form-control" id="destinataire_numero">
                </div>
                <div class="form-group">
                  <label for="message-text" class="col-form-label">Message:</label>
                  <textarea class="form-control" name="message" id="destinataire_message"></textarea>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                    <button id="btn_individuel" type="submit" class="btn btn-primary">Envoyer</button>
                </div>
          </form>

        </div>
        <!-- <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
          <button type="submit" class="btn btn-primary">Envoyer</button>
        </div> -->
      </div>
    </div>
  </div>

    <!-- Modal envoi groupé  -->
    <div class="modal fade" id="groupee" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Nouveau Message</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
              <blockquote class="blockquote text-right">
                  <p class="mb-0">Le message ci-dessous sera envoyé à toute votre base clientèle </p>
                  <footer class="blockquote-footer"><cite title="Source Title">Envoi Groupé </cite></footer>
                </blockquote>
                <form id="form_groupe"  method="POST" action="public/smsTest.php">
				 
		          <input type="hidden" name="type" value="sendall">
                    <div class="form-group">
                      <label for="message-text" class="col-form-label">Message:</label>
                      <textarea class="form-control"  name="message"  id="message"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                        <button id="btn_group" type="submit" class="btn btn-primary">Envoyer</button>
                    </div>
                </form>
          </div>

        </div>
      </div>
    </div>
	
	<!-- loader -->
        <div class="modal modal-static" id="processing-modal" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="text-center">
                           <div class="fa-4x">
                            <i style="color:#0071bc;" class="fas fa-spinner fa-spin"></i></div>
                            <p style="padding-top:20px;margin:0px;font-size: 20px;color: #595e62;">Patientez...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- end loader -->


  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

 
  <script src="js/sb-admin-2.min.js"></script>


  <script src="vendor/chart.js/Chart.min.js"></script>


  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>
  
  <!-- JS KEVIN -->
  
  <script src="assets/js/jquery-1.11.2.min.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/plugins/pace/pace.min.js"></script>
    <script src="assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/plugins/viewport/viewportchecker.js"></script>
    <script src="bundle/sweetalert/sweetalert2.all.min.js"></script> 
	
	 <script>
        window.jQuery || document.write('<script src="assets/js/jquery-1.11.2.min.js"><\/script>');
    </script>
   
    <script src="assets/js/scripts.js"></script>
    <!-- END CORE TEMPLATE JS - END -->

  
  
 <script type="text/javascript">
          
        //Fonction verification Number
            


        //Click sur bouton envoi individualisé
            $('#btn_individuel').click(function(){
                $('#form_individuel').submit(); 
				
            });

        //Envoi formulaire d'inscription  
            $('#form_individuel').on('submit', function (e) {
			
                    
                    e.preventDefault();   
					
                    
                    var numero = $('#destinataire_numero').val();
                    var message = $('#destinataire_message').val();
               
                    if(numero.trim() == '' || message.trim() == ''){
                        swal("Erreur!", "Veuillez renseigner tous les champs obligatoire!", "warning");
                    }   
                    else{

                                var $form = $(this);
                                var formdata = (window.FormData) ? new FormData($form[0]) : null;
                                var data = (formdata !== null) ? formdata : $form.serialize();
                    
                                $.ajax({
                                    
                                    url: $form.attr('action'),
                                    type: $form.attr('method'),
                                    contentType: false,
                                    processData: false,
                                    dataType: 'json',
                                    data: data,
                                    beforeSend: function(){
                                        $('#processing-modal').modal('show');
                                    },
                                    success: function(response) {
                                        $('#processing-modal').modal('hide');
                                        if(response[0] == 1){

                                            const toast = swal.mixin({
                                              toast: true,
                                              position: 'top-end',
                                              showConfirmButton: false,
                                              timer: 4000,
                                            });
   
                                            toast({
                                              type: 'success',
                                              title: response[1]
                                            }).then(result => {
                                                $(location).attr('href',"accueil");
                                            })
                                         
                                        }else{
                                            swal("Erreur...",response[1], "error"); 
                                        }
                                    }
                                
                                });
                            }
       
                    
            });
			
			
			
		 //Click sur bouton envoi Groupé:::::	
			 $('#btn_group').click(function(){
                $('#form_groupe').submit(); 
				
            });

        //Envoi formulaire d'inscription  
            $('#form_groupe').on('submit', function (e) {
			
                    
                    e.preventDefault();   
					
                    
                  var message = $('#message').val();
               
                    if(message.trim() == ''){
                        swal("Erreur!", "Veuillez renseigner tous le champs obligatoire!", "error");
                    }   
                    else{

                                var $form = $(this);
                                var formdata = (window.FormData) ? new FormData($form[0]) : null;
                                var data = (formdata !== null) ? formdata : $form.serialize();
                    
                                $.ajax({
                                    
                                    url: $form.attr('action'),
                                    type: $form.attr('method'),
                                    contentType: false,
                                    processData: false,
                                    dataType: 'json',
                                    data: data,
                                    beforeSend: function(){
                                        $('#processing-modal').modal('show');
                                    },
                                    success: function(response) {
                                        $('#processing-modal').modal('hide');
                                        if(response[0] == 1){

                                            const toast = swal.mixin({
                                              toast: true,
                                              position: 'top-end',
                                              showConfirmButton: false,
                                              timer: 4000,
                                            });
   
                                            toast({
                                              type: 'success',
                                              title: response[1]
                                            }).then(result => {
                                                $(location).attr('href',"accueil");
                                            })
                                         
                                        }else{
                                            swal("Erreur...",response[1], "error"); 
                                        }
                                    }
                                
                                });
                            }
       
                    
            });
			
			
    </script>
	
	
	
	

</body>

</html>
