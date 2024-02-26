<div class="flex flex-col items-start justify-center h-full mx-auto lg:mt-48 max-w-8xl text-light">
    <h1 class="w-full text-3xl md:text-4xl lg:text-5xl xl:text-6xl font-josefin animate-fade-in animation-delay-100">
        <?php echo CFS()->get('sth_heading'); ?>
    </h1>
    <div
        class="my-2 animation-delay-100 md:my-4 lg:my-6 md:max-w-4xl lg:max-w-5xl md:text-xl xl:text-2xl animate-fade-in">
        <?php echo CFS()->get('sth_description'); ?>
    </div>
    <div class="flex flex-col justify-start w-full mt-4 transition-transform md:items-center md:flex-row">
        <?php

        $link_cta_1 = CFS()->get('sth_cta_1_link');

        if ($link_cta_1 && $link_cta_1['text'] != '') {
            ?>
            <a href="<?php echo $link_cta_1['url']; ?>" aria-label="<?php echo CFS()->get('sth_cta_1_a11y_label'); ?>"
                target="<?php echo $link_cta_1['target']; ?>"
                class="block w-2/3 px-6 py-3 mb-6 text-base font-extrabold text-center ease-in-out rounded shadow-lg animation-delay-100 animate-fade-in hover:opacity-80 md:text-xl md:w-auto md:mb-0 md:mr-8 bold motion-reduce:transition-none motion-reduce:hover:transform-none bg-primary text-light font-josefin hover:scale-105 active:scale-95">
                <?php echo $link_cta_1['text']; ?>
            </a>
            <?php
        }
        $link_cta_2 = CFS()->get('sth_cta_2_link');

        if ($link_cta_2 && $link_cta_2['text'] != '') {
            ?>

            <a href="<?php echo $link_cta_2['url']; ?>" aria-label="<?php echo CFS()->get('sth_cta_2_a11y_label'); ?>"
                target="<?php echo $link_cta_2['target']; ?>"
                class="block w-2/3 px-6 py-3 text-base font-extrabold text-center text-black ease-in-out rounded shadow-lg animation-delay-100 animate-fade-in hover:opacity-80 md:text-xl md:w-auto motion-reduce:transition-none motion-reduce:hover:transform-none bold bg-secondary font-josefin hover:scale-105 active:scale-95">
                <?php echo $link_cta_2['text']; ?>
            </a>
        <?php } ?>
    </div>
</div>