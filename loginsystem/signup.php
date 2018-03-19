<?php
include_once 'sections/header.php';

?>
    <section class="main-container">
        <div class="main-wrapper">
            <h2>Sign Up</h2>
            <form class="signup-form" action="includes/signup.db.php" method="post">
                <input type="text" name="name" placeholder="Name">
                <input type="text" name="email" placeholder="E-mail">
                <input type="text" name="uid" placeholder="Username">
                <input type="password" name="pass" placeholder="Password">
                <button type="submit" name="submit">Sign up</button>
            </form>
        </div>
    </section>
<?php
include_once "sections/footer.php";
?>