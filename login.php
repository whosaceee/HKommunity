
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>HKommunity - Login</title>
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
                
                <section class="form-card">
                    <h2>LOG IN</h2>
                    <div class="subtitle">Enter your registered account details.</div>
                    <form action="dashboard.php" method="get">
                        <div class="form-group"><label>Student ID / Username</label><input type="text" placeholder="Enter student id / username" required></div>
                        <div class="form-group"><label>Password</label><input type="password" placeholder="Enter password" required></div>
                        <a href="#" class="forgot">Forgot password?</a>
                        <button class="btn btn-green" type="submit">LOG IN</button>
                    </form>
                    <div class="bottom">No account found for this student number?<br><a href="register.php">Register to create an account →</a></div>
                </section>
            </main>
        </div>
    </body>
    </html>