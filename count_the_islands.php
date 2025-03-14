<?php 

include_once('Functions/ProcessFunc.php');
$process_func = new ProcessFunc();

$result1 = $process_func->shortestWordLength("TRUE FRIENDS ARE ME AND YOU");
$result2 = $process_func->shortestWordLength("I AM THE LEGENDARY VILLAIN");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Count the Islands</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }
        .container {
            margin-top: 50px;
        }
        .card {
            margin-bottom: 30px;
        }
        .card-header {
            background-color:rgb(61, 179, 183);
            color: white;
        }
        .card-body {
            background-color: #e9ecef;
        }
        .result-output {
            font-size: 1.2rem;
            font-weight: bold;
            color: #343a40;
        }
        .test-case {
            font-size: 1.3rem;
            font-weight: 600;
        }
    </style>
</head>
<body>

<div class="container">
    <h1 class="text-center mb-4">COUNT THE ISLANDS</h1>


    <div class="row d-flex justify-content-center">
        <!-- First Card -->
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">
                    Test Case 1: "TRUE FRIENDS ARE ME AND YOU"
                </div>
                <div class="card-body">
                    <p class="result-output">OUTPUT: <?php echo $result1['length']; ?> - BECAUSE THE SHORTEST WORD IS <span class="text-success"><?php echo $result1['word']; ?></span></p>
                </div>
            </div>
        </div>

        <!-- Second Card -->
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">
                    Test Case 2: "I AM THE LEGENDARY VILLAIN"
                </div>
                <div class="card-body">
                    <p class="result-output">OUTPUT: <?php echo $result2['length']; ?> - BECAUSE THE SHORTEST WORD IS <span class="text-success"><?php echo $result2['word']; ?></span></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Back to main page button -->
    <div class="text-center">
        <a href="index.php" class="btn btn-primary mt-4">Back to Main Page</a>
    </div>
</div>

<!-- Bootstrap JS (Optional for additional Bootstrap functionality) -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</body>
</html>
