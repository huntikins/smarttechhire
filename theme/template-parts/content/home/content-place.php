<div class="flex flex-col justify-center h-full md:flex-row items-between md:justify-between md:items-center">
    <div class="flex items-center justify-center w-full p-6 pb-0 md:w-1/2 md:p-8 lg:p-12 md:py-0 lg:py-0">
        <?
        $section_image = CFS()->get('sth_place_image');

        if ($section_image) {
            $image = wp_get_attachment_image($section_image, "", "", array("class" => "h-96"));
            echo $image;
        }
        ?>
    </div>
    <div
        class="flex flex-col items-end justify-center w-full p-6 text-right h-[30rem] md:w-1/2 md:p-8 lg:p-12 md:pb-10 lg:pb-14 bg-secondary">
        <h2
            class="w-full pt-6 mb-4 text-2xl lg:text-3xl xl:text-4xl md:mb-6 lg:mb-8 font-josefin animate-fade-in animation-delay-100">
            <?php echo CFS()->get('sth_place_heading'); ?>
        </h2>
        <?php $description = CFS()->get('sth_place_description');
        if ($description) { ?>
            ?>
            <div
                class="my-4 text-base animation-delay-100 md:my-6 lg:my-8 md:max-w-4xl lg:max-w-5xl lg:text-xl animate-fade-in">
                <?php echo $description; ?>
            </div>
        <?php } ?>
        <ul>
            <?php
            $fields = CFS()->get('sth_place_candidates');
            $fields = array_values($fields);
            ?>
            <li class="flex items-center justify-end pb-4">
                <span class="text-lg font-extrabold">
                    <?php echo $fields[0]['sth_canidate']; ?>
                </span>
                <svg class="w-5 ml-3" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M13.325 3.05011L8.66741 20.4323L10.5993 20.9499L15.2568 3.56775L13.325 3.05011Z"
                        fill="currentColor" />
                    <path
                        d="M7.61197 18.3608L8.97136 16.9124L8.97086 16.8933L3.87657 12.1121L8.66699 7.00798L7.20868 5.63928L1.04956 12.2017L7.61197 18.3608Z"
                        fill="currentColor" />
                    <path
                        d="M16.388 18.3608L15.0286 16.9124L15.0291 16.8933L20.1234 12.1121L15.333 7.00798L16.7913 5.63928L22.9504 12.2017L16.388 18.3608Z"
                        fill="currentColor" />
                </svg>
            </li>
            <li class="flex items-center justify-end pb-4">
                <span class="text-lg font-extrabold">
                    <?php echo $fields[1]['sth_canidate']; ?>
                </span>
                <svg class="w-5 ml-3" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M14.738 19.9964C14.8186 19.9988 14.8994 20 14.9806 20C19.3989 20 22.9806 16.4183 22.9806 12C22.9806 7.58172 19.3989 4 14.9806 4C12.4542 4 10.2013 5.17108 8.73522 7H7.51941C3.92956 7 1.01941 9.91015 1.01941 13.5C1.01941 17.0899 3.92956 20 7.51941 20H14.5194C14.5926 20 14.6654 19.9988 14.738 19.9964ZM16.6913 17.721C19.0415 16.9522 20.9806 14.6815 20.9806 12C20.9806 8.68629 18.2943 6 14.9806 6C11.6669 6 8.98059 8.68629 8.98059 12H6.98059C6.98059 10.9391 7.1871 9.92643 7.56211 9H7.51941C5.03413 9 3.01941 11.0147 3.01941 13.5C3.01941 15.9853 5.03413 18 7.51941 18H14.5194C15.0691 18 15.9041 17.9014 16.6913 17.721Z"
                        fill="currentColor" />
                </svg>
            </li>
            <li class="flex items-center justify-end pb-4">
                <span class="text-lg font-extrabold">
                    <?php echo $fields[2]['sth_canidate']; ?>
                </span>
                <svg class="w-5 ml-3" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M5 9V7H7V9H5Z" fill="currentColor" />
                    <path d="M9 9H19V7H9V9Z" fill="currentColor" />
                    <path d="M5 15V17H7V15H5Z" fill="currentColor" />
                    <path d="M19 17H9V15H19V17Z" fill="currentColor" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M1 6C1 4.34315 2.34315 3 4 3H20C21.6569 3 23 4.34315 23 6V18C23 19.6569 21.6569 21 20 21H4C2.34315 21 1 19.6569 1 18V6ZM4 5H20C20.5523 5 21 5.44772 21 6V11H3V6C3 5.44772 3.44772 5 4 5ZM3 13V18C3 18.5523 3.44772 19 4 19H20C20.5523 19 21 18.5523 21 18V13H3Z"
                        fill="currentColor" />
                </svg>
            </li>
            <li class="flex items-center justify-end pb-4">
                <span class="text-lg font-extrabold">
                    <?php echo $fields[3]['sth_canidate']; ?>
                </span>
                <svg class="w-5 ml-3" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M13.0352 7.98797L13.0374 13.988L17.0374 13.9865L17.0352 7.98653L13.0352 7.98797Z"
                        fill="currentColor" fill-opacity="0.5" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M17.9996 4.01189L5.99963 4.01837L6.00038 6.01837L18.0004 6.01189L17.9996 4.01189Z"
                        fill="currentColor" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M11.0374 19.9864L11.0321 7.98637L7.03207 7.98813L7.03736 19.9881L11.0374 19.9864Z"
                        fill="currentColor" />
                </svg>
            </li>
            <li class="flex items-center justify-end pb-4">
                <span class="text-lg font-extrabold">
                    <?php echo $fields[4]['sth_canidate']; ?>
                </span>
                <svg class="w-5 ml-3" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M17 7C17 5.34315 15.6569 4 14 4H10C8.34315 4 7 5.34315 7 7H6C4.34315 7 3 8.34315 3 10V18C3 19.6569 4.34315 21 6 21H18C19.6569 21 21 19.6569 21 18V10C21 8.34315 19.6569 7 18 7H17ZM14 6H10C9.44772 6 9 6.44772 9 7H15C15 6.44772 14.5523 6 14 6ZM6 9H18C18.5523 9 19 9.44772 19 10V18C19 18.5523 18.5523 19 18 19H6C5.44772 19 5 18.5523 5 18V10C5 9.44772 5.44772 9 6 9Z"
                        fill="currentColor" />
                </svg>
            </li>
        </ul>
    </div>
</div>