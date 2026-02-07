<?php include '../includes/scripts/form.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Information Form</title>
    <link rel="stylesheet" href="../css/formStyle.css">
</head>
<body>

<div class="form-container">
    <a href="../index.php" class="btn-back">← Back to Home</a>
    <h2>Student Profile</h2>
    
    <form action="" method="POST">
        
        <div class="form-group">
            <label>Name:</label>
            <input type="text" name="name" value="<?php echo $student_name; ?>">
        </div>

        <div class="form-group">
            <label>Course:</label>
            <input type="text" name="course" value="<?php echo $course; ?>">
        </div>

        <div class="form-group">
            <label>Year Level:</label>
            <select name="year_level">
                <option value="firstYear" <?php if($year_level == "1st Year") echo "selected"; ?>>First Year</option>
                <option value="secondYear" <?php if($year_level == "2nd Year") echo "selected"; ?>>Second Year</option>
                <option value="thirdYear" <?php if($year_level == "3rd Year") echo "selected"; ?>>Third Year</option>
                <option value="fourthYear" <?php if($year_level == "4th Year") echo "selected"; ?>>Fourth Year</option>
            </select>
        </div>

        <div class="form-group">
            <label>Student ID:</label>
            <input type="text" name="student_id" value="<?php echo $student_id; ?>">
        </div>

        <div class="form-group">
            <label>Gender:</label>
            <div class="radio-group">
                <input type="radio" name="gender" value="Male" <?php if($gender == "Male") echo "checked"; ?>> Male
                <input type="radio" name="gender" value="Female" <?php if($gender == "Female") echo "checked"; ?>> Female
            </div>
        </div>

        <div class="form-group">
            <label>Status:</label>
            <div class="radio-group">
                <input type="radio" name="status" value="Enrolled" <?php if($status == "Enrolled") echo "checked"; ?>> Enrolled
                <input type="radio" name="status" value="Not Enrolled" <?php if($status == "Not Enrolled") echo "checked"; ?>> Not Enrolled
            </div>
        </div>

        <div class="form-group">
            <label>Student Type:</label>
            <select name="student_type">
                <option value="New" <?php if($student_type == "New") echo "selected"; ?>>New</option>
                <option value="Old" <?php if($student_type == "Old") echo "selected"; ?>>Old</option>
                <option value="Returnee" <?php if($student_type == "Returnee") echo "selected"; ?>>Returnee</option>
                <option value="Transferee" <?php if($student_type == "Transferee") echo "selected"; ?>>Transferee</option>
            </select>
        </div>

        <button type="submit" class="btn-send">Submit</button>
    </form>
</div>

</body>
</html>