<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
   <title>E-Clearance Management System</title>
  <link rel="icon" type="image/png" href="clearance_logo.png"> 
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" href="style.css">
</head>
<body>

<header>

<nav>

<div class="logo">

<img src="clearance_logo.png">

<span>E-Clearance</span>

</div>

<ul>

    <li><a href="#overview">Overview</a></li>

    <li><a href="#workflow">Process</a></li>

    <li><a href="#system-design">Design</a></li>

    <li><a href="#screenshots">Interface</a></li>

</ul>
</nav>

</header>

<main>

<section class="hero">

    <div class="hero-text">

        <span class="hero-badge">
            Business Systems Analysis & Full-Stack Development Case Study
        </span>

        <h1>
            E-Clearance
            <span>Management System</span>
        </h1>

        <p>
            A web-based clearance management system developed to digitize
            the manual clearance process of St. Clare College of Caloocan.
            The system enables students to submit requests online while
            allowing offices, department heads, and administrators to
            efficiently review, approve, and monitor clearance progress
            in real time.
        </p>

        <div class="hero-tags">

            <span>Business Analysis</span>
            <span>System Design</span>
            <span>Web Development</span>

        </div>

        <div class="hero-buttons">

            <a href="#" class="btn-primary">
                Live Demo
            </a>

            <a href="#" class="btn-secondary">
                GitHub Repository
            </a>

        </div>

    </div>

    <div class="hero-image">

        <img src="mockup.png"
             alt="Student Dashboard">

    </div>

</section>
<section id="overview" class="section">

    <div class="section-header">

        <span class="section-subtitle">
            PROJECT OVERVIEW
        </span>

        <h2 class="section-title">
            About the Project
        </h2>

        <p class="section-description">
            An overview of the E-Clearance Management System, including its
            purpose, project details, and technologies used.
        </p>

    </div>

    <!-- Description -->

    <div class="overview-description">

        <div class="overview-icon">

            <i class='bx bx-folder-open'></i>

        </div>

        <div>

            <h3>E-Clearance Management System</h3>

            <p>

                The E-Clearance Management System is a web-based application
                developed to digitize the manual clearance process of
                St. Clare College of Caloocan. It enables students to submit
                clearance requests online while allowing school offices to
                review, approve, and monitor requests efficiently, resulting
                in a faster and more organized clearance process.

            </p>

        </div>

    </div>

    <!-- Information Cards -->

    <div class="overview-cards">

        <div class="info-card">

            <i class='bx bx-calendar'></i>

            <span class="label">Project Duration</span>

            <h4>3 Months</h4>

        </div>

        <div class="info-card">

            <i class='bx bx-book'></i>

            <span class="label">Project Type</span>

            <h4>Thesis Project</h4>

        </div>

        <div class="info-card">

            <i class='bx bx-buildings'></i>

            <span class="label">Client</span>

            <h4>St. Clare College</h4>

        </div>

        <div class="info-card">

            <i class='bx bx-code-alt'></i>

            <span class="label">Tech Stack</span>

            <div class="tech-icons">
              <i class="devicon-html5-plain colored"></i>

    <i class="devicon-css3-plain colored"></i>

    <i class="devicon-javascript-plain colored"></i>

    <i class="devicon-php-plain colored"></i>

    <i class="devicon-mysql-original colored"></i>
            </div>

        </div>

    </div>

