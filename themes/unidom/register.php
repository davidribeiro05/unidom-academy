<?php $v->layout("_theme"); ?>


<form id="register_form" action="<?= url("sistema/cadastro"); ?>" method="post" enctype="multipart/form-data">
    <div class="form">
        <div class="input">
            <label class="hide" for="name">Nome</label>
            <input placeholder="Digite seu nome" type="text" name="name" id="name" required>
        </div>
        <div class="input">
            <label class="hide" for="last_name">Sobrenome</label>
            <input placeholder="Digite seu sobrenome" type="text" name="last_name" id="last_name" required>
        </div>
    </div>
    <div class="form">
        <div class="input">
            <!-- <label for="birth">Data de Nascimento</label> -->
            <input placeholder="Data de nascimento" type="date" name="birth" id="birth" required>
        </div>
        <div class="input">
            <label class="hide" for="cpf">CPF</label>
            <input oninput="cpfMask(this)" placeholder="Digite seu CPF" type="text" name="cpf" id="cpf" required>
        </div>
    </div>
    <div class="form">
        <div class="input">
            <label class="hide" for="room">Escolha a sala</label>
            <select name="room" id="room" required>
                <option value="Escolha sua sala">Escolha sua sala</option>
                <?php if (!empty($rooms)):
                    foreach ($rooms as $room):
                        echo "<option value='{$room->id}'>{$room->name}</option>";
                        ?>
                    <?php
                    endforeach;
                endif;
                ?>
            </select>
        </div>
        <div class="input">
            <label class="hide" for="genre">Gênero</label>
            <select name="genre" id="genre" required>
                <option value="Gênero">Escolha seu gênero</option>
                <option value="M">M</option>
                <option value="F">F</option>
            </select>
        </div>
    </div>
    <div class="form">
        <div>
            <button class="btn-save bg-green" type="submit">CADASTRAR</button>
        </div>
    </div>
</form>