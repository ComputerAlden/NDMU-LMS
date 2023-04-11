<?php
$books = array(
    array(
        'book_name' => 'To Kill a Mockingbird',
        'available' => 5
    ),
    array(
        'book_name' => '1984',
        'available' => 3
    ),
    array(
        'book_name' => 'Brave New World',
        'available' => 0
    ),
    array(
        'book_name' => 'Animal Farm',
        'available' => 1
    ),
    array(
        'book_name' => 'Lord of the Flies',
        'available' => 2
    ),
    array(
        'book_name' => 'The Catcher in the Rye',
        'available' => 4
    ),
    array(
        'book_name' => 'The Great Gatsby',
        'available' => 1
    ),
    array(
        'book_name' => 'Pride and Prejudice',
        'available' => 0
    ),
    array(
        'book_name' => 'To the Lighthouse',
        'available' => 3
    ),
    array(
        'book_name' => 'The Bell Jar',
        'available' => 0
    ),
    array(
        'book_name' => 'One Hundred Years of Solitude',
        'available' => 2
    ),
    array(
        'book_name' => 'Invisible Man',
        'available' => 1
    )
);

?>

<div class="container mx-auto px-4 py-4">
    <h2 class="text-xl font-semibold mb-4">Most Borrowed Books</h2>
    <div class="carousel">
        <!-- carousel code here -->
    </div>
    <div class="my-8">
        <h2 class="text-xl font-semibold mb-4">Books</h2>
        <table class="table-auto w-full">
            <thead>
                <tr>
                    <th class="px-4 py-2">#</th>
                    <th class="px-4 py-2">Book Name</th>
                    <th class="px-4 py-2">Available</th>
                    <th class="px-4 py-2"></th>
                </tr>
            </thead>
            <tbody>
                <?php for ($i = 0; $i < count($books); $i++) { ?>
                <tr>
                    <td class="border px-4 py-2 text-center"><?php echo $i+1 ?></td>
                    <td class="border px-4 py-2"><?php echo $books[$i]['book_name'] ?></td>
                    <td class="border px-4 py-2 text-center"><?php echo $books[$i]['available'] ?></td>
                    <td class="border px-4 py-2 text-center">
                        <?php if ($books[$i]['available'] > 0) { ?>
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                            Borrow
                        </button>
                        <?php } else { ?>
                        <button class="bg-gray-500 text-white font-bold py-2 px-4 rounded-full cursor-not-allowed"
                            disabled>
                            Not Available
                        </button>
                        <?php } ?>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>