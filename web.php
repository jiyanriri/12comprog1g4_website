<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information Form</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f7f9fc;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            color: #333;
        }

        .form-wrapper {
            width: 100%;
            max-width: 900px;
            padding: 20px;
            box-sizing: border-box;
        }

        .form-container {
            background-color: #fff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            width: 100%;
            box-sizing: border-box;
        }

        .form-container h2 {
            margin-bottom: 40px;
            color: #5c67a3;
            text-align: center;
            font-size: 28px;
            font-weight: 600;
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: #5c67a3;
        }

        .form-group input,
        .form-group select {
            width: 100%;
            padding: 14px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 16px;
            background-color: #f7f9fc;
            transition: border-color 0.3s ease;
        }

        .form-group input:focus,
        .form-group select:focus {
            border-color: #5c67a3;
            outline: none;
        }

        .form-group input[type="radio"] {
            width: auto;
            margin-right: 10px;
        }

        .form-group .radio-group {
            display: flex;
            justify-content: space-around;
            margin-top: 10px;
        }

        .form-group input[type="submit"] {
            background-color: #5c67a3;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 8px;
            padding: 16px;
            font-size: 18px;
            transition: background-color 0.3s ease;
            width: 100%;
            margin-top: 20px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
        }

        .form-group input[type="submit"]:hover {
            background-color: #4752a3;
        }

        @media (max-width: 768px) {
            .form-container {
                padding: 20px;
            }

            .form-container h2 {
                font-size: 22px;
            }

            .form-group input,
            .form-group select {
                font-size: 14px;
                padding: 12px;
            }

            .form-group input[type="submit"] {
                font-size: 16px;
            }
        }
    </style>
</head>
<body>

    <div class="form-wrapper">
        <div class="form-container">
            <h2>Student Information Form</h2>
            <form action="submit_form.php" method="post">
                <div class="form-group">
                    <label for="student_id">Student ID:</label>
                    <input type="text" id="student_id" name="student_id" required>
                </div>
                <div class="form-group">
                    <label for="birthday">Birthday:</label>
                    <input type="date" id="birthday" name="birthday" required>
                </div>
                <div class="form-group">
                    <label for="student_fname">Student First Name:</label>
                    <input type="text" id="student_fname" name="student_fname" required>
                </div>
                <div class="form-group">
                    <label for="student_mname">Student Middle Initial:</label>
                    <input type="text" id="student_mname" name="student_mname">
                </div>
                <div class="form-group">
                    <label for="student_lname">Student Last Name:</label>
                    <input type="text" id="student_lname" name="student_lname" required>
                </div>
                <div class="form-group">
                    <label for="student_email">Student Email:</label>
                    <input type="text" id="student_email" name="student_email" required>
                </div>
                
                <div class="form-group">
                    <label for="guardian_fname">Guardian First Name:</label>
                    <input type="text" id="guardian_fname" name="guardian_fname" required>
                </div>
                <div class="form-group">
                    <label for="guardian_lname">Guardian Last Name:</label>
                    <input type="text" id="guardian_lname" name="guardian_lname" required>
                </div>
                <div class="form-group">
                    <label for="guardian_phone">Guardian Phone Number:</label>
                    <input type="text" id="guardian_phone" name="guardian_phone" required>
                </div>
                <div class="form-group">
                    <label for="grade">Grade:</label>
                    <input type="text" id="grade" name="grade" required>
                </div>
                <div class="form-group">
                    <label for="section">Section:</label>
                    <input type="text" id="section" name="section" required>
                </div>
                <div class="form-group">
                    <label for="adviser">Adviser:</label>
                    <input type="text" id="adviser" name="adviser" required>
                </div>
                <div class="form-group">
                    <label>Schedule:</label>
                    <div class="radio-group">
                        <label for="morning">
                            <input type="radio" id="morning" name="schedule" value="Morning" required> Morning
                        </label>
                        <label for="afternoon">
                            <input type="radio" id="afternoon" name="schedule" value="Afternoon"> Afternoon
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <input type="submit" value="Submit">
                </div>
            </form>
        </div>
    </div>

</body>
</html>
