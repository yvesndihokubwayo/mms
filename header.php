<!DOCTYPE html>
<html>
<head>
  <title>Admin Panel</title>
  <link href="assets/img/tt.png" rel="icon">
  <style>
    body {
      background-color: white;
    }

    header {
      background-color: orange;
      padding: 20px;
      border-radius: 5px;
    }

    nav {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    nav a {
      color: white;
      text-decoration: none;
      padding: 10px;
      transition: color 0.3s;
      font-size: 24px;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    nav a:hover {
      color: blue;
      background-color: white;
      border-radius: 5px;
    }
    .container {
      max-width: 1000px;
      margin: 20px auto;
      padding: 20px;
    }

    h1 {
      color: darkblue;
      font-size: 32px;
      margin-bottom: 20px;
    }

    p {
      font-size: 18px;
      line-height: 1.5;
      margin-bottom: 10px;
    }

    .info-card {
      background-color: #f0f0f0;
      padding: 20px;
      border-radius: 5px;
      margin-bottom: 20px;
    }

    .info-card h2 {
      color: black;
      font-size: 24px;
      margin-bottom: 10px;
    }

    .info-card p {
      font-size: 16px;
      margin-bottom: 10px;
    }
  </style>
</head>
<body>
  <header>
    <nav>
      <a href="mentors_info_table.php">Mentors Info</a>
      <a href="mentors_acc_table.php">Mentors A/C</a>
      <a href="mentees_info_table.php">Mentees Info</a>
      <a href="mentees_acc_table.php">Mentees A/C</a>
      <a href="contact_messages_table.php">Clients Messages</a>
      <a href="subscribers_table.php">Subscribers</a>
    </nav>
  </header>


  <div class="container">
    <h1>Welcome to the Admin Panel</h1>

    <div class="info-card">
      <h2>Mentors Info</h2>
      <p>Manage and view information about mentors registered on the Mentee Mentor Space platform.</p>
      <p>You can perform actions such as adding new mentors, editing existing mentor profiles, and deleting mentor records.</p>
    </div>

    <div class="info-card">
      <h2>Mentees Info</h2>
      <p>Access and manage information related to mentees registered on the Mentee Mentor Space platform.</p>
      <p>You have the ability to add new mentees, update mentee profiles, and remove mentee records as needed.</p>
    </div>

    <div class="info-card">
      <h2>Clients Messages</h2>
      <p>Review and respond to messages sent by clients who are seeking mentorship or have inquiries regarding the platform.</p>
      <p>You can prioritize and address client messages efficiently to ensure a positive user experience.</p>
    </div>

    <div class="info-card">
      <h2>Subscribers</h2>
      <p>Manage the list of subscribers who have opted to receive updates and newsletters from the Mentee MentorSpace platform.</p>
      <p>You can view and manage the subscriber list, send out newsletters or important announcements, and keep the subscribers engaged with relevant information.</p>
    </div>
  </div>

</body>
</html>
