<?php 

include_once('Functions/ProcessFunc.php');
$process_func = new ProcessFunc();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $target = $_POST['target'];
    $input = $_POST['words'];

    $words = explode(",", $input);

    $result = $process_func->wordSearch($words, $target);

    $output = "OUTPUT: [" . implode(", ", $result) . "]";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Word Search Test</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
</head>
<body>

<div class="container">
    <h1 class="text-center mb-4">WORD SEARCH</h1>

    <div class="row d-flex justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Find the target
                </div>
                <div class="card-body">
                    <form method="POST">
                        <label for="target">Enter the target word: </label>
                        <input type="text" name="target" id="target" required><br><br>

                        <label for="words">Enter the list of words (comma-separated): </label>
                        <input type="text" name="words" id="words" required><br><br>

                        <button type="submit">Find Indices</button>
                    </form>

                    <p class="result-output mt-4">
                        <?php if (isset($output)): ?>
                            <p><?php echo 'WORDS: '.$input; '<br>' ?></p>
                            <p><?php echo 'TARGET: '.$target; '<br>' ?></p>
                            <p><?php echo $output; ?></p>
                        <?php endif; ?>
                    </p>

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
