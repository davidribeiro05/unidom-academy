<?php $v->layout('_theme'); ?>

<div class="card_menu">
    <div class="card">
        <div class="card_icon">
            <a href="<?= url("sistema/perfil"); ?>">
                <img src="<?= theme("/assets/icons/profile.svg"); ?>" alt="Ícone do perfil do desenvolvedor">
            </a>
        </div>
        <div class="card_text"><a href="">Perfil do Desenvolvedor</a></div>
    </div>
    <div class="card">
        <a href="<?= url("sistema/cadastro"); ?>">
            <img src="<?= theme("/assets/icons/register.svg"); ?>" alt="Icone de registro">
        </a>
        <div class="card_text"><a href="">Cadastro</a></div>
    </div>
    <div class="card">
        <div class="card_icon">
            <a href="<?= url("sistema/alunos"); ?>">
                <img src="<?= theme("/assets/icons/search.svg"); ?>" alt="Ícone de pesquisa">
            </a>
        </div>
        <div class="card_text"><a href="">Consultar <br>Matrículas</a></div>
    </div>
</div>
