<?php $v->layout('_theme'); ?>

<section>
    <div class="profile_img">
        <span><img src="<?= theme("/assets/images/dev-img.png") ?>" alt="Foto do desenvolvedor"></span>
    </div>
    <div class="profile_texts">
        <h1>DAVID R. SILVA</h1>
        <h2>FULL STACK <br> WEB DEVOLOPER JR.</h2>
    </div>
    <div class="profile_cta">
        <h4 class="border_bottom" id="aboutMe">SOBRE MIM</h4>
        <h4 class="border_bottom" id="aboutMe_social_cta">REDES SOCIAIS</h4>
        <h4 class="border_bottom" id="aboutMe_contact_cta">CONTATO</h4>
    </div>
    <div class="profile_cta_text hide" id="aboutMe_text">
        <p>
            Lorem Ipsum,Ipsum Ipsum Ipsum Ipsum Ipsum Ipsum Ipsum Ipsum Ipsum Ipsum Ipsum Ipsum Lorem Ipsum Ipsum
            lorem Ipsum Ipsum Lorem
        </p>
    </div>
    <div class="profile_cta_text hide" id="aboutMe_social">
        <div class="profile_cta_social_icons">
             <span>
            <a href="https://www.linkedin.com/in/davidribeiro05/" target="_blank">
                <img src="<?= theme("/assets/icons/linkedin.svg") ?>" alt="Ícone do linkedin">
            </a>
        </span>
            <span>
           <a href=https://www.instagram.com/davidribeiro_01/"" target="_blank">
               <img src="<?= theme("/assets/icons/instagram.svg") ?>" alt="Icone do instagram">
           </a>
        </span>
        </div>
    </div>
    <div class="profile_cta_text hide" id="aboutMe_contact">
        <div class="profile_cta_contact_icons">
             <span>
            <a href="https://api.whatsapp.com/send?phone=5575983742241&text=Ol%C3%A1!" target="_blank">
                <img class="whatsapp-icon" src="<?= theme("/assets/icons/whatsapp.svg") ?>" alt="Icone do Whatsapp">
            </a>
        </span>
            <span>
           <a href="mailto:david.ribeiro05@gmail.com">
               <img src="<?= theme("/assets/icons/contact-mail.svg") ?>" alt="Icon do e-mail">
           </a>
        </span>
        </div>
    </div>
</section>
