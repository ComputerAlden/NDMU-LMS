<?php
// Check if the 'id' parameter is set in the URL
if (isset($_GET['id'])) {
    // Retrieve the subject code from the URL parameter
    $subject_code = $_GET['id'];

    // Retrieve the subject data from the 'subjects' array in the 'subject.php' file
    require_once './dummydata/subject.php';
    $subject = null;
    foreach ($subjects as $subject_item) {
        if ($subject_item['code'] === $subject_code) {
            $subject = $subject_item;
            break;
        }
    }

    // If the subject data is found, display it on the page
    if ($subject) {
?>
<div class="container mx-auto px-4 py-10 mt-4">
    <!-- Subject info -->
    <div class="bg-white rounded-xl p-6 shadow-lg mb-8 flex flex-col items-center">
        <h1 class="text-3xl font-bold mb-2"><?php echo $subject['name']; ?></h1>
        <div class="w-16 border-b border-gray-400"></div>
        <div class="flex justify-between w-full mt-4 text-lg">
            <div class="text-gray-600"><?php echo $subject['teacher']; ?></div>
            <div class="text-gray-600"><?php echo $subject['schedule']; ?></div>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <!-- Tasks -->
        <div class="bg-white rounded-xl p-6 shadow-lg">
            <h2 class="text-2xl font-bold mb-4">Tasks</h2>
            <table class="table-auto">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="px-4 py-2">Type</th>
                        <th class="px-4 py-2">Description</th>
                        <th class="px-4 py-2">Score</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($subject['tasks'] as $task) : ?>
                    <tr class="border-t border-gray-200">
                        <td class="px-4 py-2"><?php echo $task['type']; ?></td>
                        <td class="px-4 py-2"><?php echo $task['description']; ?></td>
                        <td class="px-4 py-2"><?php echo $task['score']; ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <!-- Resources and Grade Graph -->
        <div class="space-y-8">
            <!-- Resources -->
            <div class="bg-white rounded-xl p-6 shadow-lg">
                <h2 class="text-2xl font-bold mb-4">Resources</h2>
                <!-- Add resources here or leave empty -->
            </div>
            <!-- Grade Graph -->
            <div class="bg-white rounded-xl p-6 shadow-lg">
                <h2 class="text-2xl font-bold mb-4">Grade Graph</h2>
                <!-- Add grade graph here -->
            </div>
        </div>
    </div>

    <div class="fixed bottom-0 right-0 mb-4 mr-4">
        <div id="chat-bubble"
            class="rounded-full h-16 w-16 bg-blue-500 text-white flex items-center justify-center cursor-pointer">
            <i class="fa fa-comments fa-2x"></i>
        </div>
        <div id="chat-box" class="hidden bg-white rounded-lg shadow-lg">
            <div class="bg-gray-200 px-4 py-3 flex justify-between items-center">
                <h3 class="font-bold text-gray-800">Chat</h3>
                <span id="chat-box-close" class="cursor-pointer">
                    <i class="fa fa-times"></i>
                </span>
            </div>

            <div id="chat-messages" class="px-4 py-3"></div>
            <form id="chat-form" class="flex items-center border-t border-gray-300 px-4 py-3">
                <input id="chat-input" type="text" class="flex-grow border-gray-400 border rounded-md px-3 py-2 mr-2"
                    placeholder="Type your message...">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Send
                </button>
            </form>
        </div>
    </div>
</div>


<script src="/script/chat.js"></script>

<?php
    } else {
        echo 'Subject not found.';
    }
} else {
    echo 'Subject code not specified.';
}
?>
