<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Template</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header {
  background-color: #4169E1;
  padding: 10px;
  text-align: center;
  font-size: 35px;
  color: white;
}

/* Create two columns/boxes that floats next to each other */
nav {
  float: left;
  width: 30%;
  height: 500px; /* only for demonstration, should be removed */
  background: #ccc;
  padding: 20px;
}

/* Style the list inside the menu */
nav ul {
  list-style-type: none;
  padding: 0;
}

article {
  float: left;
  padding: 20px;
  width: 70%;
  background-color: #f1f1f1;
  height: 500px; /* only for demonstration, should be removed */
}

/* Clear floats after the columns */
section:after {
  content: "";
  display: table;
  clear: both;
}

/* Style the footer */
footer {
  background-color:#4169E1;
  padding: 10px;
  text-align: center;
  color: white;
}

/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
  nav, article {
    width: 100%;
    height: auto;
  }
}
</style>
</head>
<body>

<h2>The Company</h2>
<p>Personal Collection or PC is a direct selling company that provides high quality products and livelihood opportunities<br> for thousands through its extensive dealer network.</br>
It operates from the mindset of hardworking people who have discovered<br> the Great Life—that is the ultimate purpose for doing business with PC.</br>
The company was established on August 20, 2003 with the introduction of its pioneer product, TUFF Toilet Bowl Cleanser. Other PC brands ALFA-1, Amazing, Colormatch, HBS, Revitalife, and White Dove to name a few have a steadfast following and are enjoyed by millions of consumers nationwide.<br><br><br><br><br><br></br>
</p>
<header>
  <h2>PERSONAL COLLECTION</h2>
</header>

<section>
  <nav>
    <ul>
      <li><a href="home.php">Home</a></li>
      <li><a href="viewprod.php">Product</a></li>
	  <li><a href="viewcus.php">Customer</a></li>
	  <li><a href="logout.php">Logout</a></li>
    </ul>
  </nav>
  
  <article>
    <h1>OUR PURPOSE</h1>
    <p>A Great Life is our Mindset and our noble purpose is to share this with everyone.</p>
    <p>Empower employees with an excellent working environment.<br>Inspire our dealers with the best earning opportunities.<br>
Delight our consumers with superior value-for-money products and services.</br>
	<h2>OUR FUTURE</h2>
We envision to be an organization that grows our business and at the same time serves the noble purpose of enhancing the lives of Filipino families.<br></br>
	<h3>OUR MOTIVATION</h3>
We do everything with great love because of our great love for our families.<br>And, our desire is to give them the Intentional Great Life This great love gives us the power to transform ourselves and the lives of our family.<br> It pushes us to go beyond our limits to provide them with the Great Life.</br>
.</p>
  </article>
</section>
<footer>
  <p>@Personal Collection</p>
</footer>

</body>
</html>
