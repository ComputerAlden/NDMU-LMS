<!-- Dashboard Content -->
<div class="flex-1 p-6">
    <h1 class="text-3xl font-bold text-gray-900 mb-6 -ml-14">Dashboard</h1>
    <!-- Department Population and Student Status -->
    <div class="flex flex-row gap-6 mb-6">
        <!-- Department Population -->
        <div class="bg-white shadow-lg rounded-lg p-6 flex-1">
            <h2 class="text-xl font-bold text-gray-900 mb-4">Department Population</h2>
            <div class="h-48">
                <canvas id="deptPopulationChart"></canvas>
            </div>
        </div>

        <!-- Student Status -->
        <div class="bg-white shadow-lg rounded-lg p-6 flex-1">
            <h2 class="text-xl font-bold text-gray-900 mb-4">Student Status</h2>
            <div class="h-48">
                <canvas id="studentStatusChart"></canvas>
            </div>
        </div>
    </div>

    <!-- Enrollee Statistics -->
    <div class="bg-white shadow-lg rounded-lg p-6 mb-6">
        <h2 class="text-xl font-bold text-gray-900 mb-4">Enrollee Statistics</h2>
        <div class="h-48">
            <canvas id="enrolleeChart"></canvas>
        </div>
    </div>

    <!-- Scholarship Statistics -->
    <div class="bg-white shadow-lg rounded-lg p-6 mb-6">
        <h2 class="text-xl font-bold text-gray-900 mb-4">Scholarship Statistics</h2>
        <div class="h-48">
            <canvas id="scholarshipChart"></canvas>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="/script/chart.js"