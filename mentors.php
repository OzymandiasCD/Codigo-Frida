<?php
    $title = 'Mentores'; //set title for this page (echoed in header file)
    require_once 'includes/header.php'; //include header file
?>

<main class='container'>

    <div class='row'>
        <div class='col s12 l6'>
            <h1 class='pink-text no-margin-bot'>Mentores</h1>
        </div>
        <div class='col s12 l6 input-field margin-top-resizable-search no-margin-bot'>
            <i class='material-icons prefix'>search</i>
            <input placeholder='Búsqueda por nombre...'>
        </div>
    </div>

    <div class='row'>
        <div class='col s12' id='mentors'>
            <a class='avatar valign-wrapper' href='profile.php'>
                <img class='circle left' src='img/user.jpg'>
                <div class='margin-left-1'>
                    <h4 class='black-text no-margin'>Lorem Ipsum Dolor Sit</h4>
                    <p class='grey-text text-darken-1'>Mentor técnico</p>
                </div>
            </a>

            <a class='avatar valign-wrapper' href='profile.php'>
                <img class='circle left' src='img/user.jpg'>
                <div class='margin-left-1'>
                    <h4 class='black-text no-margin'>Amet Consectetur Adipisicing</h4>
                    <p class='grey-text text-darken-1'>Mentora social</p>
                </div>
            </a>

            <a class='avatar valign-wrapper' href='profile.php'>
                <img class='circle left' src='img/user.jpg'>
                <div class='margin-left-1'>
                    <h4 class='black-text no-margin'>Elit Libero Obcaecati</h4>
                    <p class='grey-text text-darken-1'>Mentor social</p>
                </div>
            </a>

            <a class='avatar valign-wrapper' href='profile.php'>
                <img class='circle left' src='img/user.jpg'>
                <div class='margin-left-1'>
                    <h4 class='black-text no-margin'>Fuga Ea Nemo Nisi</h4>
                    <p class='grey-text text-darken-1'>Mentora técnica</p>
                </div>
            </a>

            <a class='avatar valign-wrapper' href='profile.php'>
                <img class='circle left' src='img/user.jpg'>
                <div class='margin-left-1'>
                    <h4 class='black-text no-margin'>Id Minima Labore Modi</h4>
                    <p class='grey-text text-darken-1'>Mentor técnico</p>
                </div>
            </a>

        </div>
    </div>
</main>

<?php require_once 'includes/footer.php'; ?>