<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>WineCorporation Co.Ltd</title>
<!--
Stacked Template
http://www.templatemo.com/tm-505-stacked
-->
        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/templatemo-style.css">
            <script type="text/javascript">
              function CheckBlank(){
                  if(frm1.uname2.value == ''){
                      alert("Please Enter Username.")
                      frm1.uname2.focus()
                      return false
                    }
                  else if(frm1.pass2.value == ''){
                    alert("Please Enter Password.")
                    frm1.pass2.focus()
                    return false
                  }

                }

            </script>
    </head>
    <body>

        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <nav class="nav">
          <div class="burger">
            <div class="burger__patty"></div>
          </div>

          <ul class="nav__list">
            <li class="nav__item">
              <a href="home1.php" class="nav__link c-blue"><img src="img/home-icon.png"></a>
            </li>
            <li class="nav__item">
              <a href="loginV3.php" class="nav__link c-yellow scrolly"><img src="img/about-icon.png"></a>
            </li>
            <li class="nav__item">
              <a href="registerV3.php" class="nav__link c-red"><img src="img/layout_icon.png" alt="" width="50px" height="50px"></a>
            </li>
          </ul>
        </nav>
        <section class="panel b-blue" id="1">
          <article class="panel__wrapper">
            <div class="panel__content">
              <div class="container">
                <div class="row">
                  <div class="col-md-8 col-md-offset-2">
                    <div class="home-content">
                      <div class="home-heading">

                      </div>
                      <div class="row">
                        <div class="col-md-12">
                            <h1 align = 'center'><em> &nbsp; WINEKRUB</em> &nbsp;<hr width="80%" size="10px" color="red"><p> Log in</h1>
                            <form name="frm1" align = 'center'method="post" action="home1.php" onsubmit="return CheckBlank()">
                            <b style="color:white">Username :</b> <input type="text" pattern = "<?=$_POST['uname1']?>" title = "username do not match" placeholder="Enter username"  name="uname2" id="uname2"/>
                            <b style="color:white">Password :</b> <input type="password" pattern="<?=$_POST['pass1']?>" title="password do not match"
                             placeholder="Enter your password"   name="pass2" id="pass2"/>
                            <br>
                            <br>
                            <p align = 'center'><input type="submit" name = "bt" id="btn2" value="Log in" /></p>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="footer">
                <p>Copyright &copy; Designed by ไวน์ไงงงไวน์เองงง</p>
              </div>
            </div>
          </article>
        </section>

          <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
          <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
          <script src="js/vendor/bootstrap.min.js"></script>
          <script src="js/plugins.js"></script>
          <script src="js/main.js"></script>
    </body>
</html>
