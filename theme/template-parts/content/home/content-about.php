<div class="flex flex-col justify-center py-12 md:py-0 md:flex-row items-between md:justify-between md:items-center">
    <div class="flex flex-col items-center justify-center w-full mb-8 md:mb-0 md:mx-8">
        <?
        $section_image = CFS()->get('sth_about_image');

        if ($section_image) {
            ?>
            <img class="block w-full" aria-hidden="true" src="<?php echo $section_image; ?>" alt="">
            <?php
        }
        ?>
    </div>
    <div class="flex flex-col items-end justify-center w-full text-right">
        <h2 class="w-full text-xl md:text-2xl lg:text-3xl xl:text-4xl font-josefin animate-fade-in animation-delay-100">
            <?php echo CFS()->get('sth_about_heading'); ?>
        </h2>
        <p class="my-4 text-base animation-delay-100 md:my-6 md:max-w-4xl lg:max-w-5xl lg:text-xl animate-fade-in">
            <?php echo CFS()->get('sth_about_description'); ?>
        </p>
        <div class="flex items-center justify-end w-full mt-4 transition-transform">
            <?php

            $link_cta = CFS()->get('sth_about_cta');

            if ($link_cta && $link_cta['text'] != '') {
                ?>
                <a href="<?php echo $link_cta['url']; ?>" aria-label="<?php echo CFS()->get('sth_cta_a11y_label'); ?>"
                    target="<?php echo $link_cta['target']; ?>"
                    class="block w-2/3 px-6 py-3 text-base font-extrabold text-center ease-in-out rounded shadow-lg animation-delay-100 animate-fade-in hover:opacity-80 md:text-xl md:w-auto md:mb-0 bold motion-reduce:transition-none motion-reduce:hover:transform-none bg-primary text-light font-josefin hover:scale-105 active:scale-95">
                    <?php echo $link_cta['text']; ?>
                </a>
                <?php
            } ?>
        </div>
    </div>
</div>