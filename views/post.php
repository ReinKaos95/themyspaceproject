

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>The MySpace Project</title>
    <link rel="stylesheet" href="../css/master.css">
  </head>
  <body  bgcolor="#E5E5E5" text="#000000" alink="#003399" vlink="#003399" link="#003399" >
<div id="wrap">
  <div id="header" style="height: 70px">
    <div id="logo" class="left">
      <img src="../img/Logo.png">
    </div>
    <div class="right" style="vertical-align:middle">
        <a href="#">Login</a>
        <a href="#">Sign Up</a>
        <div class="search">
          <form name="search" id="search" action="" method="post">
            <input type="text" name="search" placeholder="Search Users" style="height: 22px">
            <input type="submit" id="submitBtn" value="Search Users">
          </form>
        </div>
    </div>
    <div class="clear"> </div>
  </div>
  <div id="topnav">
  <a href="#">Home</a> |
  <a href="#">Browse</a> |
  <a href="#">Search</a> |
  <a href="#">Invite</a> |
  <a href="#">Blog</a> |
  <a href="#">Favorites</a> |
  <a href="#">Forum</a> |
  <a href="#">Groups</a> |
  <a href="#">Events</a> |
  <a href="Views/post.php">Music</a>|
  <a href="#">Mission</a>
</div>
<span id="ctl00_Main_SplashDisplay_SplashHeader"></span>
<div id="main">
  <div id="nav"></div>
  <div id="content">
    <h1>List band</h1>
<form autocomplete="off" method="post" action="../logic/post.php">
    <label>nombre</label>
    <input type="text" name="band">
    <br>
    <label>descripcion</label>
    <textarea name="description"></textarea>
    <br>
    <label>comentario</label>
    <textarea name="review"></textarea>
    <input type="submit" name="enviar">
  </form>
</div>
</div>
<!--- <h1>Welcome to the most recent MySpace-core community</h1>
<h3>The goal of this site is achieve and share those old works of the MySpace era, and connect people that likes to return to those years</h3> -->
  </body>
</html>
