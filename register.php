<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>HKommunity - Register</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="page">
            <div class="logo">
                <img src="logo.jpg" alt="HKommunity Logo">
            </div>
            <div class="dots one"></div>
            <div class="dots two"></div>
            <div class="accent-pill"></div>

            <main class="landing-layout">
                <section class="landing-brand">
                    <h1>HKommunity</h1>
                    <div class="tag">Hawak Kamay Scholar Portal</div>
                    <p>A centralized platform where HK scholars can monitor<br class="desktop"> their duty hours, requirements, renewal status, and<br class="desktop"> important announcements.</p>
                </section>

                <section class="form-card wide">
                    <h2>REGISTER</h2>
                    <div class="subtitle">Register using your student number. Only verified HK scholars can create an account.</div>

                    <form id="registerForm" action="dashboard.php" method="get" autocomplete="off">
                        <div class="form-grid">
                            <div class="form-group"><label>PHINMAED Email</label><input type="email" name="phinmaed_email" placeholder="Enter PHINMAED email" required></div>
                            <div class="form-group"><label>Student ID Number</label><input type="text" name="student_id" placeholder="Enter student ID number" required></div>

                            <div class="form-group"><label>First Name</label><input type="text" name="first_name" placeholder="Enter first name" required></div>
                            <div class="form-group"><label>Middle Name</label><input type="text" name="middle_name" placeholder="Enter middle name"></div>

                            <div class="form-group"><label>Last Name</label><input type="text" name="last_name" placeholder="Enter last name" required></div>
                            <div class="form-group"><label>Suffix</label><input type="text" name="suffix" placeholder="e.g., Jr., III (optional)"></div>

                            <div class="form-group"><label>Password</label><input type="password" id="password" name="password" placeholder="Enter password" required minlength="8"></div>
                            <div class="form-group"><label>Confirm Password</label><input type="password" id="confirm_password" name="confirm_password" placeholder="Enter confirm password" required minlength="8"></div>

                            <div class="form-group">
                                <label>HK Discount Type</label>
                                <select name="hk_discount" required>
                                    <option value="" disabled selected>Select HK Discount Type</option>
                                    <option value="full">Full Discount</option>
                                    <option value="partial">Partial Discount</option>
                                    <option value="none">None</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Year Level</label>
                                <select name="year_level" required>
                                    <option value="" disabled selected>Select Year Level</option>
                                    <option value="1">1st Year</option>
                                    <option value="2">2nd Year</option>
                                    <option value="3">3rd Year</option>
                                    <option value="4">4th Year</option>
                                    <option value="5">5th Year</option>
                                </select>
                            </div>
                        </div>

                        <p class="hint">Password must be at least 8 characters and contain a number or symbol.</p>

                        <button class="btn btn-green" type="submit">REGISTER</button>
                    </form>

                    <div class="bottom">Already have an account?<br><a href="login.php">Log in →</a></div>
                </section>
            </main>
        </div>

        <script src="Script.js"></script>
    </body>
</html>