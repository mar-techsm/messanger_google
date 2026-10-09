<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STUDENT INFORMATION</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  
<form action="process.php"method="POST">    

    <label>Student ID</label>
    <input type="text" name="student_id" required>
    <label>Full Name</label>
    <input type="text" name="fullname" required>
<label>Email</label>
<input type="email" name="email" required>
<label>Course</label>
<select name="course">
<option value="">Select Course</option>
<option value="BSIT">BSIT</option>
<option value="ACT">ACT</option>
</select>
<label>Year Level</label>
<select name="year_level">
    <option value="">Select Year Level</option>
<option value="First Year">First Year</option>
<option value="Second Year">Second Year</option>
<option value="Third Year">Third Year</option>
<option value="Fourth Year">Fourth Year</option>
</select>
<label>Age</label>
<input type="number" name="age" min="1">

<label>Quiz</label>
<input type="number" name="quiz" min="1" max="100" required>

<label>Laboratory</label>
<input type="number" name="laboratory" min="1" max="100" required>

<label>Examination</label>
<input type="number" name="examination" min="1" max="100" required>


<button type="submit">ProcessInformation</button>
</form>

</body>
</html>