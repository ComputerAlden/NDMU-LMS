<div class="flex flex-col md:flex-row h-full mt-12">
    <!-- Task List -->
    <div class="bg-white shadow-lg rounded-lg p-6 mb-6 md:mr-6 md:w-1/3">
        <h2 class="text-xl font-bold text-gray-900 mb-4">Task List</h2>
        <div class="border-t-2 border-gray-200 pt-4">
            <!-- Finish Task -->
            <div class="mb-4">
                <h2 class="text-xl font-bold text-gray-900 mb-4">Finish Tasks</h2>
                <div class="border-t border-b border-gray-200 py-2">
                    <table class="table-auto w-full border-collapse border border-gray-200">
                        <thead>
                            <tr class="bg-gray-200">
                                <th class="px-4 py-2">Type</th>
                                <th class="px-4 py-2">Subject</th>
                                <th class="px-4 py-2">Score</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="hover:bg-gray-100">
                                <td class="border px-4 py-2">Quiz</td>
                                <td class="border px-4 py-2">Mathematics</td>
                                <td class="border px-4 py-2">90%</td>
                            </tr>
                            <tr class="hover:bg-gray-100">
                                <td class="border px-4 py-2">Assignment</td>
                                <td class="border px-4 py-2">Science</td>
                                <td class="border px-4 py-2">80%</td>
                            </tr>
                            <tr class="hover:bg-gray-100">
                                <td class="border px-4 py-2">Project</td>
                                <td class="border px-4 py-2">English</td>
                                <td class="border px-4 py-2">95%</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="border-t-2 border-gray-200 pt-4">
            <!-- Current Task -->
            <div class="mb-4">
                <h2 class="text-xl font-bold text-gray-900 mb-4">Current Tasks</h2>
                <div class="overflow-x-auto">
                    <table class="table-auto w-full border-collapse border border-gray-200">
                        <thead>
                            <tr class="bg-gray-200">
                                <th class="px-4 py-2">Type</th>
                                <th class="px-4 py-2">Subject</th>
                                <th class="px-4 py-2">Score</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="hover:bg-gray-100">
                                <td class="border px-4 py-2">Quiz</td>
                                <td class="border px-4 py-2">Mathematics</td>
                                <td class="border px-4 py-2">90%</td>
                            </tr>
                            <tr class="hover:bg-gray-100">
                                <td class="border px-4 py-2">Assignment</td>
                                <td class="border px-4 py-2">Science</td>
                                <td class="border px-4 py-2">80%</td>
                            </tr>
                            <tr class="hover:bg-gray-100">
                                <td class="border px-4 py-2">Project</td>
                                <td class="border px-4 py-2">English</td>
                                <td class="border px-4 py-2">95%</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="border-t-2 border-gray-200 pt-4">
            <!-- Upcoming Task -->
            <div class="mb-4">
                <h2 class="text-xl font-bold text-gray-900 mb-4">Upcoming Tasks</h2>
                <div class="overflow-x-auto">
                    <table class="table-auto w-full border rounded-md">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="px-4 py-2 text-left">Task</th>
                                <th class="px-4 py-2 text-left">Subject</th>
                                <th class="px-4 py-2 text-left">Due Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border px-4 py-2">Task 1</td>
                                <td class="border px-4 py-2">Science</td>
                                <td class="border px-4 py-2">April 12</td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">Task 2</td>
                                <td class="border px-4 py-2">Math</td>
                                <td class="border px-4 py-2">April 15</td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">Task 3</td>
                                <td class="border px-4 py-2">English</td>
                                <td class="border px-4 py-2">April 20</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Grade Graph and Notifications -->
    <div class="bg-white shadow-lg rounded-lg p-6 md:flex-1 md:flex md:flex-col">
        <div class="h-64 mb-12 ">
            <h2 class="text-xl font-bold text-gray-900 mb-4">Grade Graph</h2>
            <canvas id="gradeGraph"></canvas>
        </div>
        <div class="border-t-2 border-gray-200 pt-4">
            <h2 class="text-xl font-bold text-gray-900 mb-4">Notifications</h2>
                <ul id="notifications" class="divide-y divide-gray-200"></ul>
        </div>
    </div>
</div>
<script src="/script/grade.js"></script>
<script src="/script/notifs.js"></script>