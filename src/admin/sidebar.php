<div class="flex flex-col w-64 h-screen bg-gray-900">
  <!-- Sidebar header -->
  <div class="flex items-center justify-center h-16 mt-6">
    <img src="/assets/logo.png" alt="Logo" class="h-8">
    <h1 class="text-xl font-bold text-white ml-3">ADMIN</h1>
  </div>
  <!-- Navigation links -->
  <nav class="flex-grow h-screen px-6 py-8 bg-gray-800">
    <ul class="space-y-1">
      <li class=" <?php echo ($_GET['page'] == 'dashboard' || !isset($_GET['page'])) ? 'bg-gray-700' : ''; ?> ">
        <a href="admin.php?page=dashboard" class="flex items-center py-2 px-4 text-gray-400 hover:text-white">
          <i class="fas fa-tachometer-alt w-6 h-6 mr-3"></i>
          <span class="text-sm font-medium">Dashboard</span>
        </a>
      </li>
      <li class=" <?php echo ($_GET['page'] == 'student') ? 'bg-gray-700' : ''; ?> ">
        <a href="admin.php?page=student" class="flex items-center py-2 px-4 text-gray-400 hover:text-white">
          <i class="fas fa-user-graduate w-6 h-6 mr-3"></i>
          <span class="text-sm font-medium">Students</span>
        </a>
      </li>
      <li class=" <?php echo ($_GET['page'] == 'teacher') ? 'bg-gray-700' : ''; ?> ">
        <a href="admin.php?page=teacher" class="flex items-center py-2 px-4 text-gray-400 hover:text-white">
          <i class="fas fa-chalkboard-teacher w-6 h-6 mr-3"></i>
          <span class="text-sm font-medium">Teachers</span>
        </a>
      </li>
      <li class=" <?php echo ($_GET['page'] == 'subject') ? 'bg-gray-700' : ''; ?> ">
        <a href="admin.php?page=subject" class="flex items-center py-2 px-4 text-gray-400 hover:text-white">
          <i class="fa-solid fa-book w-6 h-6 mr-3"></i>
          <span class="text-sm font-medium">Subject</span>
        </a>
      </li>
      <li class=" <?php echo ($_GET['page'] == 'event') ? 'bg-gray-700' : ''; ?> ">
        <a href="admin.php?page=event" class="flex items-center py-2 px-4 text-gray-400 hover:text-white">
          <i class="far fa-calendar-alt w-6 h-6 mr-3"></i>
          <span class="text-sm font-medium">Events</span>
        </a>
      </li>
    </ul>
  </nav>
</div>
