<!DOCTYPE html>
<html>

<body>

    <h1>Buat Account Baru!</h1>
    <h3>Sign Up Form</h3>

    <div>
        <form action="/welcome" method="POST">
        @csrf
            <label for="fname">First name:</label><br><br>
            <input type="text" id="fname" name="fname"><br><br>
            <label for="lname">Last name:</label><br><br>
            <input type="text" id="lname" name="lname">

            <p>Gender:</p>
            <input type="radio" id="male" name="gender" value="male">
            <label for="male">Male</label><br>
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">Female</label><br>
            <input type="radio" id="other" name="gender" value="other">
            <label for="other">Other</label>

            <p>Nationality:</p>
            <select name="Nationality">
                <option value="indonesia">Indonesian</option>
                <option>Malaysian</option>
                <option>Korean</option>
                <option>British</option>
            </select>

            <p>Language Spoken:</p>
            <input type="checkbox" name="language" value="bahasaindonesia"/>Bahasa Indonesia<br>
            <input type="checkbox" name="language" value="english"/>English<br>
            <input type="checkbox" name="language" value="other"/>Other<br>

            <p>Bio:</p>
            <textarea id="bio" name="bio" rows="8" cols="25"></textarea>

            <br><input type="submit" value="Sign Up">
        </form>
    </div>

</body>

</html>