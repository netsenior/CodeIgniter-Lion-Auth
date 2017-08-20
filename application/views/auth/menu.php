<?php
if ($this->ion_auth->logged_in()) {
    if ($this->ion_auth->is_admin()) {
        echo 'menu admin';
    } else {
        echo 'menu members: ';
    }
    ?>
    <a href="<?= site_url() ?>/Auth/edit_user/<?= $this->ion_auth->user()->row()->id ?>">meu perfil</a>
    | 
    <a href="<?= site_url() ?>/Auth/logout">sair</a><?php
} else {
    ?>
    <a href="<?= site_url() ?>/Auth/login">login</a>
    <?php
}
?>
