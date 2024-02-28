<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Quantum Leap</title>
</head>
<body>
    <div id="main" class="site-main snipcss-WlPll" role="main">
        <ul id="home-navigation" class="main-navigation" role="navigation">
          <li class="menu-item menu-item-type-post_type_archive menu-item-object-film menu-item-137 slug-film">
            <a href="user/login">
              Login
            </a>
          </li>
          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-140 slug-about">
            <a href="upload">
              Upload
            </a>
          </li>
          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-140 slug-about">
            <a href="about">
              About
            </a>
          </li>
        </ul>
      </div>

    <form method="POST", action="" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file">
        <input type="submit">
    </form>
</body>
</html>