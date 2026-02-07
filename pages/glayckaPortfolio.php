<?php include '../includes/header.php'; ?>

<style>
    body {
        background-color: #ffe6eb; 
    }

    .pink-container {
        background-color: #ffffff;
        max-width: 600px;
        margin: 50px auto;
        padding: 50px 30px;
        border-radius: 20px;
        border: 4px solid #ffb7c5;
        text-align: center;
        box-shadow: 0 10px 25px rgba(255, 105, 180, 0.2);
    }

    .pink-container img.avatar-center {
        width: 180px;
        height: 180px;
        border-radius: 50%;
        object-fit: cover;
        border: 5px solid #ff69b4; 
        margin-bottom: 20px;
    }

    .pink-container h1 {
        color: #d63384;
        margin-bottom: 5px;
        font-family: 'Verdana', sans-serif;
    }

    .pink-container h3 {
        color: #ff69b4;
        margin-top: 0;
        text-transform: uppercase;
        letter-spacing: 2px;
        font-size: 0.9rem;
    }

    .pink-container p {
        color: #555;
        line-height: 1.8;
        padding: 0 20px;
    }

    .skills-box {
        background-color: #fff0f5; 
        padding: 20px;
        margin: 20px 0;
        border-radius: 15px;
    }

    .skills-box h4 {
        color: #d63384;
        margin-top: 0;
    }

    .skills-box ul {
        list-style: none;
        padding: 0;
    }

    .skills-box li {
        display: inline-block;
        background: white;
        color: #d63384;
        padding: 8px 15px;
        margin: 5px;
        border-radius: 20px;
        border: 1px solid #ffb7c5;
        font-size: 0.9em;
    }

    .btn-pink {
        display: inline-block;
        margin-top: 20px;
        padding: 12px 30px;
        background-color: #ff69b4;
        color: white;
        text-decoration: none;
        border-radius: 30px;
        font-weight: bold;
        transition: background 0.3s;
    }

    .btn-pink:hover {
        background-color: #d63384;
    }
</style>

<div class="pink-container">
    <img src="../images/glaycka.jpg" class="avatar-center" alt="Partner Profile">
    
    <h1>Glaycka D. Manalo</h1>
    <h3>Aspiring Database Specialist & UI Designer</h3>
    <p> 3rd year BSCS student at STC    </p>
    <div class="skills-box">
        <h4>My Skills</h4>
        <ul>
            <li>Relational Database Design (SQL)</li>
            <li>Data Organization & Logic</li>
            <li>Modern UI/UX Layouts</li>
        </ul>
    </div>

    <div class="contact-info">
        <p><strong>Email:</strong> glaycka@gmail.com</p>
    </div>

    <a href="../index.php" class="btn-pink">← Back to Home</a>
</div>

<?php include '../includes/footer.php'; ?>