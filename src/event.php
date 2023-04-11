<?php include './dummydata/events.php' ?>

<section class="bg-white rounded-lg shadow-lg p-8 w-full">
    <h2 class="text-3xl font-bold mb-6"> Recent Events</h2>
    <div class="flex flex-wrap gap-1 w-full">
        <?php foreach ($recent_events as $event) { ?>
        <div class="bg-gray-200 rounded-lg shadow-md mb-4 flex-1">
            <img src="https://via.placeholder.com/300x200.png?text=Event+Image" alt="Event Image"
                class="w-full h-48 object-cover rounded-t-lg">
            <div class="p-4">
                <h3 class="text-lg font-bold mb-2"><?php echo $event['title']; ?></h3>
                <p class="text-gray-600"><?php echo $event['description']; ?></p>
                <p class="text-gray-600">Date: <?php echo $event['date']; ?></p>
                <p class="text-gray-600">Location: <?php echo $event['location']; ?></p>
                <a href="#" class="text-blue-500 hover:text-blue-700">Learn More</a>
            </div>
        </div>
        <?php } ?>
    </div>
</section>

<section class="bg-white rounded-lg shadow-lg p-8 w-full">
    <h2 class="text-xl font-bold mb-4">Hottest Event</h2>
    <div class="flex flex-wrap gap-1 w-full">
        <?php foreach ($hot_events as $event) { ?>
        <div class="bg-gray-200 rounded-lg shadow-md mb-4 flex-1">
            <img src="https://via.placeholder.com/300x200.png?text=Event+Image" alt="Event Image"
                class="w-full h-48 object-cover rounded-t-lg">
            <div class="p-4">
                <h3 class="text-lg font-bold mb-2"><?php echo $event['title']; ?></h3>
                <p class="text-gray-600"><?php echo $event['description']; ?></p>
                <p class="text-gray-600">Date: <?php echo $event['date']; ?></p>
                <p class="text-gray-600">Location: <?php echo $event['location']; ?></p>
                <a href="#" class="text-blue-500 hover:text-blue-700">Learn More</a>
            </div>
        </div>
        <?php } ?>
    </div>
</section>

<section class="bg-white rounded-lg shadow-lg p-8 w-full">
    <h2 class="text-xl font-bold mb-4">School-Related Events</h2>
    <div class="flex flex-wrap gap-1 w-full">
        <?php foreach ($school_events as $event) { ?>
        <div class="bg-gray-200 rounded-lg shadow-md mb-4 flex-1">
            <img src="https://via.placeholder.com/300x200.png?text=Event+Image" alt="Event Image"
                class="w-full h-48 object-cover rounded-t-lg">
            <div class="p-4">
                <h3 class="text-lg font-bold mb-2"><?php echo $event['title']; ?></h3>
                <p class="text-gray-600"><?php echo $event['description']; ?></p>
                <p class="text-gray-600">Date: <?php echo $event['date']; ?></p>
                <p class="text-gray-600">Location: <?php echo $event['location']; ?></p>
                <a href="#" class="text-blue-500 hover:text-blue-700">Learn More</a>
            </div>
        </div>
        <?php } ?>
    </div>
</section>