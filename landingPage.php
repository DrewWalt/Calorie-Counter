<?php

session_start();

$_SESSION['menu'] = 'home';

if (isset($_GET['menu'])) {
    $_SESSION['menu'] = $_GET['menu'];
}

if (isset($_POST['op'])) {

    $op = $_POST['op'];

    if ($op == 'login') {
        $_SESSION['user'] = $_POST['login'];
        $user = $_SESSION['user'];
    }
    else if ($op == 'logout') {
        unset($_SESSION['user']);
    }

}

?>
<!doctype html>
<HTML>
<title>Calorie Counter</title>
<style>
body { 
  display: grid;
  grid-template-areas: 
    "header header ads"
    "nav article article"
    "nav footer footer";
  grid-template-rows: 80px 1fr 70px;  
  grid-template-columns: 20% 1fr 15%;
  grid-row-gap: 10px;
  grid-column-gap: 10px;
  height: 100vh;
  margin: 0;
  }  
header, footer, article, nav, div {
  padding: 1.2em;
  background: lightgray;
  }
#pageHeader {
  grid-area: header;
  }
#pageFooter {
  grid-area: footer;
  }
#mainArticle { 
  grid-area: article;      
  }
#mainNav { 
  grid-area: nav; 
  }
#siteAds { 
  grid-area: ads; 
  } 
/* Stack the layout on small devices/viewports. */
@media all and (max-width: 575px) {
  body { 
    grid-template-areas: 
      "header"
      "article"
      "ads"
      "nav"
      "footer";
    grid-template-rows: 80px 1fr 70px 1fr 70px;  
    grid-template-columns: 1fr;
 }
}
</style>
<body>
  <header id="pageHeader">
  <H2>Welcome to Calorie Counter</H2>
  </header>
  <article id="mainArticle">
  <H1> <?php print "Hello " .$_SESSION['user']; ?> </H1>
  
<?php

    $menu = $_SESSION['menu'];

    // OR include($menu . '.php'); depending on what you want to include

    if ($menu == 'home') {
        print "<H3>Home</H3>\n";        
        include('home.php');
    }
    else if ($menu == 'food') {
        print "<H3>Food</H3>\n";        
        include('food.php');
    }

    else if ($menu == 'activities') {
        print "<H3>Activities</H3>\n";        
        include('activities.php');
    }

    else if ($menu == 'goals') {
        print "<H3>Goals</H3>\n";        
        include('goals.php');
    }

    else if ($menu == 'settings') {
        print "<H3>Settings</H3>\n";        
        include('settings.php');
    }

    //else if ($menu == 'menu5') {
        //print "<H3>content for menu 5</H3>\n";        
        //include('menu5.php');
    //}

?>
  
<P>Calorie Counter is a tool that allows you to track the amount of calories and other macronutrients you eat.  Calorie Counter also allows you to input activities you perform and will calculate how many calories you burn while doing them.  Set goals to help motivate yourself and track your progress towards your new goals using Calorie Counter.</P>
  </article>
  <nav id="mainNav">Menu
  <UL class="navbar-nav"> <!-- unordered list -->
<LI class="nav-item menuItem"><A href="?menu=home">Home</A></LI>
<LI class="nav-item menuItem"><A href="?menu=food">Food</A></LI>
<LI class="nav-item menuItem"><A href="?menu=activities">Activities</A></LI>
<LI class="nav-item menuItem"><A href="?menu=goals">Goals</A></LI>
<LI class="nav-item menuItem"><A href="?menu=settings">Settings</A></LI>
</UL>
  </nav>
  <div id="siteAds">
<?php

print "<FORM method='POST' action='landingPage.php'>\n";

// show login form for testing if user is not logged in
if (!isset($_SESSION['user'])) {
    print "<INPUT type='hidden' name='op' value='login' />\n";
    print "<INPUT type='text' name='login' size='4' />\n";
    print "<INPUT type='submit' value='login' />\n";
}

// show logout button if user is logged in
else { 
    print "<INPUT type='hidden' name='op' value='logout' />\n";
    print "<INPUT type='submit' value='logout' />\n";

}

print "</FORM>\n";

?>
	</div>
  <footer id="pageFooter">Created by Drew, Saul, and Pratikshya</footer>
</body>
</HTML>
