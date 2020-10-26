<?php $v->layout("_theme"); ?>
<table>
    <tr>
        <th>Nome</th>
        <th>Nascimento</th>
        <th>CPF</th>
        <th>Gênero</th>
        <th>Classes</th>
    </tr>
    <?php
    if (!empty($roomForUser)):
        foreach ($roomForUser as $value) : ?>
            <tr>
                <td><?= $value->user_name . " " . $value->last_name ?></td>
                <td><?= $value->birth ?></td>
                <td><?= $value->cpf ?></td>
                <td><?= $value->genre ?></td>
                <td><?= $value->room ?></td>
            </tr>
        <?php
        endforeach;
    endif; ?>
</table>


