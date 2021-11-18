
<?php
    $url_1 = $_POST["url_1"];
    $url_2 = $_POST["url_2"];
    $url_3 = $_POST["url_3"];
    $data = [$url_1, $url_2, $url_3, "\n"];

    $f= fopen("url_data.csv", "a");
    fputcsv($data, $f);
    fclose($f)
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            SpelCheck
        </title>
    </head>
    <body>
        <div class ="SpelCheck" >
            Welcome to SpelCheck!
        </div>
        <div class="rules">
            This applications allows the public to understand the context behind the media content consumed. You are able to upload a maximum of 3 URL's.
        </div>        
    </body>
    <form method="post" action="submit.php"> 
        <div class="form-group">
            <label for="url_1">Please enter URL</label> 
            <input name="url_1" id="url_1"  />
        </div>
        <div class ="form-group">
            <label for="url_2">Please enter URL</label>
            <input type="url_2" name="url_2" id="url_2" /> 
        </div>
        <div class ="form-group">
            <label for="url_3">Please enter URL</label> 
            <input type="url_3" name="url_3" id="url_3" />
        </div>
        <div class="form-control">
            <button type="submit" value="Submit"></button>
        </div>
      </form>

      <hr style="width:50%;text-align:left;margin-left:0">

    <header>RESULTS FROM SEARCH</header>
    <p>URL 1</p>
    <hr style="width:50%;text-align:left;margin-left:0">
    <p>URL 2</p>
    <hr style="width:50%;text-align:left;margin-left:0">
    <p>URL 3</p>

</html>