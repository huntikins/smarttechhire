<div class="block w-full text-center">
    <h2 class="w-full text-xl md:text-2xl lg:text-3xl xl:text-4xl font-josefin animate-fade-in animation-delay-100">
        <?php echo CFS()->get('sth_team_heading'); ?>
    </h2>
    <div
        class="mx-auto my-4 text-base animation-delay-100 md:my-6 md:max-w-4xl lg:max-w-5xl lg:text-xl animate-fade-in">
        <?php echo CFS()->get('sth_team_description'); ?>
    </div>
</div>
<div class="block w-full text-xl md:text-2xl lg:text-3xl xl:text-4xl">
    <?php
    $fields = CFS()->get('sth_team_problems');
    $fields = array_values($fields);
    ?>
    <div class="delay-[100ms] duration-[600ms] taos:translate-x-[-100%] taos:invisible">
        <?php echo $fields[0]['sth_team_problem']; ?>
    </div>
    <div class="delay-[300ms] duration-[600ms] taos:translate-x-[-100%] taos:invisible">
        <?php echo $fields[1]['sth_team_problem']; ?>
    </div>
    <div class="delay-[600ms] duration-[600ms] taos:translate-x-[-100%] taos:invisible">
        <?php echo $fields[2]['sth_team_problem']; ?>
    </div>
</div>
<div class="block w-full text-center">
    <div
        class="mx-auto my-4 text-base animation-delay-100 md:my-6 md:max-w-4xl lg:max-w-5xl lg:text-xl animate-fade-in">
        <?php echo CFS()->get('sth_team_text_content'); ?>
    </div>
</div>