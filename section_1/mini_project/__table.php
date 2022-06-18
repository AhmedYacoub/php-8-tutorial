<style>
    table {
        border-collapse: collapse;
        width: 98%;
        margin: 20px auto;
    }

    table,
    th,
    td {
        border: 1px solid lightgray;
        text-align: center;
        padding: 5px;
    }

    th {
        background-color: lightgray;
    }
</style>



<table>
    <thead>
        <tr>
            <th>Date</th>
            <th>Check#</th>
            <th>Description</th>
            <th>Amount</th>
        </tr>
    </thead>
    <tbody>

        <?php foreach ($transactions as $key => $transaction) : ?>
            <tr>
                <td><?= $transaction['date'] ?></td>
                <td><?= $transaction['check'] ?></td>
                <td><?= $transaction['description'] ?></td>
                <td style="color: <?= $transaction['raw_amount'] > 0 ? 'green' : 'red'; ?> ;"><?= $transaction['formatted_amount'] ?></td>
            </tr>
        <?php endforeach ?>
    </tbody>
    <tfoot>
        <tr>
            <td></td>
            <td></td>
            <th>Total Income:</th>
            <th><?= $totalIncome ?></th>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <th>Total Expenses:</th>
            <th><?= $totalExpenses ?></th>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <th>Net Total:</th>
            <th><?= $netTotal ?></th>
        </tr>
    </tfoot>
</table>