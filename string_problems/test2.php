<?php
function countCalls($startTime, $endTime) {
    $startTimestamp = strtotime($startTime);
    $endTimestamp = strtotime($endTime);

    $millatCallCount = 0;
    $asadulCallCount = 0;

    $currentTimestamp = $startTimestamp;
    $millatCallCount++;

    $timeDifference = ($endTimestamp - $startTimestamp) / 60; 

    $remainingTime = $timeDifference - 3;

    if ($remainingTime > 0) {
        $currentTimestamp += 3 * 60;
        $asadulCallCount++;

        while (($currentTimestamp + 2 * 60) <= $endTimestamp) {
            $currentTimestamp += 2 * 60;
            if ($millatCallCount > $asadulCallCount) {
                $asadulCallCount++;
            } else {
                $millatCallCount++;
            }
        }
    }

    //total call number by nazmul bhai
    $totalCalls = $millatCallCount + $asadulCallCount;

    return [
        'millat' => $millatCallCount,
        'asadul' => $asadulCallCount,
        'total' => $totalCalls
    ];
}

$startTime = "10:01";
$endTime = "11:30";

$calls = countCalls($startTime, $endTime);

echo "Total calls made by Nazmul Bhai: " . $calls['total'] . "\n";
echo "Calls to Millat Chowdhury Bhai: " . $calls['millat'] . "\n";
echo "Calls to Asadul Bhai: " . $calls['asadul'] . "\n";
?>