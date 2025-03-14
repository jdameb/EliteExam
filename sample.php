<?php

function countIslandsAndOutput($matrix) {
    $rows = count($matrix);
    $cols = count($matrix[0]);
    
    // Directions for 4 possible moves: up, down, left, right
    $directions = [
        [-1, 0], [1, 0], [0, -1], [0, 1]   // up, down, left, right
    ];

    // Helper function to perform DFS
    function dfs(&$matrix, $i, $j, $rows, $cols) {
        // Mark the current cell as visited by setting it to 0
        $matrix[$i][$j] = 0;
        
        // Explore the 4 directions
        foreach ($GLOBALS['directions'] as $direction) {
            $newI = $i + $direction[0];
            $newJ = $j + $direction[1];
            
            // Check if the new position is within bounds and is a "1"
            if ($newI >= 0 && $newI < $rows && $newJ >= 0 && $newJ < $cols && $matrix[$newI][$newJ] == 1) {
                // Recursively explore the neighboring cell
                dfs($matrix, $newI, $newJ, $rows, $cols);
            }
        }
    }
    
    // Count the number of islands
    $islandCount = 0;
    
    // Loop through the matrix
    for ($i = 0; $i < $rows; $i++) {
        for ($j = 0; $j < $cols; $j++) {
            // If we find a "1" that has not been visited yet, it's a new island
            if ($matrix[$i][$j] == 1) {
                // Perform DFS to mark all connected "1"s
                dfs($matrix, $i, $j, $rows, $cols);
                // Increment the island count
                $islandCount++;
            }
        }
    }

    // Generate the output in the form of strings with "X" and "~"
    $output = [];
    for ($i = 0; $i < $rows; $i++) {
        $line = '';
        for ($j = 0; $j < $cols; $j++) {
            // Replace 1 with "X" and 0 with "~"
            $line .= $matrix[$i][$j] == 1 ? 'X' : '~';
        }
        $output[] = $line;
    }
    
    // Return the final output matrix and the number of islands
    return ['islandCount' => $islandCount, 'output' => $output];
}

// Test case matrix
$matrix = [
    [1, 1, 1, 1],
    [0, 1, 1, 0],
    [0, 1, 0, 1],
    [1, 1, 0, 0]
];

// Call the function
$result = countIslandsAndOutput($matrix);

// Display the output
echo "Number of islands: " . $result['islandCount'] . "\n";
foreach ($result['output'] as $line) {
    echo $line . "\n";
}

?>
