<?php
$student_id = $_POST["student_id"] ?? "";
$fullname = $_POST["fullname"] ?? "";
$email = $_POST["email"] ?? "";
$course = $_POST["course"] ?? "";
$year_level = $_POST["year_level"] ?? "";
$age = $_POST["age"] ?? 0;
$quiz = $_POST["quiz"] ?? 0;
$laboratory = $_POST["laboratory"] ?? 0;
$examination = $_POST["examination"] ?? 0;
$date = date("Y-m-d H:i:s");

// Calculate the preliminary grade
$grade = ($quiz * 0.3) + ($laboratory * 0.3) + ($examination * 0.4);

$academic_status = ($grade >= 75) ? "GOOD STANDING" : "ACADEMIC CONCERN";
$personalized_message = "Welcome, $fullname! Your preliminary grade is " . number_format($grade, 0) . ". Keep up the good work!";

if ($grade >= 90) {
    $remark = "Excellent";
} elseif ($grade >= 85) {
    $remark = "Very Good";
} elseif ($grade >= 80) {
    $remark = "Good";
} elseif ($grade >= 75) {
    $remark = "Passed";
} else {
    $remark = "Failed";
}

if ($age < 18) {
    $age_remark = " (Minor)";
} elseif ($age >= 18 && $age <= 25) {
    $age_remark = " (Young Adult)";
} else {
    $age_remark = " (Adult)";
}
?>
```


<style>
    body {
        font-family: Arial, sans-serif;
        background: linear-gradient(135deg, #667eea, #764ba2);
        margin: 0;
        padding: 50px;
    }

    .container {
        width: 500px;
        margin: auto;
        background: white;
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 10px 25px rgba(0,0,0,0.2);
    }

    h2 {
        text-align: center;
        color: #333;
        margin-bottom: 25px;
    }

    p {
        padding: 12px;
        margin: 0;
        border-bottom: 1px solid #ddd;
        color: #444;
    }

    p strong {
        color: #333;
    }

    .remark {
        margin-top: 20px;
        padding: 15px;
        background: #eef0ff;
        border-radius: 8px;
        text-align: center;
        font-weight: bold;
        color: #667eea;
    }

    .back {
        display: block;
        text-align: center;
        margin-top: 20px;
        padding: 12px;
        background: #667eea;
        color: white;
        text-decoration: none;
        border-radius: 8px;
    }

    .back:hover {
        background: #5568d9;
    }

    .personalized-message {
    margin-bottom: 20px;
    padding: 15px;
    background: #eef0ff;
    border-radius: 10px;
    text-align: center;
}

.personalized-message h3 {
    margin: 0 0 10px;
    color: #667eea;
}

.personalized-message p {
    border: none;
    padding: 5px;
}
</style>

<div class="container">
<h2>Student Information</h2>

<div class="personalized-message">
    <h3>Welcome, <?php echo $fullname; ?>!</h3>
    <p>Your preliminary grade is <?php echo number_format($grade, 0); ?>.</p>
    <p>Keep up the good work!</p>
</div>


<p><strong>Date:</strong> <?php echo $date; ?></p>
<p><strong>Student ID:</strong> <?php echo $student_id; ?></p>
<p><strong>Full Name:</strong> <?php echo $fullname; ?></p>
<p><strong>Email:</strong> <?php echo $email; ?></p>
<p><strong>Course:</strong> <?php echo $course; ?></p>
<p><strong>Year Level:</strong> <?php echo $year_level; ?></p>
<p><strong>Age:</strong> <?php echo $age; ?> <?php echo $age_remark; ?></p>
<p><strong>Preliminary Grade:</strong> <?php echo $grade; ?></p>

<div class="AcademicStatus">
    <p><strong>Academic Status:</strong> <?php echo $academic_status; ?></p>
</div>
<div class="remark">
    Remark: <?php echo $remark; ?>
</div>

<a href="index.php" class="back">BACK</a>

</div>