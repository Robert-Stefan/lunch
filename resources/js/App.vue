<template>
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />
            <meta
                name="viewport"
                content="width=device-width, initial-scale=1.0"
            />
            <title>WP Theme</title>
            <link rel="stylesheet" href="main.css" />
            <link rel="preconnect" href="https://fonts.gstatic.com" />
            <link
                href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;600&display=swap"
                rel="stylesheet"
            />
        </head>
        <body>
            <!-- PAGE CONTAINER -->
            <div class="container">
                <!-- HEADER -->
                <header>
                    <a class="brand" href="/">
                        <img
                            src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1c/Kingdom_Hearts_logo.svg/1200px-Kingdom_Hearts_logo.svg.png"
                            att=""
                        />
                    </a>

                    <nav>
                        <ul class="main-menu">
                            <li>
                                <a href="/admin"> Admin Panel</a>
                            </li>
                            <li>
                                <a href="#"> Info </a>
                            </li>
                            <li>
                                <a href="#"> About</a>
                            </li>
                            <li>
                                <a href="#"> Blogs</a>
                            </li>
                            <li>
                                <a href="#"> Meeting</a>
                            </li>
                            <li>
                                <a href="#"> Contact</a>
                            </li>
                        </ul>
                    </nav>
                </header>
                <!-- MAIN -->
                <main>
                    <!-- HERO IMG -->
                    <section class="hero">
                        <img
                            src="https://images.ctfassets.net/2x1b56neok6m/it-media-7130-asset/716c3c587f05664fb9a8402bd7430264/shutterstock_1107143198-1.jpg?w=536&q=50"
                            alt=""
                        />
                    </section>

                    <!-- LEADERSHIP-->
                    <section class="leadership">
                        <div class="heading">
                            <h2>Tutorial</h2>
                            <p>
                                -You need access on <strong>Admin Panel</strong>
                            </p>
                            <p>-Register or Login for see all</p>
                        </div>
                    </section>
                </main>

                <!-- FOOTER -->
                <footer></footer>
            </div>
        </body>
    </html>
</template>

<script>
import Header from "./components/Header.vue";

export default {
    name: "App",
    components: {
        Header
    }
};
</script>

<style lang="scss">
/* GENERAL */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.clearfix::after {
    content: "";
    display: table;
    clear: both;
}

body {
    font-family: "Montserrat", sans-serif;
    font-weight: 300;
    color: #858585;
}

h1,
h2,
h3,
h4,
h5,
h6 {
    font-weight: 600;
    color: #000;
}
/*UTILITIES*/
.container {
    width: 1170px;
    margin: 0 auto;
}

/*HEADER*/
header {
    /*height: 120px;*/ /* emula content*/
    margin-bottom: 40px;
    /*background: pink;*/
}
header .brand img {
    width: 100px; /*165*/
}

.main-menu {
    margin-top: 40px;
}

.main-menu li {
    display: inline-block;
    list-style: none;
    margin-right: 15px;
}

.main-menu li:last-child {
    margin: 0;
}

.main-menu li a {
    text-decoration: none;
    text-transform: uppercase;
    color: #858585;
}

.main-menu li a:hover {
    color: black;
}
/* HERO IMG*/
.hero {
    height: 500px;
    margin-bottom: 40px;
}

.hero img {
    height: 450px;
}

/*LEADERSHIP*/
.leadership {
    margin-bottom: 20px;
    /*background: dodgerblue;*/
}

.leadership .heading {
    /*height: 60px;
    background: lightblue; */
    margin-bottom: 40px;
}

.leadership h2 {
    font-size: 40px;
}
</style>
