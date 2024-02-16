<div class="flex flex-col justify-center py-12 md:py-0 md:flex-row items-between md:justify-between md:items-center">
    <div class="flex flex-col items-start justify-center w-full">
        <h2 class="w-full text-xl md:text-2xl lg:text-3xl xl:text-4xl font-josefin animate-fade-in animation-delay-100">
            <?php echo CFS()->get('sth_care_heading'); ?>
        </h2>
        <div class="my-4 text-base animation-delay-100 md:my-6 md:max-w-4xl lg:max-w-5xl lg:text-xl animate-fade-in">
            <?php echo CFS()->get('sth_care_description'); ?>
        </div>
        <div class="flex flex-col justify-start w-full mt-4 transition-transform md:items-center md:flex-row">
            <?php

            $link_cta_1 = CFS()->get('sth_care_cta_1');

            if ($link_cta_1 && $link_cta_1['text'] != '') {
                ?>
                <a href="<?php echo $link_cta_1['url']; ?>"
                    aria-label="<?php echo CFS()->get('sth_care_cta_1_a11y_label'); ?>"
                    target="<?php echo $link_cta_1['target']; ?>"
                    class="block w-2/3 px-6 py-3 mb-6 text-base font-extrabold text-center ease-in-out rounded shadow-lg animation-delay-100 animate-fade-in hover:opacity-80 md:w-auto md:mb-0 md:mr-8 bold motion-reduce:transition-none motion-reduce:hover:transform-none bg-primary text-light font-josefin hover:scale-105 active:scale-95">
                    <?php echo $link_cta_1['text']; ?>
                </a>
                <?php
            }
            $link_cta_2 = CFS()->get('sth_care_cta_2');

            if ($link_cta_2 && $link_cta_2['text'] != '') {
                ?>

                <a href="<?php echo $link_cta_2['url']; ?>"
                    aria-label="<?php echo CFS()->get('sth_care_cta_2_a11y_label'); ?>"
                    target="<?php echo $link_cta_2['target']; ?>"
                    class="block w-2/3 px-6 py-3 text-base font-extrabold text-center ease-in-out rounded shadow-lg animation-delay-100 animate-fade-in hover:opacity-80 md:w-auto motion-reduce:transition-none motion-reduce:hover:transform-none bold bg-secondary text-light font-josefin hover:scale-105 active:scale-95">
                    <?php echo $link_cta_2['text']; ?>
                </a>
            <?php } ?>
        </div>
    </div>
    <div class="flex flex-col items-center justify-center w-full p-8 mb-8 md:mb-0 md:mx-8">
        <img class="block w-full" src="/wp-content/themes/smarttechhire/theme/assets/care.svg" alt="">
    </div>
</div>