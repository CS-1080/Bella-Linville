<nav>
    <a class="<?php
    if ($pathParts['index.php'] == "index") {
        print 'activePage';
    }
    ?>" href= "index.php">Home</a>

    <a class="<?php
    if ($pathParts['detail.php'] == "detail") {
        print 'activePage';
    }
    ?>" href="detail.php">2020</a>

<a class="<?php
    if ($pathParts['about.php'] == "about") {
        print 'activePage';
    }
    ?>" href="about.php">2021</a>

    <a class="<?php
    if ($pathParts['form.php'] == "form") {
        print 'activePage';
    }
    ?>" href="form.php">Contact Form</a>
</nav>