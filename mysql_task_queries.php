<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MYSQL QUERIES</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
</head>
<body>

<div class="container">
    <h1 class="text-center mb-4">MYSQL QUERIES</h1>

    <div class="row d-flex justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Display total number of albums sold per artist
                </div>
                <div class="card-body">
                    <p>SELECT artist_name AS ARTIST, COUNT(*) AS ALBUMS_SOLD
                    FROM `album_sales` 
                    GROUP BY artist_name 
                    ORDER BY artist_name;</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Display combined album sales per artist
                </div>
                <div class="card-body">
                    <p>SELECT artist_name AS ARTIST, SUM(sales) as TOTAL_SALES
                    FROM `album_sales` 
                    GROUP BY artist_name 
                    ORDER BY TOTAL_SALES DESC;</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row d-flex justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Display the top 1 artist who sold most combined album sales
                </div>
                <div class="card-body">
                    <p>SELECT artist_name AS ARTIST, SUM(sales) as TOTAL_SALES
                    FROM `album_sales` 
                    GROUP BY artist_name 
                    ORDER BY TOTAL_SALES DESC
                    LIMIT 1</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Display the top 10 albums per year based on their number of sales
                </div>
                <div class="card-body">
                   <p>
                    SELECT album_name AS ALBUMS, sales AS SALES
                    FROM album_sales
                    ORDER BY sales DESC
                    LIMIT 10;</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Display list of albums based on the searched artist
                </div>
                <div class="card-body">
                    <p>
                    SELECT album_name AS ALBUMS 
                    FROM `album_sales` 
                    WHERE artist_name = 'Moonbyul';</p>
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
