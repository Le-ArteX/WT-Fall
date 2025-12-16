<!DOCTYPE html>
<html lang="en">
<head>  
    <title>Travel Page</title>
</head>
<body>
    <div class="form-container">
        <h2>Travel Form</h2>
        <form action="submit_travel.php" method="POST">
            <label for="destination">Destination:</label>
            <input type="text" id="destination" name="destination" required>

            <label for="departure-date">Departure Date:</label>
            <input type="text" id="departure-date" name="departure_date" required>

            <label for="return-date">Return Date:</label>
            <input type="text" id="return-date" name="return_date" required>

            <button type="submit">Submit</button>
        </form>
    </div>
    </body  
