<main>
    <h1>La próxima película de Marvel</h1>
    <section>
        <img src="<?= $poster_url ?>" width="300" alt="Poster de <?= $title ?>">
    </section>
    <hgroup>
        <h2><?= $title ?> - <?= $until_message ?></h2>
        <p>Fecha de estreno: <?= $release_date ?></p>
        <p>
            La siguiente película será: <b><?= $following_production['title'] ?></b>
        </p>
    </hgroup>
</main>