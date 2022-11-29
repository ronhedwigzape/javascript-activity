<?php
echo "Hello Mundo";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Javascript Activity #1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
</head>
<body>
<div class="container-fluid">
    <h1>Miss Universe 2021</h1>
    <h3>Vote one among the TOP 5:</h3>
    <div>
        <label for="candidate-1">
            <input type="radio" name="candidate" id="candidate-1" value="mexico">
            Mexico
        </label>
        <br>
        <label for="candidate-2">
            <input type="radio" name="candidate" id="candidate-2" value="brazil">
            Brazil
        </label>
        <br>
        <label for="candidate-3">
            <input type="radio" name="candidate" id="candidate-3" value="peru">
            Peru
        </label>
        <br>
        <label for="candidate-4">
            <input type="radio" name="candidate" id="candidate-4" value="india">
            India
        </label>
        <br>
        <label for="candidate-5">
            <input type="radio" name="candidate" id="candidate-5" value="dominican_republic">
            Dominican Republic
        </label>
    </div>
    <div>
        <button id="btn-vote" class="btn btn-success" onclick="voteFunc()">VOTE</button>
    </div>
    <hr>
    <div class="table-responsive">
        <div class="col-3">
            <div class="m-2 ">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th class="text-center" scope="col" colspan="2"><h4>Tally</h4></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Mexico</td>
                        <td id="Mexico">0</td>
                    </tr>
                    <tr>
                        <td>Brazil</td>
                        <td id="Brazil">0</td>
                    </tr>
                    <tr>
                        <td>Peru</td>
                        <td id="Peru">0</td>
                    </tr>
                    <tr>
                        <td>India</td>
                        <td id="India">0</td>
                    </tr>
                    <tr>
                        <td>Dominican Republic</td>
                        <td id="Dominican_Republic">0</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</body>
</html>
