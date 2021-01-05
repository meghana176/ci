<?php 
//application/views/contact/index.php
?>

    <?= form_open('contact'); ?>

        <div class="form-group">
            <label for="ID_email" class="text-left">E-mail</label>
            <input name="email" required type="email" class="form-control" id="ID_email" placeholder="Enter your email here" value="<?= set_value('email'); ?>">
        </div>

        <div class="form-group">
            <label for="ID_email" class="text-left">Title</label>
            <input name="title" required type="text" class="form-control" id="ID_email" placeholder="Message title" value="<?= set_value('title'); ?>">
        </div>

        <div class="form-group">
            <label class="mb-0">Message</label>
            <textarea name="message" required class="form-control" id="ID_message" rows="16" placeholder="Entrez votre message ici"><?= set_value('message'); ?></textarea>
        </div>

        <div class="text-right">
            <button class="btn btn-primary">Envoyer</button>
        </div>

    </form>
