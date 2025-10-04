<!DOCTYPE html>
<html lang="en">
<head>
<title>Modern Cities Portal</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: 'Montserrat', Arial, Helvetica, sans-serif;
  background: #f8f9fa;
  margin: 0;
}

header {
  background: linear-gradient(90deg, #4e54c8 0%, #8f94fb 100%);
  padding: 40px 0 30px 0;
  text-align: center;
  font-size: 40px;
  color: #fff;
  box-shadow: 0 2px 8px rgba(78,84,200,0.1);
  border-radius: 0 0 16px 16px;
}

section {
  max-width: 900px;
  margin: 30px auto;
  background: #fff;
  border-radius: 16px;
  box-shadow: 0 4px 24px rgba(0,0,0,0.07);
  overflow: hidden;
  padding: 0;
}

nav {
  float: left;
  width: 28%;
  background: #f0f2f6;
  padding: 30px 20px;
  min-height: 320px;
  border-right: 1px solid #e0e0e0;
}

nav ul {
  list-style-type: none;
  padding: 0;
}
nav ul li {
  margin-bottom: 18px;
}
nav ul li a {
  display: block;
  padding: 12px 18px;
  color: #4e54c8;
  text-decoration: none;
  font-weight: 600;
  border-radius: 8px;
  transition: background 0.2s, color 0.2s;
}
nav ul li a:hover {
  background: #e0e0e0;
  color: #222;
}

article {
  float: left;
  padding: 30px 32px;
  width: 72%;
  background-color: #fff;
  min-height: 320px;
}

section::after {
  content: "";
  display: table;
  clear: both;
}

footer {
  background: linear-gradient(90deg, #4e54c8 0%, #8f94fb 100%);
  padding: 18px 0;
  text-align: center;
  color: #fff;
  font-size: 18px;
  margin-top: 40px;
  border-radius: 16px 16px 0 0;
  box-shadow: 0 -2px 8px rgba(78,84,200,0.08);
}

@media (max-width: 800px) {
  section {
    max-width: 100%;
    margin: 10px;
    border-radius: 8px;
  }
  nav, article {
    float: none;
    width: 100%;
    min-height: auto;
    border-right: none;
    padding: 20px 12px;
  }
}

@media (max-width: 600px) {
  header {
    font-size: 28px;
    padding: 24px 0 18px 0;
    border-radius: 0 0 8px 8px;
  }
  footer {
    font-size: 15px;
    padding: 12px 0;
    border-radius: 8px 8px 0 0;
  }
}
</style>
</head>
<body>

<div style="max-width:900px;margin:30px auto 0 auto;padding:0 16px;">
  <h2 style="color:#4e54c8;font-size:28px;margin-bottom:10px;font-family:'Montserrat',Arial,sans-serif;">Welcome to the Cities Portal</h2>
  <p style="color:#444;font-size:17px;margin-bottom:8px;">Explore information about London, Paris, and Tokyo. Select a city from the menu to view details.</p>
  <p style="color:#888;font-size:15px;">Resize the browser window to see the responsive effect.</p>
</div>

<header>
  <h2>Cities</h2>
</header>

<section>
  <nav>
    <ul>
      <li><a href="home_page.php?page=london">London</a></li>
      <li><a href="home_page.php?page=paris">Paris</a></li>
      <li><a href="home_page.php?page=tokyo">Tokyo</a></li>
    </ul>
  </nav>
  
  <article>
   <!-- content area -->
    <?php
    if(isset($_GET['page'])){
        $page=$_GET['page'];
        switch($page){
            case'london';
            include 'london.php';
            break;
            case'paris';
            include 'paris.php';
            break;
            case'tokyo';
            include 'tokyo.php';
            break;
        }
    }

    ?>

  </article>
</section>

<footer>
  <p>&copy; 2025 Cities Portal. All rights reserved.</p>
</footer>

</body>
</html>

