<head>
    <!-- Include FullCalendar CSS and JS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>
</head>


<div class="flex flex-col lg:flex-row items-stretch mt-36">
  <!-- Calendar -->
  <div id="calendar" class="flex-1 bg-white rounded-lg shadow-md"></div>
  
  <!-- Appointment Booking Form -->
  <div class="flex-1 lg:ml-8 mt-6 lg:mt-0">
    <div class="bg-white rounded-lg shadow-md p-6">
      <h2 class="text-xl font-bold mb-4">Book an Appointment</h2>
      <form>
        <div class="mb-4">
          <label class="block text-gray-700 font-bold mb-2" for="full_name">Full Name</label>
          <input class="form-input w-full" id="full_name" type="text" required>
        </div>
        <div class="mb-4">
          <label class="block text-gray-700 font-bold mb-2" for="appointment_date">Appointment Date</label>
          <input class="form-input w-full" id="appointment_date" type="date" required>
        </div>
        <div class="mb-4">
          <label class="block text-gray-700 font-bold mb-2" for="appointment_time">Appointment Time</label>
          <select class="form-select w-full" id="appointment_time" required>
            <option value="">Select a time</option>
            <option value="8:30-9:00">8:30-9:00</option>
            <option value="9:00-9:30">9:00-9:30</option>
            <option value="9:30-10:00">9:30-10:00</option>
            <!-- Add more options for other appointment times -->
          </select>
        </div>
        <div class="mb-4">
          <label class="block text-gray-700 font-bold mb-2" for="appointment_type">Appointment Type</label>
          <select class="form-select w-full" id="appointment_type" required>
            <option value="">Select an appointment type</option>
            <option value="Consultation">Consultation</option>
            <option value="Annual Medical Check-up">Annual Medical Check-up</option>
            <option value="Dental Check-up">Dental Check-up</option>
            <!-- Add more options for other appointment types -->
          </select>
        </div>
        <div class="mt-8">
          <button class="btn btn-primary w-full" type="submit">Book Appointment</button>
        </div>
      </form>
    </div>
  </div>
</div>




<script src="/script/clinic.js"></script>