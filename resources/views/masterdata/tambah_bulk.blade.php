    <div class="relative max-h-[80vh] p-4 w-[1122px]">
        <!-- Modal header -->
        <div class="flex items-center rounded-t-xl bg-white justify-between h-[56px] px-[30px] md:px-[30px] border-b">
            <h3 class="text-base font-semibold text-black">
                Upload File
            </h3>
            <button type="button" class="text-gray-400 hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-toggle="tambah-bulk">
                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13.8726 11.2471L9.62534 6.99986L13.8726 2.75261C13.954 2.67023 13.9996 2.55909 13.9996 2.44329C13.9996 2.32749 13.954 2.21636 13.8726 2.13398L11.8662 0.127606C11.7842 0.0455872 11.6729 -0.000488281 11.5569 -0.000488281C11.4409 -0.000488281 11.3296 0.0455872 11.2476 0.127606L7.00034 4.37486L2.75309 0.127606C2.67105 0.0455872 2.55979 -0.000488281 2.44378 -0.000488281C2.32777 -0.000488281 2.21651 0.0455872 2.13447 0.127606L0.128094 2.13398C0.0460755 2.21602 0 2.32728 0 2.44329C0 2.5593 0.0460755 2.67056 0.128094 2.75261L4.37534 6.99986L0.128094 11.2471C0.0460755 11.3291 0 11.4404 0 11.5564C0 11.6724 0.0460755 11.7837 0.128094 11.8657L2.13447 13.8721C2.21651 13.9541 2.32777 14.0002 2.44378 14.0002C2.55979 14.0002 2.67105 13.9541 2.75309 13.8721L7.00034 9.62486L11.2476 13.8721C11.3296 13.9541 11.4409 14.0002 11.5569 14.0002C11.6729 14.0002 11.7842 13.9541 11.8662 13.8721L13.8726 11.8657C13.9546 11.7837 14.0007 11.6724 14.0007 11.5564C14.0007 11.4404 13.9546 11.3291 13.8726 11.2471Z" fill="#99A1B7"/>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
        </div>

        <div class="flex flex-col items-center justify-center h-[480px] bg-[#036CA1B0]">
            <svg width="242" height="242" viewBox="0 0 242 242" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M50.417 201.667H191.584V181.5H50.417V201.667ZM50.417 100.833H90.7503V161.333H151.25V100.833H191.584L121 30.25L50.417 100.833Z" fill="white"/>
            </svg>
            <div class="font-semibold text-center text-white">Drag and drop<br>or<br><span class="text-[#5DE7FF] underline">select file</span></div>
        </div>

        <!-- Modal content -->
        <div class="relative bg-white py-4 px-4 w-full">
            <x-button color="blue" class="w-[137px] place-self-end" type="submit">Submit</x-button>
        </div>
    </div>