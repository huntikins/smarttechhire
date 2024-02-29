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
                <svg aria-hidden="true" class="w-5 ml-3" width="24" height="24" viewBox="0 0 24 24" fill="none"
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
                <svg aria-hidden="true" class="w-5 ml-3" width="24" height="24" viewBox="0 0 24 24" fill="none"
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
                <svg aria-hidden="true" class="w-5 ml-3" width="24" height="24" viewBox="0 0 24 24" fill="none"
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
                <svg aria-hidden="true" class="w-5 ml-3" width="24" height="24" viewBox="0 0 24 24" fill="none"
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
                <svg aria-hidden="true" class="w-5 ml-3" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M17 7C17 5.34315 15.6569 4 14 4H10C8.34315 4 7 5.34315 7 7H6C4.34315 7 3 8.34315 3 10V18C3 19.6569 4.34315 21 6 21H18C19.6569 21 21 19.6569 21 18V10C21 8.34315 19.6569 7 18 7H17ZM14 6H10C9.44772 6 9 6.44772 9 7H15C15 6.44772 14.5523 6 14 6ZM6 9H18C18.5523 9 19 9.44772 19 10V18C19 18.5523 18.5523 19 18 19H6C5.44772 19 5 18.5523 5 18V10C5 9.44772 5.44772 9 6 9Z"
                        fill="currentColor" />
                </svg>
            </li>
            <li class="flex items-center justify-end pb-4">
                <span class="text-lg font-extrabold">
                    <?php echo $fields[5]['sth_canidate']; ?>
                </span>
                <svg aria-hidden="true" class="w-5 ml-3" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M10.2426 16.3137L6 12.071L7.41421 10.6568L10.2426 13.4853L15.8995 7.8284L17.3137 9.24262L10.2426 16.3137Z"
                        fill="currentColor" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M1 12C1 5.92487 5.92487 1 12 1C18.0751 1 23 5.92487 23 12C23 18.0751 18.0751 23 12 23C5.92487 23 1 18.0751 1 12ZM12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12C21 16.9706 16.9706 21 12 21Z"
                        fill="currentColor" />
                </svg>
            </li>
            <li class="flex items-center justify-end pb-4">
                <span class="text-lg font-extrabold">
                    <?php echo $fields[6]['sth_canidate']; ?>
                </span>
                <svg class="w-5 ml-3"  width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M12 21C16.9706 21 21 16.9706 21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12C3 16.9706 7.02944 21 12 21ZM14.8055 18.4151C17.1228 17.4003 18.7847 15.1667 18.9806 12.525C18.1577 12.9738 17.12 13.3418 15.9371 13.598C15.7882 15.4676 15.3827 17.1371 14.8055 18.4151ZM9.1945 5.58487C7.24725 6.43766 5.76275 8.15106 5.22208 10.244C5.4537 10.4638 5.84813 10.7341 6.44832 11.0008C6.89715 11.2003 7.42053 11.3798 8.00537 11.5297C8.05853 9.20582 8.50349 7.11489 9.1945 5.58487ZM10.1006 13.9108C10.2573 15.3675 10.5852 16.6202 10.9992 17.5517C11.2932 18.2133 11.5916 18.6248 11.8218 18.8439C11.9037 18.9219 11.9629 18.9634 12 18.9848C12.0371 18.9634 12.0963 18.9219 12.1782 18.8439C12.4084 18.6248 12.7068 18.2133 13.0008 17.5517C13.4148 16.6202 13.7427 15.3675 13.8994 13.9108C13.2871 13.9692 12.6516 14 12 14C11.3484 14 10.7129 13.9692 10.1006 13.9108ZM8.06286 13.598C8.21176 15.4676 8.61729 17.1371 9.1945 18.4151C6.8772 17.4003 5.21525 15.1666 5.01939 12.525C5.84231 12.9738 6.88001 13.3418 8.06286 13.598ZM13.9997 11.8896C13.369 11.9609 12.6993 12 12 12C11.3008 12 10.631 11.9609 10.0003 11.8896C10.0135 9.66408 10.4229 7.74504 10.9992 6.44832C11.2932 5.78673 11.5916 5.37516 11.8218 5.15605C11.9037 5.07812 11.9629 5.03659 12 5.01516C12.0371 5.03659 12.0963 5.07812 12.1782 5.15605C12.4084 5.37516 12.7068 5.78673 13.0008 6.44832C13.5771 7.74504 13.9865 9.66408 13.9997 11.8896ZM15.9946 11.5297C15.9415 9.20582 15.4965 7.11489 14.8055 5.58487C16.7528 6.43766 18.2373 8.15107 18.7779 10.244C18.5463 10.4638 18.1519 10.7341 17.5517 11.0008C17.1029 11.2003 16.5795 11.3798 15.9946 11.5297Z"
                        fill="currentColor" />
                </svg>
            </li>
        </ul>
    </div>
</div>