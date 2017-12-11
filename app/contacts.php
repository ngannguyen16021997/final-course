<?php require_once "../db/mysql.php"; ?>
<?php
  define("URL_IMAGE", "http://localhost/final-course/public/uploads/");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include "lib.php"; ?>
    <style type="text/css">
      .mytop li:nth-child(1) a{
        opacity: .7 !important;
        border: 1px solid #22c5a8;
      }
      .mytop li:nth-child(1):hover a{
        opacity: .9 !important;
        border: 1px solid #fff;
      }
      .mytop li:nth-child(4) a{
        opacity: 1 !important;
        border: 1px solid #fff;
      }
    </style>
  </head>
  <body>
    <!-- Navigation -->
    <?php include "menu.php"; ?>
    <!-- Page Content -->
    <div class="container">
      <div class="row">
                  <?php include "slide-left.php"; ?>
        
        <!-- /.col-lg-3 -->
        <div class="col-lg-9">

          <?php include "slide.php"; ?>
          <div class="row">
            <form method="post" action="admin/msg/create.php" class="col-lg-12">
              <div>
                <h1>Gửi tin nhắn để liên hệ</h1>
              </div>
              <div class="row mt-2">
                <div class="col-lg-8">
                  <label>Tên:</label>
                  <input class="form-control" type="text" name="name" required>
                </div>
                <div class="col-lg-4">
                  <label>SĐT:</label>
                  <input class="form-control" type="number" name="sdt" required>
                </div>
              </div>
              <div class="row mt-2">
                <div class="col-lg-12">
                  <label>Mail:</label>
                  <input class="form-control" type="email" name="email" required>
                </div>
              </div>
              <div class="row mt-2">
                <div class="col-lg-12">
                  <label>Tin nhắn:</label>
                  <textarea class="form-control" name="msg" rows="6"  required></textarea>
                </div>
              </div>
              <!-- <div class="row mt-2 ml-1">
                <div class="col-lg-12">
                  <input type="checkbox" name="20GG" value="OK"> Tôi đồng ý chấp thuận các <a href="#">điều khoản</a> khi gửi tin nhắn
                </div>
              </div> -->
              <br>
              <div class="row">
                <div class="col-lg-12">
                  <button class="btn btn-success col-lg-12">Đồng ý và gửi đi</button>
                </div>
              </div>
              <div class="row text-center">
                <i class="flash"><?php if(isset($_SESSION["flash"])) echo $_SESSION["flash"]; ?></i>
              </div>
            </form>
          </div>
          <!-- /.row -->
        </div>
        <!-- /.col-lg-9 -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
    <!-- Footer -->
    <?php include "footer.php"; ?>
        <style>
#mySidenav a {
    position: absolute;
    left: -110px;
    transition: 0.3s;
    padding: 15px;
    width: 170px;
    text-decoration: none;
    font-size: 20px;
    color: white;
    border-radius: 0 5px 5px 0;
    position: fixed;
}


#mySidenav a:hover {
    left: 0;
}

#about {
    top: 60px;
    background-color: #4CAF50;
}
#about i{
    margin-left: 25px;
}

#blog {
    top: 120px;
    background-color: #2196F3;
}
#blog i{
  margin-left: 50px;
}

#projects {
    top: 180px;
    background-color: #f44336;
}
#projects i{
    margin-left: 35px;
}

#contact {
    top: 240px;
    background-color: #555
}
#contact i{
  margin-left: 25px;
}
#skype{
	top: 300px;
    background-color: #4CAF50;
}
#skype i{
	 margin-left: 50px;
}
</style>

<div id="mySidenav" class="sidenav">
  <a href="#" id="about">Facebook<i class="fa fa-facebook-official" aria-hidden="true"></i></a>

  <a href="#" id="blog">Twitter<i class="fa fa-twitter" aria-hidden="true"></i></a>
  <a href="#" id="projects">Youtube<i class="fa fa-youtube" aria-hidden="true"></i></a>
  <a href="#" id="contact">Instagram<i class="fa fa-instagram" aria-hidden="true"></i></a>
    <a href="#" id="skype">Skype<i class="fa fa-skype" aria-hidden="true"></i>></a>
</div>
 
    <!-- Bootstrap core JavaScript -->
    <script src="../public/js/jquery.min.js"></script>
    <script src="../public/js/bootstrap.min.js"></script>
    <script src="../public/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
