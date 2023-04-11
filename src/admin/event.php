<div class="bg-gray-900 text-white p-6 rounded-lg">
  <h2 class="text-xl font-bold mb-4">Add Event</h2>
  <form>
    <div class="mb-4">
      <label for="event-name" class="block font-semibold mb-1">Event Name:</label>
      <input type="text" id="event-name" name="event-name" required class="w-full rounded-lg p-2 bg-gray-700 text-white border-none">
    </div>
    <div class="mb-4">
      <label for="event-date" class="block font-semibold mb-1">Event Date:</label>
      <input type="date" id="event-date" name="event-date" required class="w-full rounded-lg p-2 bg-gray-700 text-white border-none">
    </div>
    <div class="mb-4">
      <label for="event-type" class="block font-semibold mb-1">Event Type:</label>
      <select id="event-type" name="event-type" required class="w-full rounded-lg p-2 bg-gray-700 text-white border-none">
        <option value="">Select Event Type</option>
        <option value="Holiday">Holiday</option>
        <option value="Special Holiday">Special Holiday</option>
        <option value="Seminar">Seminar</option>
        <option value="Summit">Summit</option>
        <option value="Other">Other</option>
      </select>
    </div>
    <button type="button" id="add-event-btn" class="bg-purple-600 text-white px-4 py-2 rounded-lg hover:bg-purple-700">Add Event</button>
  </form>
</div>

<div class="bg-gray-900 text-white p-6 rounded-lg mt-4">
  <h2 class="text-xl font-bold mb-4">Events</h2>
  <table id="event-table" class="w-full">
    <thead>
      <tr>
        <th class="text-left py-2">Event Name</th>
        <th class="text-left py-2">Event Date</th>
        <th class="text-left py-2">Event Type</th>
      </tr>
    </thead>
    <tbody>
    </tbody>
  </table>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="/script/events.js"></script>