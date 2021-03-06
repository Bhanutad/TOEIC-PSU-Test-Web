<!doctype html>
<html lang="en">
  <head>
    <title>TOEIC PSU Phuket Test Online System</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
      body,
html {
  height: 100%;
}
.bg {
  /* The image used */
  background-image: url("https://www.phuket.psu.ac.th/wp-content/uploads/2019/01/g3.jpg");

  /* Full height */
  height: 100%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.container-fluid{
    padding: 50px;
    text-align: center;
  color:white;
}
.button {
    background-color: white;
    border: none;
    color: black;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 20px;
    margin: 4px 2px;
    opacity: 0.6;
    transition: 0.3s;
    cursor: pointer;
    border-radius: 20px;
  }
  .button:hover {opacity: 1}
  .input{
    background-color: white;
    border: none;
    color: black;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 22px;
    margin: 4px 2px;
    opacity: 0.6;
    transition: 0.3s;
    cursor: pointer;
    border-radius: 40px;
  }
  .input:hover {opacity: 1}
    </style>
  </head>
  <body>
    <div class="bg">
      <div class="container-fluid">
        <h1>PSU Phuket TOEIC Test Online System</h1>
      </div>
      <form action="login.php" method="post" name="AdminLogIn">
      <div class="container">
        <div class="row">
          <div class="col-md-4"></div>        
          <div class="col-md-4">
              <div class="card-body text-center">
                <h3>Administration Log in</h3><br>
                <div>
                  <input type="text" name="username" class="input" placeholder="Username" required>
                  <br>
                  <input type="password" name="password" class="input" placeholder="Password" required>
                </div>
                <br>
                <input type="submit" class="button" value="LOG IN">
              </div>
          </div>
          <div class="col-md-4" ></div>
        </div>
      </div>
      </form>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>