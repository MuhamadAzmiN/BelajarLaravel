<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Azmi | </title>
  </head>

  <body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">
		  <a class="navbar-brand" href="#">Navbar</a>
		  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
			  <li class="nav-item">
				<a class="nav-link <?= $title === "Home" ? "active" : "" ?>	"  href="{{ BASEURL }}/home">Home</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link <?= $title === "About" ? "active" : "" ?>" href="{{ BASEURL }}/about">About</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link <?= $active === "blog" ? "active" : "" ?>" href="{{ BASEURL }}/blog">Blog</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link <?= $title === "Category" ? "active" : "" ?>" href="{{ BASEURL }}/categories"> Blog Category</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link <?= $title === "AuthorAll" ? "active" : "" ?>" href="{{ BASEURL }}/authorAll"> Author All</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link <?= $title === "Role" ? "active" : "" ?>" href="{{ BASEURL }}/RoleAll"> Role ALL</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link <?= $title === "All" ? "active" : "" ?>" href="{{ BASEURL }}/All"> All</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link <?= $title === "Programming" ? "active" : "" ?>" href="{{ BASEURL }}/Programming"> All</a>
			  </li>
	
			</ul>
		  </div>
		</div>
	  </nav>
	  <div class="container">
    		@yield('container')
	   </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  </body>
</html>