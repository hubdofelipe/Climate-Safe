<?php include 'header.php' ?>

<div class="page-wrapper content-wrapper">
    <section class="swiper-container banner">
        <div class="swiper-wrapper">
            <div class="swiper-slide" style="background-image: url(assets/images/banner-1.jpg);">
                <div class="banner__slide">
                   <h2>titulo do slide um</h2>
                    <p>texto do slide um</p>
               </div>
            </div>

            <div class="swiper-slide" style="background-image: url(assets/images/banner-2.jpg);">
                <div class="banner__slide">
                    <h2>titulo do slide dois</h2>
                    <p>texto do slide dois</p>
                </div>
            </div>
            
            <div class="swiper-slide" style="background-image: url(assets/images/banner-3.jpg);">
                <div class="banner__slide">
                    <h2>titulo do slide três</h2>
                    <p>texto do slide três</p>
                </div>
            </div>
        </div>
    </section>
    
    <section class="numbers">
        <div class="container">
            <div class="numbers__item">
                <h2><b>+30</b> anos</h2>
                <p>Já desenvolvemos mais de 800 projetos, embasados em experiência e tecnologia, fornecendo soluções inovadoras para um mundo em constante transformação.</p>
            </div>

            <div class="numbers__item">
                <h2><b>+30</b> anos</h2>
                <p>Já desenvolvemos mais de 800 projetos, embasados em experiência e tecnologia, fornecendo soluções inovadoras para um mundo em constante transformação.</p>
            </div>

            <div class="numbers__item">
                <h2><b>+30</b> anos</h2>
                <p>Já desenvolvemos mais de 800 projetos, embasados em experiência e tecnologia, fornecendo soluções inovadoras para um mundo em constante transformação.</p>
            </div>

            <div class="numbers__item">
                <h2><b>+30</b> anos</h2>
                <p>Já desenvolvemos mais de 800 projetos, embasados em experiência e tecnologia, fornecendo soluções inovadoras para um mundo em constante transformação.</p>
            </div>
        </div>
    </section>
    
    <section class="solution">
        <hr>
        <div class="container">
            <h2>Nossas Soluções</h2>
            <p>A WayCarbon possui serviços e produtos integrados que promovem a gestão da sustentabilidade em iniciativas públicas e privadas. Conheça!</p>
        </div>
    </section>

    <section  class="sign-up" >
        <div class="container">
            <h2>Quer ficar por dentro de nóticias e conteúdos da nossa newsletter?</h2>
            <form action="">
                <input class="sign-up__email" type="email" placeholder="INSIRA SEU E-MAIL">
                <input class="sing-up__submit" type="submit" value="INSCREVA-SE">
            </form>
        </div>
    </section>

    <section class="customers">
        <div class="container">
            <div class="customers__title">
                <h2>ALGUNS DE NOSSOS CLIENTES</h2>
                <div class="customers__buttons">
                    <div class="customers__button customers__button__prev"><</div>
                    <div class="customers__button customers__button__next">></div>
                </div>
            </div>
            <div class="swiper-container customers__slider"> 
                <div class="swiper-wrapper">
                <?php for($i=0; $i<20; $i++): ?>
                    <div class="swiper-slide"><img src="assets/images/clientes.png" alt=""> </div>
                <?php endfor; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="blog">
        <div class="container">
            <div class="blog__title">
                <h2>BLOG</h2>
                <div class="blog__buttons">
                    <div class="blog__button blog__button__prev"><</div>
                    <div class="blog__button blog__button__next">></div>
                </div>
            </div>
            <div class="swiper-container blog__slider"> 
                <div class="swiper-wrapper">
                <?php for($i=0; $i<20; $i++): ?>
                    <div class="swiper-slide">
                        <div class="blog__slide">
                            <img src="assets/images/post1.jpg" alt=""> 
                            <h3>Dia Mundial do Meio Ambiente 2021: a necessidade e a urgência da restauração dos ecossistemas</h3>
                        </div>
                    </div>
                <?php endfor; ?>
                </div>
            </div>
        </div>
    </section>
</div>

<?php include 'footer.php' ?>
