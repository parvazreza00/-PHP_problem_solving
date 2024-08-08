<?php
// function countCalls($startTime, $endTime) {
//     $startTimestamp = strtotime($startTime);
//     $endTimestamp = strtotime($endTime);

//     $callCount = 1;

//     // Initialize current time to 10:04 (first call to Asadul Bhai)
//     $currentTimestamp = $startTimestamp + 3 * 60;

//     // Loop to count calls until the end time
//     while ($currentTimestamp <= $endTimestamp) {
//         $callCount++;
//         $currentTimestamp += 2 * 60; // Increment by 2 minutes for each subsequent call
//     }

//     return $callCount;
// }

// $startTime = "10:01";
// $endTime = "11:30";

// $totalCalls = countCalls($startTime, $endTime);
// echo "Total calls made by Nazmul Bhai: " . $totalCalls . "\n";

///////////////////////////////////////////////

// function countCalls($startTime, $endTime) {
//     // Convert start and end times to timestamps
//     $startTimestamp = strtotime($startTime);
//     $endTimestamp = strtotime($endTime);

//     $callTimes = [];
//     $callTimes[] = $startTimestamp; // First call to Millat Bhai at 10:01

//     $currentTimestamp = $startTimestamp;

//     while ($currentTimestamp < $endTimestamp) {
//         // Call to Asadul Bhai after 3 minutes
//         $currentTimestamp = $currentTimestamp + 3 * 60;
//         if ($currentTimestamp >= $endTimestamp) break;
//         $callTimes[] = $currentTimestamp;

//         // Call to Millat Bhai after 2 minutes
//         $currentTimestamp = $currentTimestamp + 2 * 60;
//         if ($currentTimestamp >= $endTimestamp) break;
//         $callTimes[] = $currentTimestamp;
//     }

//     return count($callTimes);
// }

// $startTime = "10:01";
// $endTime = "11:30";

// $totalCalls = countCalls($startTime, $endTime);
// echo "Total calls made by Nazmul Bhai: " . $totalCalls . "\n";

///////////////////////////////////////////////////////////////////////

// function countCalls($startTime, $endTime) {
//     // Convert start and end times to timestamps
//     $startTimestamp = strtotime($startTime);
//     $endTimestamp = strtotime($endTime);

//     // Initialize call counts
//     $millatCallCount = 0;
//     $asadulCallCount = 0;

//     // Initialize current time and call type
//     $currentTimestamp = $startTimestamp;
//     $isMillatCall = true; // First call is to Millat

//     // Loop to count calls until the end time
//     while ($currentTimestamp <= $endTimestamp) {
//         if ($isMillatCall) {
//             $millatCallCount++;
//             // Next call to Asadul Bhai after 3 minutes if first call
//             // Otherwise, 2 minutes after a call to Asadul Bhai
//             $currentTimestamp += ($millatCallCount == 1) ? 3 * 60 : 2 * 60;
//         } else {
//             $asadulCallCount++;
//             // Next call to Millat Bhai after 2 minutes
//             $currentTimestamp += 2 * 60;
//         }

//         // Alternate call type
//         $isMillatCall = !$isMillatCall;
//     }

//     return [
//         'millat' => $millatCallCount,
//         'asadul' => $asadulCallCount,
//         'total' => $millatCallCount + $asadulCallCount
//     ];
// }

// $startTime = "10:01";
// $endTime = "11:30";

// $calls = countCalls($startTime, $endTime);

// echo "Total calls made by Nazmul Bhai: " . $calls['total'] . "\n";
// echo "Calls to Millat Chowdhury Bhai: " . $calls['millat'] . "\n";
// echo "Calls to Asadul Bhai: " . $calls['asadul'] . "\n";

/////////////////////////////////////////////////////

// function countTotalCalls($startTime, $endTime) {
//     $startTimestamp = strtotime($startTime);
//     $endTimestamp = strtotime($endTime);

//     $initialCallTime = $startTimestamp;
//     $totalCalls = 1;

//     $timeDifference = ($endTimestamp - $startTimestamp) / 60; 

//     $remainingTime = $timeDifference - 3;

//     if ($remainingTime > 0) {
//         $totalCalls += ceil($remainingTime / 2);
//     }

//     return $totalCalls+1;
// }

// $startTime = "10:01";
// $endTime = "11:30";

// $totalCalls = countTotalCalls($startTime, $endTime);
// echo "Total calls made by Nazmul Bhai: " . $totalCalls . "\n";
// 
function countCalls($startTime, $endTime) {
    $startTimestamp = strtotime($startTime);
    $endTimestamp = strtotime($endTime);

    // Initialize call counts
    $millatCallCount = 0;
    $asadulCallCount = 0;

    // Initial call at 10:01 to Millat
    $currentTimestamp = $startTimestamp;
    $millatCallCount++;

    // Calculate the time difference in minutes
    $timeDifference = ($endTimestamp - $startTimestamp) / 60; 

    // The first interval is 3 minutes, then every 2 minutes alternately
    $remainingTime = $timeDifference - 3; // First interval of 3 minutes

    if ($remainingTime > 0) {
        // Move to the next call to Asadul at 10:04 (3 minutes after the first call)
        $currentTimestamp += 3 * 60;
        $asadulCallCount++;

        // Alternately call Millat and Asadul every 2 minutes
        while (($currentTimestamp + 2 * 60) <= $endTimestamp) {
            $currentTimestamp += 2 * 60; // Increment by 2 minutes for each subsequent call
            if ($millatCallCount > $asadulCallCount) {
                $asadulCallCount++;
            } else {
                $millatCallCount++;
            }
        }
    }

    // Total calls made by Nazmul Bhai
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