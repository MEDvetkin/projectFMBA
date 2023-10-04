<!DOCTYPE html>
<html>
<head>
    <title>Resume Filter</title>
</head>
<body>
    <h1>Resume Filter</h1>
    <form action="filter.php" method="post">
        <label for="address">Select Address:</label>
        <select name="address">
            <option value="address1">Address 1</option>
            <option value="address2">Address 2</option>
            <option value="address3">Address 3</option>
        </select>

        <label for="education">Select Education:</label>
        <select name="education">
            <option value="education1">Education 1</option>
            <option value="education2">Education 2</option>
            <option value="education3">Education 3</option>
        </select>

        <label for="experience">Select Experience:</label>
        <select name="experience">
            <option value="experience1">Experience 1</option>
            <option value="experience2">Experience 2</option>
            <option value="experience3">Experience 3</option>
        </select>

        <input type="submit" value="Filter Resumes">
    </form>
</body>
</html>