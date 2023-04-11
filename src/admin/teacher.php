<div class="py-6 px-4">
    <h1 class="text-3xl font-bold mb-8 -ml-14">Teacher</h1>

    <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
        <div>
            <label class="block text-gray-700 font-bold mb-2" for="name">
                Name
            </label>
            <input
                class="input w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200"
                id="name" type="text" placeholder="Enter name">
        </div>
        <div>
            <label class="block text-gray-700 font-bold mb-2" for="email">
                Email
            </label>
            <input
                class="input w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200"
                id="email" type="email" placeholder="Enter email">
        </div>
        <div>
            <label class="block text-gray-700 font-bold mb-2" for="password">
                Password
            </label>
            <input
                class="input w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200"
                id="password" type="password" placeholder="Enter password">
        </div>
        <div>
            <label class="block text-gray-700 font-bold mb-2" for="department">
                Department
            </label>
            <div class="relative">
                <select
                    class="select w-full appearance-none rounded-md border-gray-300 py-2 pl-3 pr-10 focus:border-blue-500 focus:ring-2 focus:ring-blue-200"
                    id="department">
                    <option value="CSD">CSD</option>
                    <option value="CET">CET</option>
                    <option value="CBA">CBA</option>
                    <option value="CAS">CAS</option>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M10 12l-6-6h12l-6 6z" /></svg>
                </div>
            </div>
        </div>
        <div class="col-span-2">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" id="addTeacherBtn">
                Add Teacher
            </button>
        </div>
    </div>

    <hr class="my-8">
    <h1 class="text-2xl font-bold mb-4">Teacher List</h1>
    <table class="min-w-full divide-y divide-gray-200">
        <thead>
            <tr>
                <th
                    class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                    Name
                </th>
                <th
                    class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                    Email
                </th>
                <th
                    class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                    Department
                </th>
                <th class="px-6 py-3 bg-gray-50"></th>
            </tr>
        </thead>
        <tbody id="teacherTableBody">
            <!-- Teacher information will be dynamically added here -->
        </tbody>
    </table>
</div>