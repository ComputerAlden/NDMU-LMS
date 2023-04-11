<?php include_once('./dummydata/payments.php'); ?>

<div class="container mx-auto px-4 py-10">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <!-- Payments -->
        <div class="bg-white rounded-xl p-6 shadow-lg">
            <h2 class="text-2xl font-bold mb-4">Payments</h2>
            <table class="table-auto w-full">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="px-4 py-2">Description</th>
                        <th class="px-4 py-2">Amount</th>
                        <th class="px-4 py-2">Status</th>
                        <th class="px-4 py-2">Date of Payment</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($payments as $payment) : ?>
                    <tr class="border-t border-gray-200">
                        <td class="px-4 py-2"><?php echo $payment['description']; ?></td>
                        <td class="px-4 py-2 text-center"><?php echo $payment['amount']; ?></td>
                        <td class="px-4 py-2 text-center"><?php echo $payment['status']; ?></td>
                        <td class="px-4 py-2 text-center"><?php echo $payment['date']; ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <!-- Activities Fee -->
        <div class="bg-white rounded-xl p-6 shadow-lg">
            <h2 class="text-2xl font-bold mb-4">Activities Fee</h2>
            <table class="table-auto w-full">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="px-4 py-2">Description</th>
                        <th class="px-4 py-2">Amount</th>
                        <th class="px-4 py-2">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($activities as $activity) : ?>
                    <tr class="border-t border-gray-200">
                        <td class="px-4 py-2"><?php echo $activity['description']; ?></td>
                        <td class="px-4 py-2 text-center"><?php echo $activity['amount']; ?></td>
                        <td class="px-4 py-2 text-center"><?php echo $activity['status']; ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

    </div>
    <!-- Tuition and Miscellaneous Fees -->
    <div class="bg-white rounded-xl p-6 shadow-lg w-full">
        <h2 class="text-2xl font-bold mb-4">Tuition and Miscellaneous Fees</h2>
        <table class="table-auto w-full">
            <thead>
                <tr class="bg-gray-100">
                    <th class="px-4 py-2">Description</th>
                    <th class="px-4 py-2">Amount</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tuitionMiscFees as $tuitionMiscFees) : ?>
                <tr class="border-t border-gray-200">
                    <td class="px-4 py-2 text-center"><?php echo $tuitionMiscFees['description']; ?></td>
                    <td class="px-4 py-2 text-center"><?php echo $tuitionMiscFees['amount']; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>