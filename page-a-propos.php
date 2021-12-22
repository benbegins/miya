<?php get_header(); ?>

    <div class="a-propos">
        
        <!-- Title -->
        <section class="section-pad">
            <div class="container">
                <h1 class="page-title-sm lg:w-2/3 lg:ml-auto">Même sur le terrain, nous respectons la planète.</h1>
            </div>
        </section>

        <!-- Image principale -->
        <section>
            <?php the_post_thumbnail(); ?>
        </section>

        <!-- Intro -->
        <section class="section-pad relative">
            <div class="container">
                <p class="text-xl lg:text-center lg:w-2/3 lg:mx-auto">Nous ne voulons pas seulement être reconnus pour nos coupes dédiées aux femmes. Au cœur de notre marque, nous souhaitons être à l’écoute de vos besoins, dans une logique d’évolution partagée afin de répondre pleinement à vos attentes. La marque MIYA propose à toutes les femmes de s’équiper à la hauteur de de leurs ambitions. Débutantes ou confirmées, vous trouverez des tenues de sports diversifiées alliant <strong>confort</strong>, <strong>technicité</strong> et <strong>esthétisme.</strong></p>
            </div>
            <div class="deco-circle left"></div>
        </section>

        <!-- Main content -->
        <section class="main-content">
            <div class="container">
                <!-- 1st bloc -->
                <div class="main-content__bloc">
                    <h2 class="title">Confort</h2>
                    <p class="mt-4">Quoi de mieux que d’être à l’aise dans ses équipements afin d’entamer un entrainement ou un match en toute sérénité. MIYA a souhaité rendre ses équipements confortables pour que chacune d’entre nous puisse s’épanouir sans être à l’étroit dans ses vêtements de sports. Nous nous sommes trop longtemps équipées rayon homme pour jouer au football, il est temps de changer les choses. MIYA est à l’écoute de vos besoins et pour cela nous avons créé une coupe adaptée à nos morphologies. </p>
                    <p class="accroche">Laissez de la place à vos hanches, vos fesses et votre poitrine pour un confort absolu&nbsp;!</p>
                </div>
                <!-- 2nd bloc -->
                <div class="main-content__bloc">
                    <h2 class="title">Technicité</h2>
                    <p class="mt-4">MIYA a choisi des tissus respirant et léger qui vous procureront une sensation de légèreté afin de pratiquer sans gêne. Nos textiles sont certifié Oeko-tex et ne contiennent donc pas de produits chimiques nocifs pour votre santé. Les équipements MIYA ont été conçues spécialement pour vous avec des coupes qui vous permettrons de progresser et enflammer les terrains.</p>
                    <p class="accroche">L’essayer c’est l’adopter, vous ne voudrez jamais plus vous équiper chez les hommes&nbsp;!</p>
                </div>
            </div>
        </section>

        <!-- Produits -->
        <section class="produits section-pad-bottom md:grid md:grid-cols-2">
            <div class="img-container">
                <img src="<?= get_template_directory_uri(); ?>/dist/img/a-propos-produits.jpg" alt="Produits Miya Sport">
            </div>
            <div class="text-container">
                <h2 class="text-lg font-title font-extrabold uppercase">Esthétisme</h2>
                <p class="mt-4">Nous travaillons en collaboration avec des graphistes qui ont créé pour MIYA des designs uniques. Nous souhaitons mettre le sport féminin à l’honneur en proposant des équipements qui apporteront à votre look un cachet explosif ! MIYA veut rendre la pratique du sport féminin légitime, nous avons notre place sur les terrains et nous devons être équipées comme il se doit.</p>
                <p class="mt-4">Nous vous accompagnerons dans vos projets d’équipements d’équipes et nous restons à votre écoute pour toutes suggestions.</p>
                <div class="mt-8">
                    <a href="<?= get_site_url(); ?>/boutique" class="btn-primary mr-8">Voir nos produits</a>
                    <a href="<?= get_site_url(); ?>/pour-les-clubs" class="btn-secondary">Offres pour les clubs</a>
                </div>
            </div>
        </section>

        <div class="y-motif"></div>

        <!-- Fondatrice -->
        <section class="fondatrice section-pad">
            <div class="container lg:grid lg:grid-cols-2">
                <div class="lg:w-5/6">
                    <h2 class="page-title-sm">Un mot de la fondatrice</h2>
                </div>
                <div class="mt-8 lg:mt-0">
                    <p class="text-sm font-title font-extrabold uppercase">Je m’appelle Marie, et pour moi, MIYA c’est un constat.</p>
                    <p class="mt-4">Adepte de sport depuis l’enfance, je joue et entraine à présent au football. C’est de par mon parcours sportif que j’ai constaté le manque d’équipements sportifs dédiés aux femmes.</p>
                    <p class="mt-4">Pour cette raison j’ai fait le choix de penser une marque pour nous.</p>
                    <p class="mt-4">La marque MIYA propose à toutes les femmes de s’équiper à la hauteur de leurs ambitions.</p>
                </div>
            </div>
        </section>
        <!-- 2eme partie -->
        <section class="section-pad-bottom section-imgtext">
            <div class="container">
                <p class="intro">MIYA c’est une référence à Alice MILLIAT. Une femme qui a oeuvré pour le développement du sport féminin au début du 20ème siècle, elle fait partie du patrimoine français.</p>
                <div class="img-container">
                    <img src="<?= get_template_directory_uri(  ); ?>/dist/img/a-propos-alice-millat.jpg" alt="">
                    <div class="bloc-red"></div>
                </div>
                <p class="main-text">Alice Millat</p>                
            </div>
            <div class="container">
                <p class="intro mt-8">Née en 1884 et décédée en 1957, Alice Milliat fut présidente de Féminasports. Elle a co-fondé la Fédération des Sociétés Féminines Sportives de France en 1917 et en devient présidente en 1919. Alice a mis en place et mené les premiers championnats de France féminins de hockey, football, athlétisme, basket… mais aussi la première équipe de France féminine de football, elle organise les premiers jeux olympiques féminins à Paris et est à l’initiative de bien d’autres évènements.</p>
            </div>
        </section>

    </div>

<?php get_footer(); ?>