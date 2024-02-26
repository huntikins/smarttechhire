<div class="flex flex-col justify-center h-full md:flex-row items-between md:justify-between md:items-center">
    <div
        class="flex flex-col items-start justify-center order-2 w-full h-full p-6 pb-8 md:order-1 md:w-1/2 bg-primary text-light md:p-8 lg:p-12 md:pb-10 lg:pb-14">
        <h2
            class="w-full pt-6 text-2xl lg:text-3xl xl:text-4xl font-josefin animate-fade-in animation-delay-100">
            <?php echo CFS()->get('sth_serve_heading'); ?></h2>
        <div
            class="my-4 text-base animation-delay-100 md:my-6 lg:my-8 md:max-w-4xl lg:max-w-5xl lg:text-xl animate-fade-in">
            <?php echo CFS()->get('sth_serve_description'); ?></div>
        <ul>
        <?php
            $fields = CFS()->get('sth_serve_clients');
            $fields = array_values($fields);
            ?>
            <li class="flex items-center justify-start">
                <svg class="w-5 mr-3" width="32" height="50" viewBox="0 0 32 50" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M19.125 37.1875C26.2569 35.7397 31.625 29.4344 31.625 21.875V0H0.375V21.875C0.375 29.4344 5.743 35.7397 12.875 37.1875V43.75H6.625V50H25.375V43.75H19.125V37.1875ZM6.625 6.25H25.375V21.875C25.375 27.0528 21.1778 31.25 16 31.25C10.8222 31.25 6.625 27.0528 6.625 21.875V6.25Z"
                        fill="white" />
                </svg>
                <span class="text-lg font-extrabold"><?php echo $fields[0]['sth_client_type']; ?></span>
            </li>
            <li class="flex items-center justify-start">
                <svg class="w-5 mr-3" width="44" height="50" viewBox="0 0 44 50" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M24 11.1111H44V50H0V0H24V11.1111ZM14 5.55556H20V11.1111H14V5.55556ZM20 44.4444V38.8889H14V44.4444H20ZM20 33.3333V27.7778H14V33.3333H20ZM20 22.2222V16.6667H14V22.2222H20ZM40 44.4444V16.6667H24V22.2222H28V27.7778H24V33.3333H28V38.8889H24V44.4444H40ZM4 44.4444V38.8889H10V44.4444H4ZM4 33.3333H10V27.7778H4V33.3333ZM10 22.2222V16.6667H4V22.2222H10ZM4 11.1111H10V5.55556H4V11.1111Z"
                        fill="white" />
                </svg>
                <span class="text-lg font-extrabold"><?php echo $fields[1]['sth_client_type']; ?></span>
            </li>
            <li class="flex items-center justify-start">
                <svg class="w-5 mr-3" width="50" height="50" viewBox="0 0 50 50" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M26.6145 4.01233C31.9642 -1.33744 40.6379 -1.33744 45.9876 4.01233C51.3375 9.36209 51.3375 18.0358 45.9876 23.3855L23.3855 45.9876C18.0358 51.3375 9.36209 51.3375 4.01233 45.9876C-1.33744 40.6379 -1.33744 31.9642 4.01233 26.6145L26.6145 4.01233ZM42.7587 20.1567L33.0722 29.8434L20.1567 16.9278L29.8434 7.24119C33.4099 3.6747 39.1922 3.6747 42.7587 7.24119C46.3253 10.8077 46.3253 16.5902 42.7587 20.1567Z"
                        fill="white" />
                </svg>
                <span class="text-lg font-extrabold"><?php echo $fields[2]['sth_client_type']; ?></span>
            </li>
            <li class="flex items-center justify-start">
                <svg class="w-5 mr-3" width="50" height="50" viewBox="0 0 50 50" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M25 50C38.8072 50 50 38.8072 50 25C50 11.1929 38.8072 0 25 0C11.1929 0 0 11.1929 0 25C0 38.8072 11.1929 50 25 50ZM32.7931 42.8197C39.23 40.0008 43.8464 33.7964 44.3906 26.4583C42.1047 27.705 39.2222 28.7272 35.9364 29.4389C35.5228 34.6322 34.3964 39.2697 32.7931 42.8197ZM17.2069 7.18019C11.7979 9.54906 7.67431 14.3085 6.17244 20.1222C6.81583 20.7328 7.91147 21.4836 9.57867 22.2244C10.8254 22.7786 12.2793 23.2772 13.9038 23.6936C14.0515 17.2384 15.2875 11.4302 17.2069 7.18019ZM19.7239 30.3078C20.1592 34.3542 21.07 37.8339 22.22 40.4214C23.0367 42.2592 23.8656 43.4022 24.505 44.0108C24.7325 44.2275 24.8969 44.3428 25 44.4022C25.1031 44.3428 25.2675 44.2275 25.495 44.0108C26.1344 43.4022 26.9633 42.2592 27.78 40.4214C28.93 37.8339 29.8408 34.3542 30.2761 30.3078C28.5753 30.47 26.81 30.5556 25 30.5556C23.19 30.5556 21.4247 30.47 19.7239 30.3078ZM14.0635 29.4389C14.4771 34.6322 15.6036 39.2697 17.2069 42.8197C10.77 40.0008 6.15347 33.7961 5.60942 26.4583C7.89531 27.705 10.7778 28.7272 14.0635 29.4389ZM30.5547 24.6933C28.8028 24.8914 26.9425 25 25 25C23.0578 25 21.1972 24.8914 19.4453 24.6933C19.4819 18.5113 20.6192 13.1807 22.22 9.57867C23.0367 7.74092 23.8656 6.59767 24.505 5.98903C24.7325 5.77256 24.8969 5.65719 25 5.59767C25.1031 5.65719 25.2675 5.77256 25.495 5.98903C26.1344 6.59767 26.9633 7.74092 27.78 9.57867C29.3808 13.1807 30.5181 18.5113 30.5547 24.6933ZM36.0961 23.6936C35.9486 17.2384 34.7125 11.4302 32.7931 7.18019C38.2022 9.54906 42.3258 14.3085 43.8275 20.1222C43.1842 20.7328 42.0886 21.4836 40.4214 22.2244C39.1747 22.7786 37.7208 23.2772 36.0961 23.6936Z"
                        fill="white" />
                </svg>
                <span class="text-lg font-extrabold"><?php echo $fields[3]['sth_client_type']; ?></span>
            </li>
            <li class="flex items-center justify-start">
                <svg class="w-5 mr-3" width="30" height="50" viewBox="0 0 30 50" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M12.5 42.5V50H17.5V42.5H20C25.5227 42.5 30 38.0228 30 32.5C30 26.9772 25.5227 22.5 20 22.5H17.5V12.5H22.5V17.5H27.5V7.5H17.5V0H12.5V7.5H10C4.47715 7.5 0 11.9771 0 17.5C0 23.0228 4.47715 27.5 10 27.5H12.5V37.5H7.5V32.5H2.5V42.5H12.5ZM17.5 37.5H20C22.7615 37.5 25 35.2615 25 32.5C25 29.7385 22.7615 27.5 20 27.5H17.5V37.5ZM12.5 22.5V12.5H10C7.23857 12.5 5 14.7386 5 17.5C5 20.2615 7.23857 22.5 10 22.5H12.5Z"
                        fill="white" />
                </svg>
                <span class="text-lg font-extrabold"><?php echo $fields[4]['sth_client_type']; ?></span>
            </li>
        </ul>
    </div>
    <div class="flex items-center justify-center order-1 w-full p-6 pb-0 md:w-1/2 md:order-2 md:p-8 lg:p-12 md:pb-0 lg:pb-0">
        <?
        $section_image = CFS()->get('sth_serve_image');

        if ($section_image) {
            $image = wp_get_attachment_image($section_image, "", "", array("class" => "block py-8"));
            echo $image;
        }
        ?>
    </div>
</div>