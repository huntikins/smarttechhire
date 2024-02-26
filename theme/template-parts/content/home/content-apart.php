<div class="block w-full py-12 text-center md:py-0">
    <h2 class="w-full text-xl md:text-2xl lg:text-3xl xl:text-4xl font-josefin animate-fade-in animation-delay-100">
        <?php echo CFS()->get('sth_apart_heading'); ?>
    </h2>
    <div
        class="mx-auto my-4 text-base animation-delay-100 md:my-6 md:max-w-4xl lg:max-w-5xl lg:text-xl animate-fade-in">
        <?php echo CFS()->get('sth_apart_description'); ?>
    </div>
    <div class="flex flex-col pt-8 apart text-light lg:grid">
        <?php
        $fields = CFS()->get('sth_apart_company_values');
        $fields = array_values($fields);
        ?>
        <div class="flex flex-col items-center justify-center p-8 apart-top-l bg-primary">
            <h3
                class="w-full text-lg md:text-xl lg:text-2xl xl:text-3xl font-josefin animate-fade-in animation-delay-100">
                <?php echo $fields[0]['sth_company_values_title']; ?>
            </h3>
            <div class="pt-2 mx-auto text-sm animation-delay-100 lg:text-lg animate-fade-in">
                <?php echo $fields[0]['sth_company_values_description']; ?>
            </div>
        </div>
        <div class="flex flex-col items-center justify-center p-8 apart-top-r bg-primary">
            <h3
                class="w-full text-lg md:text-xl lg:text-2xl xl:text-3xl font-josefin animate-fade-in animation-delay-100">
                <?php echo $fields[1]['sth_company_values_title']; ?>
            </h3>
            <div class="pt-2 mx-auto text-sm animation-delay-100 lg:text-lg animate-fade-in">
                <?php echo $fields[1]['sth_company_values_description']; ?>
            </div>
        </div>
        <div class="flex flex-col text-black apart-bottom lg:grid">
            <div class="flex flex-col items-center justify-center p-8 bg-secondary">
                <h3
                    class="w-full text-lg md:text-xl lg:text-2xl xl:text-3xl font-josefin animate-fade-in animation-delay-100">
                    <?php echo $fields[2]['sth_company_values_title']; ?>
                </h3>
                <div class="pt-2 mx-auto text-sm animation-delay-100 lg:text-lg animate-fade-in">
                    <?php echo $fields[2]['sth_company_values_description']; ?>
                </div>
            </div>
            <div class="flex flex-col items-center justify-center p-8 bg-secondary">
                <h3
                    class="w-full text-lg md:text-xl lg:text-2xl xl:text-3xl font-josefin animate-fade-in animation-delay-100">
                    <?php echo $fields[3]['sth_company_values_title']; ?>
                </h3>
                <div class="pt-2 mx-auto text-sm animation-delay-100 lg:text-lg animate-fade-in">
                    <?php echo $fields[3]['sth_company_values_description']; ?>
                </div>
            </div>
            <div class="flex flex-col items-center justify-center p-8 bg-secondary">
                <h3
                    class="w-full text-lg md:text-xl lg:text-2xl xl:text-3xl font-josefin animate-fade-in animation-delay-100">
                    <?php echo $fields[4]['sth_company_values_title']; ?>
                </h3>
                <div class="pt-2 mx-auto text-sm animation-delay-100 lg:text-lg animate-fade-in">
                    <?php echo $fields[4]['sth_company_values_description']; ?>
                </div>
            </div>
        </div>
    </div>
</div>