</section>
<section id="problem" class="section">

    <div class="section-header">

        <span class="section-subtitle">
            BUSINESS PROBLEM
        </span>

        <h2 class="section-title">
            Challenges in the Existing Clearance Process
        </h2>

        <p class="section-description">
            Before the development of the E-Clearance Management System,
            the school relied on a manual clearance process that caused
            delays, paperwork, and difficulty in monitoring requests.
        </p>

    </div>

    <div class="problem-wrapper">

        <!-- LEFT -->

        <div class="problem-image">

            <!-- Storyset Illustration -->
            <img src="Problem solving-pana.png"
                 alt="Manual Clearance Process">

            <a href="https://storyset.com/business"
               target="_blank"
               class="storyset-link">

                Illustration by Storyset

            </a>

        </div>

        <!-- RIGHT -->

        <div class="problem-list">

            <div class="problem-item">

                <div class="problem-icon">
                    <i class='bx bx-file'></i>
                </div>

                <div>

                    <h3>Paper-Based Process</h3>

                    <p>
                        Students were required to carry printed
                        clearance forms and obtain signatures
                        from multiple offices.
                    </p>

                </div>

            </div>

            <div class="problem-item">

                <div class="problem-icon">
                    <i class='bx bx-time-five'></i>
                </div>

                <div>

                    <h3>Slow Processing</h3>

                    <p>
                        Long queues and manual verification
                        significantly increased the clearance
                        processing time.
                    </p>

                </div>

            </div>

            <div class="problem-item">

                <div class="problem-icon">
                    <i class='bx bx-map'></i>
                </div>

                <div>

                    <h3>No Request Tracking</h3>

                    <p>
                        Students could not monitor the status
                        of their clearance requests in real time.
                    </p>

                </div>

            </div>

            <div class="problem-item">

                <div class="problem-icon">
                    <i class='bx bx-folder-open'></i>
                </div>

                <div>

                    <h3>Risk of Lost Documents</h3>

                    <p>
                        Paper documents could easily be misplaced,
                        damaged, or lost during processing.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

<section id="objectives" class="section">

    <div class="section-header">

        <span class="section-subtitle">
            BUSINESS OBJECTIVES
        </span>

        <h2 class="section-title">
            Project Goals
        </h2>

        <p class="section-description">
            The primary objectives of developing the
            E-Clearance Management System.
        </p>

    </div>

    <div class="objectives-grid">

        <div class="objective-card">

            <i class='bx bx-file'></i>

            <h3>Reduce Paperwork</h3>

            <p>
                Replace manual clearance forms with
                a fully digital process.
            </p>

        </div>

        <div class="objective-card">

            <i class='bx bx-timer'></i>

            <h3>Faster Processing</h3>

            <p>
                Minimize delays in approval and
                clearance verification.
            </p>

        </div>

        <div class="objective-card">

            <i class='bx bx-map-pin'></i>

            <h3>Request Tracking</h3>

            <p>
                Allow students to monitor
                their clearance status.
            </p>

        </div>

        <div class="objective-card">

            <i class='bx bx-data'></i>

            <h3>Centralized Records</h3>

            <p>
                Store clearance records
                securely in one database.
            </p>

        </div>

    </div>

</section>
<section id="workflow" class="section">

    <div class="section-header">

        <span class="section-subtitle">
            SYSTEM WORKFLOW
        </span>

        <h2 class="section-title">
            Clearance Process
        </h2>

        <p class="section-description">
            The workflow illustrates how a clearance request moves through
            different users until it is successfully completed.
        </p>

    </div>

    <div class="workflow">

        <div class="workflow-step">

            <div class="workflow-icon">

                <i class='bx bx-user'></i>

            </div>

            <h3>Student</h3>

            <p>
                Submit an online
                clearance request.
            </p>

        </div>

        <div class="workflow-line"></div>

        <div class="workflow-step">

            <div class="workflow-icon">

                <i class='bx bx-buildings'></i>

            </div>

            <h3>School Staff</h3>

            <p>
                Review submitted
                requirements.
            </p>

        </div>

        <div class="workflow-line"></div>

        <div class="workflow-step">

            <div class="workflow-icon">

                <i class='bx bx-briefcase'></i>

            </div>

            <h3>Department Head</h3>

            <p>
                Finalize the
                clearance approval.
            </p>

        </div>

        <div class="workflow-line"></div>

        <div class="workflow-step">

            <div class="workflow-icon">

                <i class='bx bx-cog'></i>

            </div>

            <h3>Administrator</h3>

            <p>
                Manage users,
                reports and requests.
            </p>

        </div>

        <div class="workflow-line"></div>

        <div class="workflow-step completed">

            <div class="workflow-icon">

                <i class='bx bx-check-circle'></i>

            </div>

            <h3>Completed</h3>

            <p>
                Clearance request
                is successfully finished.
            </p>

        </div>

    </div>

