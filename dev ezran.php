<?php 

session_start();

if (!isset($_SESSION['email'])) {
    header("Location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dev Ezran Page </title>
    <!-- Font Awesome CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet"/>
    <!-- Stylesheet -->
    <link rel="stylesheet" href= "hover_style.css" />
  </head>
  <body>
    
    <video autoplay loop muted >
      <source src="images/space.mp4" type="video/mp4">
    </video>

    <div class="button">  
      <i name="logout" class="fa-solid fa-right-from-bracket fa-3x" onclick="window.location.href='logout.php'" ></i>
    </div>  

    <section>
      <div class="row"> 
        <img src="images/logo.png" alt="" ; onclick="window.location.href='https://www.artaniscloud.com'"></img>
      </div>
      <div class="row">
        <div class="column"><a class="link" href="https://acesv2.ezran.my/">
          <div class="card">
            <div class="icon-wrapper">
              <i class="fas fa-desktop"></i>
            </div>
            <h3>ACES | 4.0 Version 2</h3> 
          </div></a>
        </div>
        <div class="column"><a class="link" href="https://www.showcar.ezran.my/">
          <div class="card">
            <div class="icon-wrapper">
              <i class="fas fa-car"></i>
            </div>
            <h3>Portal <br> Showcar</h3>
          </div></a>
        </div>
        <div class="column"><a class="link" href="https://htckl-mockup-1.ezran.my/">
          <div class="card">
            <div class="icon-wrapper">
              <i class="fas fa-user-secret"></i>
            </div>
            <h3>Portal <br> HTCKL 2.0</h3>
          </div></a>
        </div>
        <div class="column"><a class="link" href="https://webpro.aces.ecerdc.com.my/">
          <div class="card">
            <div class="icon-wrapper">
              <i class="fas fa-gear"></i>
            </div>
            <h3>ACES | 4.0 Pro Version</h3>
          </div></a>
        </div>
        <div class="column"><a class="link" href="https://ekilang.ezran.my/">
          <div class="card">
            <div class="icon-wrapper">
              <i class="fas fa-industry"></i>
            </div>
            <h3>e-Kilang <br> Malaysian Palm Oil Board (MPOB)</h3>
          </div></a>
        </div>
        <div class="column"><a class="link" href="https://www.unescoihp.ezran.my/">
          <div class="card">
            <div class="icon-wrapper">
              <i class="fa-brands fa-wordpress"></i>
            </div>
            <h3>Portal <br> UNESCO IHP Malaysia </h3>
          </div></a>
        </div>
        <div class="column"><a class="link" href="https://www.ekbk.ezran.my/">
          <div class="card">
            <div class="icon-wrapper">
              <i class="fas fa-folder-open"></i>
            </div>
            <h3>e-KBK <br> Jabatan Perhutanan Semenanjung Malaysia (JPSM) </h3>
          </div></a>
        </div>
        <div class="column"><a class="link" href="https://www.doe.gov.my/">
          <div class="card">
            <div class="icon-wrapper">
              <i class="fas fa-desktop"></i>
            </div>
            <h3>Portal <br> Jabatan Alam Sekitar </h3>
          </div></a>
        </div> 
        <div class="column"><a class="link" href="https://www.asset-management.ezran.my/login">
          <div class="card">
            <div class="icon-wrapper">
              <i class="fa-brands fa-dev"></i>
            </div>
            <h3>Asset Managgemnt R&D</h3>
          </div></a>
        </div>
        <div class="column"><a class="link" href="https://www.upen.ezran.my/">
          <div class="card">
            <div class="icon-wrapper">
              <i class="fas fa-mosque"></i>
            </div>
            <h3>Sistem Bantuan Kewangan Rumah Ibadat Selain Islam (RISI) 
            <br><br> Unit Perancang Ekonomi Negeri (UPEN) Selangor</h3>
          </div></a>
        </div>
        <div class="column"><a class="link" href="https://vms.icep.com.my/">
          <div class="card">
            <div class="icon-wrapper">
              <i class="fas fa-database"></i>
            </div>
            <h3>Venue Management System
              <br><br> International Conference and Exhibition Professionals (iCEP)</h3>
          </div></a>
        </div>
        <div class="column"><a class="link" href="https://www.ecost.ezran.my/">
          <div class="card">
            <div class="icon-wrapper">
              <i class="fas fa-wallet"></i>
            </div>
            <h3>e-Cost <br><br> Malaysian Palm Oil Board (MPOB) </h3>
          </div></a>
        </div>
        <div class="column"><a class="link" href="https://dev.ezran.my/marketplace/home">
          <div class="card">
            <div class="icon-wrapper">
              <i class="fas fa-square-poll-vertical"></i>
            </div>
            <h3>Marketplace</h3>
          </div></a>
        </div>
        <div class="column"><a class="link" href="https://webapp.aces.ecerdc.com.my/">
          <div class="card">
            <div class="icon-wrapper">
              <i class="fas fa-paste"></i>
            </div>
            <h3>ACES | 4.0 </h3>
          </div></a>
        </div>
        <div class="column"><a class="link" href="https://www.istiadat.gov.my//">
          <div class="card">
            <div class="icon-wrapper">
              <i class="fas fa-microchip"></i>
            </div>
            <h3>Portal <br> Bahagian Istiadat Dan Urusetia Antarabangsa (BIUPA)</h3>
          </div></a>
        </div>
        <div class="column"><a class="link" href="https://espatial.ezran.my/">
          <div class="card">
            <div class="icon-wrapper">
              <i class="fas fa-feather"></i>
            </div>
            <h3>e-Spatial <br> Jabatan Perhutanan Semenanjung Malaysia (JPSM)</h3> 
          </div></a>
        </div>
        <div class="column"><a class="link" href="https://edeclare.ezran.my/">
          <div class="card">
            <div class="icon-wrapper">
              <i class="fas fa-layer-group"></i>
            </div>
            <h3>e-Declare <br> Malaysian Communications and Multimedia Commision (MCMC)</h3>
          </div></a>
        </div>
        <div class="column"><a class="link" href="https://www.rurallink.gov.my/">
          <div class="card">
            <div class="icon-wrapper">
              <i class="fas fa-clone"></i>
            </div>
            <h3>Portal <br> Kementerian Pembangunan Luar Bandar (KPLB)</h3>
          </div></a>
        </div>
        <div class="column"><a class="link" href="https://pokli.com.my/">
          <div class="card">
            <div class="icon-wrapper">
              <i class="fas fa-receipt"></i>
            </div>
            <h3>POKLI e-Commerce</h3>
          </div></a>
        </div>
        <div class="column"><a class="link" href="https://htckl.water.gov.my/">
          <div class="card">
            <div class="icon-wrapper">
              <i class="fas fa-tree"></i>
            </div>
            <h3>Portal <br> Humid Tropics Centre Kuala Lumpur (HTCKL)</h3>
          </div></a>
        </div>
        <div class="column"><a class="link" href="https://ezran.my/mms2/login.php">
          <div class="card">
            <div class="icon-wrapper">
              <i class="fas fa-sitemap"></i>
            </div>
            <h3>Maintanance Management <br> System</h3>
          </div></a>
        </div>
        <div class="column"><a class="link" href="https://mygdx.malaysia.gov.my/ms">
          <div class="card">
            <div class="icon-wrapper">
              <i class="fas fa-desktop"></i>
            </div>
            <h3>MAMPU MyGDX</h3>
          </div></a>
        </div>
        <div class="column"><a class="link" href="http://waris.water.gov.my/">
          <div class="card">
            <div class="icon-wrapper">
              <i class="fas fa-water"></i>
            </div>
            <h3>Water Resource Index <br> System</h3>
          </div></a>
        </div>
        <div class="column"><a class="link" href="https://ezran.my/drone/">
          <div class="card">
            <div class="icon-wrapper">
              <i class="fas fa-helicopter"></i>
            </div>
            <h3>CAAM Drone</h3>
          </div></a>
        </div>
      </div>
    </section>
  </body>
</html>
