<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
</head>

<body>

    <!-- HEADER: MENU + HEROE SECTION -->
    <header>
        Header
    </header>

    <!-- CONTENT -->

    <section>

        <ul>
            <li>
                <a href="http://localhost"> localhost </a>
            </li>
            <li>
                <a href="http://localhost:8080"> localhost:8080 </a>
            </li>
            <li>
                <a href="http://localhost:8080/tutorial/pages"> localhost:8080/tutorial/pages </a>
            </li>
            <li>
                <a href="http://localhost:8080/tutorial/pages/home"> localhost:8080/tutorial/pages/home </a>
            </li>
            <li>
                <a href="http://localhost:8080/tutorial/pages/about"> localhost:8080/tutorial/pages/about </a>
            </li>
        </ul>

        
    </section>


    <!-- FOOTER: DEBUG INFO + COPYRIGHTS -->

    <footer>


        <p>Page rendered in {elapsed_time} seconds</p>

        <p>Environment: <?= ENVIRONMENT ?></p>



        <p>&copy; <?= date('Y') ?> CodeIgniter Foundation. CodeIgniter is open source project released under the MIT
            open source licence.</p>


    </footer>

</body>

</html>