</section>
<section class="diagram-section section" id="system-design">

    <div class="section-header">

        <span class="section-subtitle">
            SYSTEM DESIGN
        </span>

        <h2 class="section-title">
            UML & Database Diagrams
        </h2>

        <p class="section-description">
            The following diagrams present the functional, process, and
            database design of the E-Clearance Management System.
        </p>

    </div>

    <div class="diagram-grid">

        <!-- Use Case -->

        <div class="diagram-card">

            <h3>Use Case Diagram</h3>

            <a href="ucd.png"
               class="diagram-image glightbox"
               data-gallery="diagrams">

                <img src="ucd.png"
                alt="Use Case Diagram">

                <div class="diagram-overlay">

                    <i class='bx bx-search-alt'></i>

                    <span>Click to Enlarge</span>

                </div>

            </a>

            <div class="diagram-details">

                <div class="diagram-info">

                    <i class='bx bx-bulb'></i>

                    <div>

                        <h4>Purpose</h4>

                        <p>

                            Shows how different users interact
                            with the system.

                        </p>

                    </div>

                </div>

                <div class="diagram-info">

                    <i class='bx bx-check-circle'></i>

                    <div>

                        <h4>Key Insights</h4>

                        <ul>

                            <li>Four user roles</li>

                            <li>System boundary</li>

                            <li>Functional requirements</li>

                        </ul>

                    </div>

                </div>

            </div>

        </div>

        <!-- Activity -->

        <div class="diagram-card">

            <h3>Activity Diagram</h3>

            <a href="activity-diagram.png"
               class="diagram-image glightbox"
               data-gallery="diagrams">

                <img src="activity-diagram.png"
                alt="Activity Diagram">

                <div class="diagram-overlay">

                    <i class='bx bx-search-alt'></i>

                    <span>Click to Enlarge</span>

                </div>

            </a>

            <div class="diagram-details">

                <div class="diagram-info">

                    <i class='bx bx-git-branch'></i>

                    <div>

                        <h4>Purpose</h4>

                        <p>

                            Illustrates the complete workflow
                            from request submission until approval.

                        </p>

                    </div>

                </div>

                <div class="diagram-info">

                    <i class='bx bx-check-circle'></i>

                    <div>

                        <h4>Key Insights</h4>

                        <ul>

                            <li>Process flow</li>

                            <li>Decision points</li>

                            <li>Approval sequence</li>

                        </ul>

                    </div>

                </div>

            </div>

        </div>

        <!-- ER Diagram -->

        <div class="diagram-card">

            <h3>Entity Relationship Diagram</h3>

            <a href="erd.png"
               class="diagram-image glightbox"
               data-gallery="diagrams">

                <img src="erd.png"
                alt="ER Diagram">

                <div class="diagram-overlay">

                    <i class='bx bx-search-alt'></i>

                    <span>Click to Enlarge</span>

                </div>

            </a>

            <div class="diagram-details">

                <div class="diagram-info">

                    <i class='bx bx-data'></i>

                    <div>

                        <h4>Purpose</h4>

                        <p>

                            Represents the database structure
                            and relationships between entities.

                        </p>

                    </div>

                </div>

                <div class="diagram-info">

                    <i class='bx bx-check-circle'></i>

                    <div>

                        <h4>Key Insights</h4>

                        <ul>

                            <li>Entity relationships</li>

                            <li>Primary & Foreign Keys</li>

                            <li>Data Integrity</li>

                        </ul>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>
