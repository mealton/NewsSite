<?php if (!$is_hidden): ?>
    <figure class="mb-4" itemscope itemtype="http://schema.org/ImageObject">
        <?php if ($description): ?>
            <blockquote class="blockquote">
                <p><em itemprop="description"><?= $description ?></em></p>
            </blockquote>
        <?php endif ?>
        <div style="display: inline-block;">
            <img itemprop="contentUrl" class="img-fluid rounded publication-image-item"
                 onclick="publication.showModal(this)" src="<?= $content ?>" alt="<?= htmlspecialchars($description) ?>">
            <?php if ($source): ?>
                <figcaption>
                    <p align="right">
                        <small>
                            Источник:
                            <cite title="Source Title">
                                <a href="<?= $source ?>" target="_blank"><?= get_from_url($source) ?></a>
                            </cite>
                        </small>
                    </p>
                </figcaption>
            <?php endif ?>
        </div>
    </figure>
<?php endif ?>