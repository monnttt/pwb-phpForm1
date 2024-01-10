<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    
</head>
<body>
    <h1>Buat Account Baru</h1>
    <h3>Sign Up Form</h3>

    <form method="POST" action="welcome.php">
        <label for="FirstName">First Name:</label><br>
        <input type="text" name="first" id="first" required>
        <br><br>
        <label for="FirstName">Last Name:</label><br>
        <input type="text" name="last" id="first"required>
        <br><br>

        <label for="gender">Gender</label><br><br>
        <input type="radio" name="gender" id="male" value="male">Male <br>
        <input type="radio" name="gender" id="feamale" value="female">Feamale <br><br>

        <label for="nationality">Nationality</label><br><br>
        <select name="country" id="country">
            <option value="Indonesia">Indonesia</option>
            <option value="inggris">English</option>
        </select>
        <br><br>
        
        <label for="language">Language Spoken</label><br><br>
        <input type="checkbox" value="indo" id="indo" name="bahasa[]">Bahasa Indonesia <br>
        <input type="checkbox" value="inggris" id="english" name="bahasa[]">English <br>
        <input type="checkbox" value="other" id="other" name="bahasa[]">Other <br>
        <br><br>

        <label for="bio" >Bio</label>
        <br><br>
        <textarea name="bio" id="" cols="30" rows="10" required></textarea>
        <br>
        <button type="sumbit">Sign Up</button><br><br>
    </form>
</body>
</html>
