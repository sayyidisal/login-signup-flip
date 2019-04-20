
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>login</title>

    <!-- Bootstrap core CSS -->
    <link href="build/css/bootstrap.min.css" rel="stylesheet">
    <link href="build/css/font-awesome.min.css" rel="stylesheet">
    <link href="build/css/style.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">

      <div class="row">

        <div class="col-md-4"></div>
        <div class="col-md-4">



          <div class="flip">
        <div class="card"> 
          <div class="face front"> 
              


            <div class="panel panel-default">

              <form class="form-horizontal">
                
                <br>

                <h1 class="text-center">LOGO</h1>

                <br>
                
                <input class="form-control" placeholder="Username"/>
                <input class="form-control" placeholder="Password"/>
                <p class="text-right"><a href="">Forgot Password</a></p>
                <button class="btn btn-primary btn-block">LOG IN</button>

                <p class="blue">Sign in with</p>

                <p><i class="fa fa-facebook-f fa-lg"></i><i class="fa fa-google-plus fa-lg"></i><i class="fa fa-twitter fa-lg"></i></p>
                <hr>
                <p class="text-center">
                  <a href="#" class="fliper-btn">Create new account?</a>
                </p>
              </form>

            </div>


          </div> 
          <div class="face back"> 
            

              <div class="panel panel-default">

              <form class="form-horizontal">
                
                <br>

                <h1 class="text-center">LOGO</h1>

                <br>
                <label>Basic Information</label>
                <input class="form-control" placeholder="Fullname"/>
                <input class="form-control" placeholder="Email"/>
                <label>Private Information</label>
                <input class="form-control" placeholder="Password"/>
                <input class="form-control" placeholder="Mobile Number"/>
                <button class="btn btn-primary btn-block">SIGN UP</button>


                <p class="text-center">
                  <a href="#" class="fliper-btn">Already have an account?</a>
                </p>
                
              </form>

            </div>




          </div>
        </div>   
      </div>




        </div>
        <div class="col-md-4"></div>

      </div>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="build/js/jquery.min.js"></script>
    <script src="build/js/bootstrap.min.js"></script>
    <script>

    $('.fliper-btn').click(function(){
    $('.flip').find('.card').toggleClass('flipped');

});
    </script>
  </body>
</html>




      