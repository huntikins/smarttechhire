<div class="flex flex-col justify-center py-12 md:py-0 md:flex-row items-between md:justify-between md:items-center">
    <div class="flex flex-col items-center justify-start w-full md:w-1/4">
        <?php $founder = wp_get_attachment_image(CFS()->get('sth_founder_detail_headshot'), "", "", array("class" => "block object-cover w-64 h-64 overflow-hidden rounded-full")); ?>
        <?php echo $founder; ?>
        <h3
            class="pt-8 text-xl md:text-3xl lg:text-3xl xl:text-4xl font-josefin animate-fade-in animation-delay-100 text-primary">
            <?php echo CFS()->get('sth_founder_detail_title'); ?>
            </h2>
            <span class="text-sm italic text-extrabold lg:text-base">
                <?php echo CFS()->get('sth_founder_detail_sub_title'); ?>
            </span>
    </div>
    <div class="flex flex-col items-center justify-start w-full p-8 mb-8 md:w-3/4 md:mb-0 md:mx-8">
        <h2 class="w-full text-xl md:text-2xl lg:text-3xl xl:text-4xl font-josefin animate-fade-in animation-delay-100">
            <?php echo CFS()->get('sth_founder_heading'); ?>
        </h2>
        <?php echo CFS()->get('sth_founder_description'); ?>
    </div>
</div>