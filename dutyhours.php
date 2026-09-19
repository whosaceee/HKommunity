<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HKommunity - Duty Hours</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
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

            <a class="nav-item" href="dashboard.php" title="Dashboard"><i class="fa-solid fa-house"></i><span class="nav-text">Dashboard</span></a>
            <a class="nav-item active" href="dutyhours.php" title="Duty Hours"><i class="fa-solid fa-clock"></i><span class="nav-text">Duty Hours</span></a>
            <a class="nav-item" href="#" title="Requirements"><i class="fa-solid fa-file-alt"></i><span class="nav-text">Requirements</span></a>
            <a class="nav-item" href="#" title="Renewal Status"><i class="fa-solid fa-sync"></i><span class="nav-text">Renewal Status</span></a>
            <a class="nav-item" href="#" title="Announcements"><i class="fa-solid fa-bullhorn"></i><span class="nav-text">Announcements</span></a>
        </nav>
    </aside>

    <main class="main">
        <header class="topbar">
            <div class="select">AY 2026-2027 · 1st Semester<b>⌄</b></div>

            <button class="notif-btn" id="notifBtn" type="button" aria-label="Notifications">
                <i class="fa-solid fa-bell"></i>    
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
                       <i class="fa-solid fa-gear"></i>  Account Settings
                    </a>
                    <a href="#" class="profile-menu-item">
                        <i class="fa-solid fa-key"></i> Change Password
                    </a>
                    <a href="login.php" class="profile-menu-item danger">
                        <i class="fa-solid fa-sign-out"></i>  Log out
                    </a>
                </div>
            </div>
        </header>

        <section class="content">
            <div class="title-line"></div>

            <div class="page-head">
                <div>
                    <h1>Duty Hours</h1>
                    <p class="sub">Monitor validated service hours for the current semester.</p>
                </div>

                <div class="info-banner">
                    <span class="info-icon">i</span>
                    <p>Duty hour records are encoded by the HK coordinator. For any concerns, please contact the HK office.</p>
                </div>
            </div>

            <div class="progress-banner">
                <div class="progress-circle">
                    <div class="progress-num">35</div>
                    <div class="progress-label">of 55 hours</div>
                </div>
                <div class="progress-info">
                    <h2>Your duty hour progress</h2>
                    <div class="progress-bar"><span style="width: 64%;"></span></div>
                    <p class="progress-caption">35 hours completed &nbsp;·&nbsp; 20 hours remaining</p>
                </div>
            </div>

                <div class="records-card">
                    <div class="records-head">
                        <div>
                            <h2>Duty hour records</h2>
                            <p class="sub-small">4 recorded activities</p>
                        </div>

                        <div class="filters">
                            <div class="filter-select">All months <b>⌄</b></div>
                            <div class="filter-select">Newest first <b>⌄</b></div>
                        </div>
                    </div>

                    <div class="table-scroll">
                        <table class="duty-table">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Activity</th>
                                    <th>Hours</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Aug 26, 2026</td>
                                    <td>Library Assistance</td>
                                    <td>4</td>
                                    <td><span class="status validated">Validated</span></td>
                                </tr>
                                <tr>
                                    <td>Aug 19, 2026</td>
                                    <td>Enrollment Support Student</td>
                                    <td>6</td>
                                    <td><span class="status validated">Validated</span></td>
                                </tr>
                                <tr>
                                    <td>Aug 12, 2026</td>
                                    <td>Campus Clean-up Drive</td>
                                    <td>5</td>
                                    <td><span class="status validated">Validated</span></td>
                                </tr>
                                <tr>
                                    <td>Aug 05, 2026</td>
                                    <td>Orientation Assistance</td>
                                    <td>4</td>
                                    <td><span class="status checking">For Checking</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                <div class="records-foot">
                    <button class="btn-report" type="button">Generate Report <b>⌄</b></button>
                </div>
            </div>
        </section>
    </main>
</div>
</div>

<script src="Script.js"></script>

</body>
</html>