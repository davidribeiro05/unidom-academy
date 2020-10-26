<?php $v->layout('_theme'); ?>

<section class="presentation">
    <div class="banner">
        <img src="<?= theme("/assets/images/kids.jpg"); ?>"
             alt="Crianças na escola cercando um laptop contentes com o que estão vendo.">
    </div>
    <div class="presentation_text">
        <div class="presentation_text_title">
            <h1>UNIDOM ACADEMY</h1>
        </div>
        <div class="presentation_text_subtitle">
            <span class="presentation_separator"> <img src="<?= theme("/assets/icons/separator.svg"); ?>" alt="Separador de texto"></span>
            <p>
                Fundada em 2020 com o intuito de elevar o nível de ensino na região da Bahia.
                <br>A Unidom Academy já conta com cerca de <span class="highlight_text">7.500</span> alunos,
                <br> <span class="highlight_text">vem aprender com a gente!.</span>
            </p>
        </div>
        <div class="call_to_action">
            <a class="btn bg-blue box-shadow" href="<?= url("sistema/bem-vindo");?>">ACESSAR PLATAFORMA
                <span>
                    <img class="arrow" src="<?= theme("/assets/icons/arrow.svg"); ?>" alt="Icone de voltar">
                </span>
            </a>
        </div>
    </div>
</section>
