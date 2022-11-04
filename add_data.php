<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <h2>This is HTML forms</h2>
    <form action="backend.php">
        <div>
        <label for="Name">Name</label>
            <input type="text" name="my name" id="Name">
        </div>
        <br>
        <div>
        <label for="ID">ID</label>
            <input type="text" name="my ID" id="ID">
        </div>
        <br>
        <div>
        <label for="Date">Purchase Date</label>
            <input type="date" name="my date" id="Date">
        </div>
        <br>
        <div>
        <label for="Date">Expiry Date</label>
            <input type="date" name="my date" id="Date">
        </div>
        <br>
        <div>
        <label for="img">Bill</label>
            <input type="image" name="Bill" id="Bill">
        </div>
        <br>
        <div>
        <label for="Write Note">Note</label>
            <br><textarea name="my text" cols="50" rows="10" id="Write Note"></textarea>
        </div>
        <br>
        
        <div>
            <input type="submit" value="Submit Now">
            <input type="reset" value="Reset">
        </div>
        
    </form>
</body>
</html>