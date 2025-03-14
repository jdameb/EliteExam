<?php 

include_once('Functions/ProcessFunc.php');
$process_func = new ProcessFunc();

$result1 = null;

if (isset($_GET['string'])) {
    $input_string = $_GET['string'];

    $result1 = $process_func->shortestWordLength($input_string);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shortest Word Test</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
</head>
<body>

<div class="container">
    <h1 class="text-center mb-4">SHORTEST WORD</h1>

    <div class="row d-flex justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Find the shortest word
                </div>
                <div class="card-body">
                    <form action="" method="GET">
                        <label for="string_of_words">STRING OF WORDS</label>
                        <input type="text" name="string" id="string_of_words" class="form-control" required>

                        <input type="submit" value="SUBMIT" class="btn btn-success mt-3" style="width:100px; background-color:green; background-image: linear-gradient(to bottom, #33cc33 0%, #339933); color:white;" >
                    </form>

                    <?php if ($result1 !== null && isset($result1['word']) && isset($result1['length'])): ?>
                        
                        <p class="result-output mt-4">
                            <?php echo htmlspecialchars($_GET['string']). '<br>'; ?>
                            OUTPUT: 
                            <?php echo $result1['length']; ?> - BECAUSE THE SHORTEST WORD IS 
                            <span class="text-success"><?php echo $result1['word']; ?></span>
                        </p>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>

    <div class="text-center">
        <a href="index.php" class="btn btn-primary mt-4">Back to Main Page</a>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</body>
</html>
