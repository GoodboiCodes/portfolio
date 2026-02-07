<?php include 'includes/header.php'; ?>

<div class="selection-wrapper">
    <h1>Select a Profile</h1>
    
    <div class="profiles-container">
        <a href="<?= $BASE_URL ?>/pages/darenzPortfolio.php" class="profile-card">
            <img src="<?= $BASE_URL ?>/images/darenz.png" alt="Student 1 Photo">
            <h2>Darenz T. Apillanes</h2>
            <p>Developer</p>
        </a>

        <a href="<?= $BASE_URL ?>/pages/glayckaPortfolio.php" class="profile-card">
            <img src="<?= $BASE_URL ?>/images/glaycka.jpg" alt="Student 2 Photo">
            <h2>Glaycka D. Manalo</h2>
            <p>Designer</p>
        </a>
    </div>
    <div class="profiles-container" style="padding-top: 20px;">
        <a href="<?= $BASE_URL ?>/pages/darenzForm.php" class="profile-card">
            <h2>Student Information</h2>
        </a>
    </div>
</div>

<?php include 'includes/footer.php'; ?>