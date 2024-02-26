<div class="flex flex-col justify-center h-full md:flex-row items-between md:justify-between md:items-center">
    <div
        class="flex flex-col items-start justify-center order-2 w-full h-full p-6 pb-8 md:order-1 lg:w-2/3 lg:bg-primary text-light md:p-8 lg:p-12 md:pb-10 lg:pb-14">
        <h2 class="w-full pt-6 text-2xl lg:text-3xl xl:text-4xl font-josefin animate-fade-in animation-delay-100">
            <?php echo CFS()->get('sth_contact_heading'); ?>
        </h2>
        <?php $description = CFS()->get('sth_contact_description');
        if ($description) { ?>
            ?>
            <div
                class="my-4 text-base animation-delay-100 md:my-6 lg:my-8 md:max-w-4xl lg:max-w-5xl lg:text-xl animate-fade-in">
                <?php echo $description; ?>
            </div>
        <?php } ?>
        <div class="w-full text-gray-900">
            <?php echo apply_shortcodes('[contact-form-7 id="542eca3" title="Main"]') ?>
        </div>
    </div>
    <div
        class="items-center justify-center order-1 hidden w-full p-6 pb-0 lg:flex md:w-1/3 md:order-2 md:p-8 lg:p-12 md:pb-0 lg:pb-0">
        <?
        $section_image = CFS()->get('sth_contact_image');

        if ($section_image) {
            $image = wp_get_attachment_image($section_image, "", "", array("class" => "block py-8"));
            echo $image;
        }
        ?>
    </div>
</div>