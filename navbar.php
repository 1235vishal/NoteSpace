



<link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
<scrip src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js
"></script>
<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

  

 <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: transparent;">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><div class="fw-bold"><span class="text-primary">NoteSpace!</span></div></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav  nav-underline ms-auto">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#section1" style="color: white;">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#section4" style="color: white;">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#section2" style="color: white;">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="login.php" style="color: white;">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="signup.php" style="color: white;">Sign Up</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="dashboard/" style="color: white;">Upload Notes</a>
        </li>
      </ul>
    </div>  
  </div>
</nav>








<script>
    // Toggle dropdown on click
document.querySelectorAll('.dropdown').forEach((dropdown) => {
  dropdown.addEventListener('click', function () {
    this.querySelector('.dropdown-content').classList.toggle('show');
  });
});

// Close dropdown if the user clicks outside of it
window.onclick = function (event) {
  if (!event.target.matches('.dropbtn')) {
    const dropdowns = document.getElementsByClassName('dropdown-content');
    for (let i = 0; i < dropdowns.length; i++) {
      const openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
};

</script>