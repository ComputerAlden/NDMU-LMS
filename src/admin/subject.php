<header class="py-6 px-4">
    <h1 class="text-3xl font-bold mb-8 -ml-14">Subject</h1>
</header>

<main class="container mx-auto px-4">
    <!-- Add new subject div -->
    <div class="my-10 bg-gray-800 rounded-lg shadow-lg p-6">
        <h2 class="text-2xl font-semibold mb-4">Add New Subject</h2>
        <div class="grid grid-cols-2 gap-4">
            <div>
                <label class="block mb-2 font-bold" for="department-select">Department:</label>
                <div class="relative">
                    <select id="department-select"
                        class="select block w-full pl-3 pr-10 py-2 rounded-lg shadow-sm border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        <option value="" disabled selected>Select Department</option>
                        <option value="CSD">CSD</option>
                        <option value="CAS">CAS</option>
                        <option value="CET">CET</option>
                        <option value="CBA">CBA</option>
                    </select>
                </div>
            </div>
            <div>
                <label class="block mb-2 font-bold" for="year-level-select">Year Level:</label>
                <div class="relative">
                    <select id="year-level-select"
                        class="select block w-full pl-3 pr-10 py-2 rounded-lg shadow-sm border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        <option value="" disabled selected>Select Year Level</option>
                        <option value="first_year">First Year</option>
                        <option value="second_year">Second Year</option>
                        <option value="third_year">Third Year</option>
                        <option value="fourth_year">Fourth Year</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-2 gap-4 mt-4">
            <div>
                <label class="block mb-2 font-bold" for="subject-input">Subject:</label>
                <input id="subject-input"
                    class="input w-full rounded-lg shadow-sm border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                    type="text">
            </div>
            <div>
                <label class="block mb-2 font-bold" for="teacher-input">Teacher:</label>
                <input id="teacher-input"
                    class="input w-full rounded-lg shadow-sm border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                    type="text">
            </div>
            <div>
                <label class="block mb-2 font-bold" for="schedule-input">Schedule:</label>
                <input id="schedule-input"
                    class="input w-full rounded-lg shadow-sm border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                    type="text">
            </div>
            <button class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded">
                Add Subject
            </button>
        </div>

    </div>

    <!-- View subjects table -->
    <div class="bg-gray-700 p-8 rounded-lg shadow-xl">
        <h2 class="text-2xl font-semibold mb-4">Subjects</h2>
        <div class="overflow-x-auto">
            <table class="table table-auto w-full">
                <thead class="bg-gray-400">
                    <tr>
                        <th class="px-4 py-2">Department</th>
                        <th class="px-4 py-2">Year Level</th>
                        <th class="px-4 py-2">Subject</th>
                        <th class="px-4 py-2">Teacher</th>
                        <th class="px-4 py-2">Schedule</th>
                    </tr>
                </thead>
                <tbody id="subject_tbody">
                </tbody>
            </table>
        </div>
    </div>

</main>