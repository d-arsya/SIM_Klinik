<div class="items-center justify-center space-y-5">
    <div class="font-semibold text-xl text-black text-center">Apakah Anda yakin untuk disubmit?</div>
    <form action="#" method="post">
            <div class="grid w-full grid-cols-4 gap-3 auto-cols-[270px]">
            <label for="" class="text-sm font-medium leading-6 text-gray-700">Catatan Diskon</label>
            <textarea type="text" id="j" name="name" rows="5" cols="3"
                class="col-span-3 py-2 pl-3 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 resize-none"
                placeholder="Ketikkan Catatan Diskon..."
                required></textarea>
            </div>
        </form>
    <div class="flex items-center justify-center space-x-2">
        <x-button color="red" type="button">Batal</x-button>
        <x-button color="blue" type="submit">Submit</x-button>
    </div>
</div>