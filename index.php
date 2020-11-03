<!DOCTYPE html>
<html>
    <head>
        <title>E-VOTING</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>
    <body>
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="login.php">Login</a>
            <a href="gallery.html">Gallery</a>
            <a href="about.html">About</a>
            <a href="contact.html">Contact</a>
          </div>
          
          <div id="main">
              <div class="row">
                  <div class="col-sm-4">
                    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
                  </div>
                  <div class="col-sm-4" style="text-align: center; margin-right: 10%;">
                    <h1>E-VOTING POLITEKNIK STMI JAKARTA</h1>
                    <p>Ayo Pilih Jangan Golput</p>
                  </div>
              </div>
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="images/mount.jpeg" alt="First slide" height="500px">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="images/pantai.jpg" alt="Second slide" height="500px">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="images/kota.jpg" alt="Third slide" height="500px">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" ></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </br>
            </div>
            <div class="container">
                <h2>Agenda Hari ini ?</h2>
                <div class="card-group">
                    <div class="card">
                        <div class="zoomin">
                            <img class="card-img-top" src="images/vote.jpg" alt="Card image cap">      
                        </div>
                     
                      <div class="card-body">
                        <h5 class="card-title">Pemilihan Ketua Angkatan 2020</h5>
                        <p class="card-text">Coming Soon!</p>
                      </div>
                      <div class="card-footer">
                        <small class="text-muted">06/11/2020</small>
                      </div>
                    </div>
                    <div class="card">
                        <div class="zoomin">
                            <img class="card-img-top" src="images/vote.jpg" alt="Card image cap">
                        </div>
                      <div class="card-body">
                          
                        <h5 class="card-title">Hasil Pemilihan Ketua Angkatan 2020</h5>
                        <p class="card-text">Coming Soon!</p>
                      </div>
                      <div class="card-footer">
                        <small class="text-muted">----</small>
                      </div>
                    </div>
                    <div class="card">
                        <div class="zoomin">
                            <img class="card-img-top" src="images/vote.jpg" alt="Card image cap">
                        </div>
                      
                      <div class="card-body">
                        <h5 class="card-title">Pemilihan Presma dan Wapresma 2020</h5>
                        <p class="card-text">Coming Soon!</p>
                      </div>
                      <div class="card-footer">
                        <small class="text-muted">----</small>
                      </div>
                    </div>
                  </div>
            </div>
            
        </div>
          
          <script>
          function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
            document.getElementById("main").style.marginLeft = "250px";
            document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
          }
          
          function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("main").style.marginLeft= "0";
            document.body.style.backgroundColor = "white";
          }
          </script>
    </body>
</html>