<section class="screenshots section" id="screenshots">

    <div class="section-header">

        <span class="section-subtitle">
            USER INTERFACE
        </span>

        <h2 class="section-title">
            System Screenshots
        </h2>

        <p class="section-description">

            Explore the major interfaces of the
            E-Clearance Management System and see
            how each user interacts with the application.

        </p>

    </div>

    <!-- STUDENT -->

    <div class="screen-showcase">

        <div class="screen-image">

            <img src="student_dashboard.png"
                 alt="Student Dashboard">

        </div>

        <div class="screen-content">

            <span class="screen-label">
                STUDENT MODULE
            </span>

            <h3>Student Dashboard</h3>

            <p>

                The student dashboard allows students to submit
                clearance requests, monitor their progress,
                and receive updates from different offices.

            </p>

            <div class="feature-list">

                <span>Submit Clearance</span>
                <span>Track Status</span>
                <span>View Remarks</span>
                <span>Profile</span>

            </div>

        </div>

    </div>

    <!-- OFFICE -->

    <div class="screen-showcase reverse">

        <div class="screen-image">

            <img src="office_dashboard.png"
                 alt="Office Dashboard">

        </div>

        <div class="screen-content">

            <span class="screen-label">

                OFFICE MODULE

            </span>

            <h3>Clearing Office Dashboard</h3>

            <p>

                Clearing offices can review student requests,
                approve or reject submissions,
                and leave remarks before forwarding
                the request.

            </p>

            <div class="feature-list">

                <span>Approve</span>
                <span>Reject</span>
                <span>Remarks</span>

            </div>

        </div>

    </div>

    <!-- DEPARTMENT HEAD -->

    <div class="screen-showcase">

        <div class="screen-image">

            <img src="dept_dashboard.png"
                 alt="Department Head Dashboard">

        </div>

        <div class="screen-content">

            <span class="screen-label">

                DEPARTMENT HEAD

            </span>

            <h3>Department Approval</h3>

            <p>

                Department heads review students
                from their department and verify
                academic requirements before the
                clearance proceeds.

            </p>

            <div class="feature-list">

                <span>Approve</span>
                <span>Remarks</span>
                <span>Department View</span>

            </div>

        </div>

    </div>

    <!-- ADMIN -->

    <div class="screen-showcase reverse">

        <div class="screen-image">

            <img src="admin_dashboard.png"
                 alt="Admin Dashboard">

        </div>

        <div class="screen-content">

            <span class="screen-label">

                ADMINISTRATOR

            </span>

            <h3>Administrator Dashboard</h3>

            <p>

                Administrators manage users,
                departments, offices,
                and monitor the overall
                clearance process.

            </p>

            <div class="feature-list">

                <span>User Management</span>
                <span>Departments</span>
                <span>Reports</span>
                <span>Settings</span>

            </div>

        </div>

    </div>

</section>

<section id="reflection" class="section">

    <div class="section-header">

        <span class="section-subtitle">
            REFLECTION
        </span>

        <h2 class="section-title">
            Challenges & Lessons Learned
        </h2>

        <p class="section-description">
            Throughout the development of the E-Clearance Management System,
            several challenges were encountered that provided valuable
            learning experiences and strengthened both technical and
            analytical skills.
        </p>

    </div>

    <div class="reflection-grid">

        <!-- Challenge -->

        <div class="reflection-card">

            <div class="reflection-icon">

                <i class='bx bx-error-circle'></i>

            </div>

            <h3>Understanding Business Requirements</h3>

            <p>
                One of the biggest challenges was identifying the different
                clearance procedures followed by each office, since every
                department had unique approval requirements.
            </p>

            <div class="lesson">

                <strong>Lesson Learned</strong>

                <p>
                    Conducting proper requirements gathering before
                    development reduces misunderstandings and redesign.
                </p>

            </div>

        </div>

        <!-- Challenge -->

        <div class="reflection-card">

            <div class="reflection-icon">

                <i class='bx bx-data'></i>

            </div>

            <h3>Database Design</h3>

            <p>
                Designing the database relationships required several
                revisions to ensure data consistency between students,
                departments, offices, and clearance requests.
            </p>

            <div class="lesson">

                <strong>Lesson Learned</strong>

                <p>
                    A well-planned ER Diagram simplifies development
                    and minimizes database issues later.
                </p>

            </div>

        </div>

        <!-- Challenge -->

        <div class="reflection-card">

            <div class="reflection-icon">

                <i class='bx bx-code-alt'></i>

            </div>

            <h3>System Integration</h3>

            <p>
                Synchronizing clearance statuses across different user
                roles required careful backend validation and testing.
            </p>

            <div class="lesson">

                <strong>Lesson Learned</strong>

                <p>
                    Proper testing and workflow validation are essential
                    when multiple users interact with the same data.
                </p>

            </div>

        </div>

    </div>

</section>

</main>
<footer class="case-footer">

    <div class="container">

        <h2>
E- Clearance Management System
        </h2>

        <p>
Designed, analyzed, documented, and developed as part of a Business Systems Analysis & Full-Stack Web Development case study.
        </p>

        <a href="htdocs/portfolio.php" class="back-btn">

            <i class='bx bx-arrow-back'></i>

            Back to Portfolio

        </a>

        <span class="copyright">

            © 2026 Justiniane, Quennie. All Rights Reserved.

        </span>

    </div>

</footer>
<script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>
<script src="script.js"></script>
</body>
</html>