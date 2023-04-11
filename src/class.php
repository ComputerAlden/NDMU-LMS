<?php
include './dummydata/subject.php';
?>
<div class="container mx-auto px-4 mt-12 lg:mt-24">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        <?php foreach ($subjects as $subjects): ?>
            <a href="main.php?page=room&id=<?php echo $subjects['code'] ?>">
            <div class="bg-white border rounded-lg shadow-lg overflow-hidden">
                <img src="../assets/background.webp" class="w-full h-48 object-cover">
                <div class="p-4">
                    <div class="flex items-center mb-2">
                        <h2 class="text-lg font-semibold"><?php echo $subjects['code'] ?></h2>
                    </div>
                    <p class="text-gray-700"><?php echo $subjects['name'] ?></p>
                </div>
            </div>
        </a>
        <?php endforeach; ?>
    </div>
</div>