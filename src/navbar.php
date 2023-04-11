<div class="navbar p-4 bg-primary text-primary-content text-lg">
  <div class="container flex h-16 mx-auto">
    <div class="navbar-start">
      <div class="dropdown">
        <label tabindex="0" class="btn btn-ghost lg:hidden">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
        </label>
        <ul tabindex="0" class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-green-800 rounded-box w-56">
          <li class="flex">
            <a href="main.php?page=class" class="btn-ghost flex items-center px-4 border-b-2 border-transparent">Class</a>
          </li>
          <li class="flex" tabindex="0">
            <a rel="noopener noreferrer" href="#"
              class="btn-ghost flex items-center px-4 border-b-2 border-transparent">Facilities</a>
            </a>
            <ul class="p-2 bg-primary">
              <li><a href="main.php?page=business">Business</a></li>
              <li><a href="main.php?page=library">Library</a></li>
              <li><a href="main.php?page=clinic">Clinic</a></li>
            </ul>
          </li>
          <li class="flex">
            <a href="main.php?page=event" class="btn-ghost flex items-center px-4 border-b-2 border-transparent">Events</a>
          </li>
        </ul>
      </div>
      <a href="main.php?page=home" class="btn btn-ghost normal-case text-xl font-poppins font-extrabold hidden lg:flex -mt-8"><img src="/assets/logo.png"
          class="w-12 h-12">NDMU</a>
    </div>
    <a rel="noopener noreferrer" href="main.php?page=home" aria-label="Back to homepage" class="lg:hidden items-center p-2 flex justify-center">
      <img src="/assets/logo.png" class="w-12 h-12">
    </a>
    <div class="navbar-center hidden lg:flex">
      <ul class="items-stretch hidden space-x-3 lg:flex menu menu-horizontal px-1">
        <li class="flex">
          <a href="main.php?page=class" class="btn-ghost flex items-center px-4 border-b-2 border-transparent">Class</a>
        </li>
        <li class="flex" tabindex="0">
          <a rel="noopener noreferrer" href="#"
            class="btn-ghost flex items-center px-4 border-b-2 border-transparent">Facilities</a>
          <ul class="p-2 bg-primary">
            <li><a href="main.php?page=business">Business</a></li>
            <li><a href="main.php?page=library">Library</a></li>
            <li><a href="main.php?page=clinic">Clinic</a></li>
          </ul>
        </li>
        <li class="flex">
          <a href="main.php?page=event" class="btn-ghost flex items-center px-4 border-b-2 border-transparent">Events</a>
        </li>
      </ul>
    </div>
  </div>
  <div class="navbar-end">
    <div class="items-center flex-shrink-0">
      <button href="main.php?page=profile" class="btn px-8 py-3 font-semibold rounded btn-ghost">Profile</button>
    </div>
  </div>
</div>