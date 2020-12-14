<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" >
        <meta name="description" content="Curriculum vitae de Matthias Etchegaray">
        <meta charset="utf-8">
        <title>Curriculum vitae de Matthias Etchegaray</title>

        <link rel="stylesheet" type="text/css" href="site/styles/style.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>

    <body>
        <header></header>

        <div class="cv-container">
            <div class="avatar">
                <img src="site/img/avatar.jpg" alt="Avatar" />
            </div>

            <main>
                <!-- Titre principal-->
                <div class="title-container">
                    <h1 class="center">Matthias Etchegaray</h1>
                    <span class="center">Développeur front-end</span>
                    <span class="center" style="margin-top: 10px">06 59 52 53 64</span>
                    <span class="center" style="margin-top: 10px"><a href="mailto:etchegaray.matthias@gmail.com?subject=Contact depuis votre CV&body=Bonjour" title="etchegaray.matthias@gmail.com">etchegaray.matthias@gmail.com</a></span>
                    <span class="center" style="margin-top: 10px">Clients principaux : SIPA Ouest-France, Solocal</span>
                </div>


                <!-- Compétences -->
                <section>
                    <h3 class="section-title">
                        <span class="material-icons">settings</span>
                        <span>Compétences</span>
                    </h3>
                    <div class="inner-container">
                        <?php include('src/template-parts/_skills.php'); ?>
                    </div>
                </section>

                <!-- Diplômes -->
                <section>
                    <h3 class="section-title">
                        <span class="material-icons">turned_in</span>
                        <span>Diplômes</span>
                    </h3>
                    <div class="inner-container">
                        <?php include('src/template-parts/_studies.php'); ?>
                    </div>
                </section>

                <!-- Anglais -->
                <section>
                    <div class="inner-container">
                        <?php include('src/template-parts/_languages.php'); ?>
                     </div>
                </section>

                <!-- Expériences -->
                <section>
                    <h3 class="section-title">
                        <span class="material-icons">work</span>
                        <span>Expériences</span>
                    </h3>
                    <div class="inner-container">
                        <?php include('src/template-parts/_exp.php'); ?>
                    </div>
                </section>

                <!-- Hobbies -->
                <section>
                    <h3 class="section-title">
                        <span class="material-icons">star</span>
                        <span>Hobbies</span>
                    </h3>
                    <div class="inner-container">
                        <?php include('src/template-parts/_hobbies.php'); ?>
                    </div>
                </section>
            </main>

            <footer>
            </footer>
        </div>
    </body>
</html>