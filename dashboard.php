<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HKommunity - Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class = "page">
    <div class="dashboard">
    <aside class="sidebar" id="sidebar">
        <div class="sidebar-top">
            <button class="logo-btn" id="logoBtn" type="button">
                <img class="full-logo" src="dashboard-logo.jpg" alt="HKommunity">
                <img class="icon-logo" src="logo.jpg" alt="HK">
            </button>
        </div>

        <nav class="sidebar-nav">

            <a class="nav-item active" href="dashboard.php" title="Dashboard"><span class="icon">⌂</span><span class="nav-text">Dashboard</span></a>
            <a class="nav-item" href="dutyhours.php" title="Duty Hours"><span class="icon">◷</span><span class="nav-text">Duty Hours</span></a>
            <a class="nav-item" href="#" title="Requirements"><span class="icon">▤</span><span class="nav-text">Requirements</span></a>
            <a class="nav-item" href="#" title="Renewal Status"><span class="icon">✓</span><span class="nav-text">Renewal Status</span></a>
            <a class="nav-item" href="#" title="Announcements"><span class="icon">♧</span><span class="nav-text">Announcements</span></a>
        </nav>
    </aside>

    <main class="main">
        <header class="topbar">
            <div class="select">AY 2026-2027 · 1st Semester<b>⌄</b></div>

            <button class="notif-btn" id="notifBtn" type="button" aria-label="Notifications">
                <span class="notif-icon">◈</span>
                <span class="notif-badge">3</span>
            </button>

            <div class="profile-wrapper" id="profileWrapper">
                <div class="profile" id="profileBtn">
                    <div class="avatar"> ST </div>
                    <div class="profile-name">Student Name<small>HK Scholar</small></div>
                    <b>⌄</b>
                </div>

                <div class="profile-menu" id="profileMenu">
                    <div class="profile-menu-head">
                        <div class="avatar">ST</div>
                        <div class="profile-menu-info">
                            <b>Student Name</b>
                            <small>03-01-2526-010101</small>
                        </div>
                    </div>

                    <div class="profile-menu-label">PERSONAL</div>

                    <a href="#" class="profile-menu-item">
                        <span class="menu-icon">⚙</span> Account Settings
                    </a>
                    <a href="#" class="profile-menu-item">
                        <span class="menu-icon">🔑</span> Change Password
                    </a>
                    <a href="login.php" class="profile-menu-item danger">
                        <span class="menu-icon">⏻</span> Log out
                    </a>
                </div>
            </div>
        </header>

        <section class="content">
            <div class="title-line"></div>
            <h1>Dashboard</h1>
            <p class="sub">Your scholarship overview</p>

            <div class="overview-card">
                <span class="overview-eyebrow">SCHOLARSHIP OVERVIEW</span>
                <h2 class="overview-greet">Good day, Student Name!</h2>
                <p class="overview-sub">Here is your scholarship overview</p>
                <span class="overview-watermark">HK</span>
            </div>

            <div class="stats">
                <div class="stat year-card">
                    <div class="stat-head"><span class="stat-icon">▤</span>Year Level</div>
                    <div class="number">3rd Year</div>
                    <div class="stat-note">AY 2026-2027 · 1st Semester</div>
                </div>

                <div class="stat duty-card">
                    <div class="stat-head"><span class="stat-icon">◷</span>Duty Hours</div>
                    <div class="number">0 / 55</div>
                    <div class="bar"><span style="width: 0%;"></span></div>
                    <div class="stat-note">55 hours remaining</div>

                    <a href="dutyhours.php" class="details">View details →</a>
                </div>

                <div class="stat requirements-card">
                    <div class="stat-head"><span class="stat-icon">▤</span>Requirements</div>
                    <div class="number">0 / 4</div>
                    <div class="bar"><span style="width: 0%;"></span></div>
                    <div class="stat-note">4 requirements need attention</div>
                    <button class="details">View details →</button>
                </div>

                <div class="stat renewal-card">
                    <div class="stat-head"><span class="stat-icon">✓</span>Renewal Status</div>
                    <div class="number renewal-text">Not Started</div>
                    <div class="bar"><span style="width: 0%;"></span></div>
                    <div class="stat-note">No renewal application yet</div>
                    <a href="dutyhours.php" class="details"> View details →</a>
                </div>
            </div>
             <div class="lower">
                <div class="panel">

                    <div class="panel-title">
                        <span>Recent Announcements</span>
                        <span class="view-all">View all →</span>
                    </div>

                    <div class="announcement">
                        <div class="bullet">•</div>
                        <div class="announcement-info"><b>HK Renewal Period</b>
                            <small>Renewal update</small>
                        </div>
                        <div class="date">Sep 12</div>
                    </div>

                    <div class="announcement">
                        <div class="bullet">•</div>
                        <div class="announcement-info"><b>College Fest Duty Schedule</b>
                            <small>Duty Hours update</small>
                        </div>
                        <div class="date">Sep 11</div>
                    </div>

                    <div class="announcement">
                        <div class="bullet">•</div>
                        <div class="announcement-info"><b>Updated File Guidelines</b>
                            <small>Requirements update</small>
                        </div>
                        <div class="date">Sep 10</div>
                    </div>
                </div>

                <div class="panel">
                    <div class="panel-title">Quick Access</div>
                    <div class="quick">▤ HK Renewal Form<span>›</span></div>
                    <div class="quick">▤ Scholar Booklet<span>›</span></div>
                    <div class="quick">▤ Duty Roadmap<span>›</span></div>
                    <div class="quick">▤ Contact HK Office<span>›</span></div>
                </div>
            </div>


            
        </section>
    </main>
</div>
</div>


<script src="Script.js"></script>

</body>
</html>