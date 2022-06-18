<?php

const CSV_FILE_PATH = FILES_PATH . 'sample1.csv';

$transactions = [];
$totalIncome = 0.0;
$totalExpenses = 0.0;
$netTotal = 0.0;

$csvData = null;

function getCsvFileContent(string $file): ?array
{
    $result = [];
    $row = 1;

    $csvFileReference = fopen($file, "r");

    if ($csvFileReference !== false) {
        while (($data = fgetcsv($csvFileReference)) !== false) {
            array_push($result, $data);
        }

        fclose($csvFileReference);
    }

    return $result;
}

$transactions = getCsvFileContent(CSV_FILE_PATH);

array_shift($transactions);

$transactions = array_map(
    fn ($transaction) => [
        'date' => isset($transaction[0]) ? date('M d, Y', strtotime($transaction[0])) : 'undefine',
        'check' => isset($transaction[1]) ? $transaction[1] : '',
        'transaction' => isset($transaction[2]) ? $transaction[2] : '',
        'formatted_amount' => isset($transaction[3]) ? $transaction[3] : '',
        'raw_amount' => isset($transaction[3]) ? (float) str_replace(["$", ","], "", $transaction[3]) : 0.00
    ],
    $transactions
);

$totalIncome = array_reduce(
    $transactions, 
    fn ($sum, $transaction) => 
        $sum = 0 < $transaction['raw_amount']
            ? $sum + $transaction['raw_amount'] 
            : $sum
);

$totalExpenses = array_reduce(
    $transactions, 
    fn ($sum, $transaction) => 
        $sum = 0 > $transaction['raw_amount']
            ? $sum - $transaction['raw_amount'] 
            : $sum
);

$netTotal = number_format(($totalIncome - $totalExpenses), 2);
$totalIncome = "$" . number_format($totalIncome, 2);
$totalExpenses = "-$" . number_format($totalExpenses, 2);
$netTotal = $netTotal >= 0 ? "$" . $netTotal : "-$" . $netTotal;

// echo "<pre>";
// print_r($transactions);
// echo "</pre>";