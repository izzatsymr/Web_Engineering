<html>

<head>
    <title>lab8 q2</title>
</head>

<body>
    <form action="readform.php" method="post">
        <label>Name:</label>
        <input type="text" name="name">
        <br><br>

        <label>Age:</label>
        <input type="text" name="age">
        <br><br>

        <label>Gender:</label>
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="male">Male
        <br><br>

        <label>Title:</label>
        <input type="checkbox" name="title" value="prof">Prof
        <input type="checkbox" name="title" value="dr">Dr
        <br><br>

        <label>Hobby:</label>
        <select name='hobby[]' multiple size=4>
            <option value='reading'>Reading</option>
            <option value='swimming'>Swimming</option>
            <option value='basketball'>Basketball</option>
            <option value='football'>Football</option>
        </select>
        <br><br>

        <label>Comment:</label>
        <textarea name="comment" rows="5" cols="40"></textarea>
        <br><br>

        <input type="submit" value="submit" />
    </form>

    <p id="print"></p>
</body>

</html>