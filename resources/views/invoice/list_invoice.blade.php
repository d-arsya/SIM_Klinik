@extends('layout.app')

@section('title', 'Invoice')
@section('css')
{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">

<style>
    main {
        margin-left: 12px;
    }
body{
    /* overflow: hidden; */
    overflow-x: hidden;
}
/* Remove DataTables default styling */
table.dataTable.no-footer {
    border-bottom: none;
}
table.dataTable thead th, table.dataTable thead td {
    border-bottom: 1px solid #e5e7eb; /* your custom color */
}
table.dataTable tbody tr {
    background-color: transparent;
}
table.dataTable tbody tr:hover {
    background-color: #f3f4f6; /* your custom hover color */
}

</style>
@endsection
@section('content')

    <div class="page-title overflow-y-visible d-flex flex-column justify-content-center flex-wrap max-w-[79.5%] mb-3">
        <!--begin::Title-->
        {{-- <h4 class="page-heading d-flex text-gray-900 fw-bold fs-5 flex-column justify-content-center my-0">
            List Invoice
                </h4> --}}
                <h4 class="text-gray-900 font-bold text-lg flex flex-col justify-center my-0" >
                    List Invoice
                </h4>

        <!--end::Title-->


            <!--begin::Breadcrumb-->
<ul class="flex flex-row space-x-2 my-0 pt-1 text-gray-600">
    <!--begin::Item-->
    <li>
        <p href="/metronic8/demo1/index.html" class="text-gray-600 ">
            Jumlah Pasien :
        </p>
    </li>
    <!--end::Item-->
    <!--begin::Item-->
    <li>
        <p href="/metronic8/demo1/index.html" class="text-gray-600 ">
            9888
        </p>
    </li>
    <!--end::Item-->
    <!--begin::Item-->
    <li>
        <p href="/metronic8/demo1/index.html" class="text-gray-600 ">
            Jumlah Dokter :
        </p>
    </li>
    <!--end::Item-->
    <!--begin::Item-->
    <li>
        <p href="/metronic8/demo1/index.html" class="text-gray-600 ">
            9888
        </p>
    </li>
    <!--end::Item-->
</ul>
<!--end::Breadcrumb-->

    </div>
    {{-- <div class="flex flex-col w-full p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <div class="overflow-x-scroll">
            <div class="inline-block min-w-full align-middle"></div>
                <div class="overflow-hidden shadow">
                </div>
            </div>
        </div>
    </div> --}}
    <div class="max-w-[100%]  overflow-x-auto  whitespace-nowrap block w-[98.5%] p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <div class="card-header align-items-center py-2 gap-2 gap-md-5" data-select2-id="select2-data-123-y4cr">
            <!--begin::Card title-->
            <div class="card-title">
                <!--begin::Search-->
                <div class="d-flex align-items-center position-relative my-1">
                    <div class="relative my-1">
                        <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-500"></i>
                        <input
                            type="text"
                            data-kt-ecommerce-product-filter="search"
                            class="form-input rounded-md pl-10 pr-4 w-64 border border-gray-300 focus:ring focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Search Product">
                    </div>

                </div>
                <!--end::Search-->
            </div>
            <!--end::Card title-->


        </div>
        <table id="invoiceTable" class="max-w-[72vw] inline-block divide-y overflow-auto  divide-gray-200  dark:divide-gray-600 ">
            <thead class="bg-gray-100 dark:bg-gray-700">
                <tr>
                    <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                       ID
                    </th>
                    <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                        Tanggal
                    </th>
                    <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                        No.RM
                    </th>
                    <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                        Pasien
                    </th>
                    <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                        Owner Pasien
                    </th>
                    <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                        Nomor Telepon
                    </th>
                    <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                        Total
                    </th>
                    <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                        Status
                    </th>
                    <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                        Invoice
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">

                <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">

                    <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">INV-26773</td>
                    <td class="max-w-sm p-4 overflow-hidden text-base font-normal text-gray-500 truncate xl:max-w-xs dark:text-gray-400">10/01/24</td>
                    <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">2</td>
                    <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                        <div class="text-base font-semibold text-gray-900 dark:text-white">Blacky</div>
                        <div class="text-sm font-normal text-gray-500 dark:text-gray-400">Anjing</div>
                    </td>
                    <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">Andi</td>
                    <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">0812182930100</td>
                    <td class="p-4">
                        <span class="inline-flex items-center px-3 py-1 text-base font-medium text-[#D81A48] bg-[#F8285A]/20 rounded-full">
                            <span class="w-2 h-2 bg-[#F8285A] rounded-full mr-2"></span>
                            Belum Lunas
                        </span>
                    </td>
                    <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">Rp 18,000</td>


                    <td class="p-4 whitespace-nowrap">
                    <button data-modal-target="list-invoice" data-modal-toggle="list-invoice" class="inline-flex items-center px-3 py-3 text-sm font-medium text-center text-white bg-klinikBlue rounded-lg hover:bg-[#0481C0]" type="button">
                        <svg width="20" height="19" viewBox="0 0 20 19" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M16.8691 18.5005H3.86914C2.94088 18.5005 2.05064 18.1318 1.39427 17.4754C0.73789 16.819 0.369141 15.9288 0.369141 15.0005V1.94353C0.369141 0.876529 1.42514 0.199529 2.35414 0.521529C2.48747 0.567529 2.61647 0.634862 2.74114 0.723529L2.91614 0.848529C3.3418 1.15056 3.85102 1.31238 4.37294 1.31149C4.89486 1.31059 5.40352 1.14702 5.82814 0.843529C6.42418 0.419343 7.13757 0.191406 7.86914 0.191406C8.60071 0.191406 9.3141 0.419343 9.91014 0.843529C10.3348 1.14702 10.8434 1.31059 11.3653 1.31149C11.8873 1.31238 12.3965 1.15056 12.8221 0.848529L12.9971 0.723529C13.9901 0.0135291 15.3691 0.723529 15.3691 1.94353V9.50053H18.8691C19.0681 9.50053 19.2588 9.57955 19.3995 9.7202C19.5401 9.86085 19.6191 10.0516 19.6191 10.2505V15.7505C19.6191 16.4799 19.3294 17.1793 18.8137 17.6951C18.298 18.2108 17.5985 18.5005 16.8691 18.5005ZM15.6191 11.0005V15.7505C15.6191 16.0821 15.7508 16.4 15.9853 16.6344C16.2197 16.8688 16.5376 17.0005 16.8691 17.0005C17.2007 17.0005 17.5186 16.8688 17.753 16.6344C17.9874 16.4 18.1191 16.0821 18.1191 15.7505V11.0005H15.6191ZM11.3691 6.75053C11.3691 6.55162 11.2901 6.36085 11.1495 6.2202C11.0088 6.07955 10.8181 6.00053 10.6191 6.00053H4.61914C4.42023 6.00053 4.22946 6.07955 4.08881 6.2202C3.94816 6.36085 3.86914 6.55162 3.86914 6.75053C3.86914 6.94944 3.94816 7.14021 4.08881 7.28086C4.22946 7.42151 4.42023 7.50053 4.61914 7.50053H10.6191C10.8181 7.50053 11.0088 7.42151 11.1495 7.28086C11.2901 7.14021 11.3691 6.94944 11.3691 6.75053ZM10.3691 9.75053C10.3691 9.55162 10.2901 9.36085 10.1495 9.2202C10.0088 9.07955 9.81805 9.00053 9.61914 9.00053H4.61914C4.42023 9.00053 4.22946 9.07955 4.08881 9.2202C3.94816 9.36085 3.86914 9.55162 3.86914 9.75053C3.86914 9.94944 3.94816 10.1402 4.08881 10.2809C4.22946 10.4215 4.42023 10.5005 4.61914 10.5005H9.61914C9.81805 10.5005 10.0088 10.4215 10.1495 10.2809C10.2901 10.1402 10.3691 9.94944 10.3691 9.75053ZM10.6191 12.0005C10.8181 12.0005 11.0088 12.0795 11.1495 12.2202C11.2901 12.3609 11.3691 12.5516 11.3691 12.7505C11.3691 12.9494 11.2901 13.1402 11.1495 13.2809C11.0088 13.4215 10.8181 13.5005 10.6191 13.5005H4.61914C4.42023 13.5005 4.22946 13.4215 4.08881 13.2809C3.94816 13.1402 3.86914 12.9494 3.86914 12.7505C3.86914 12.5516 3.94816 12.3609 4.08881 12.2202C4.22946 12.0795 4.42023 12.0005 4.61914 12.0005H10.6191Z" fill="#F8F8F8"/>
                            </svg>
                        </button>

                        <!-- Main modal -->
                        <div id="list-invoice" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative p-4 w-full max-w-md max-h-full">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-xl shadow dark:bg-gray-700">
                                    <!-- Modal header -->
                                    <div class="flex items-center justify-between p-5 md:p-5 border-b rounded-t">
                                        <h3 class="text-sm font-semibold text-gray-900">
                                            Detail Invoice
                                        </h3>
                                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="list-invoice">
                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                    </div>
                                    <div class="flex items-center justify-between p-5">
                                        <h3 class="text-sm text-txtgray">INV-26773</h3>
                                        <h4 class="text-xs text-txtgray">10 Januari 2024</h4>
                                    </div>
                                    <!-- Modal body -->
                                     <div class="flex justify-between p-5">
                                        <div>
                                            
                                        </div>
                                     </div>
                                    <!-- <form class="p-4 md:p-5">
                                        <div class="grid gap-4 mb-4 grid-cols-2">
                                            <div class="col-span-2">
                                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                                                <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type product name" required="">
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                                                <input type="number" name="price" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="$2999" required="">
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                                                <select id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                    <option selected="">Select category</option>
                                                    <option value="TV">TV/Monitors</option>
                                                    <option value="PC">PC</option>
                                                    <option value="GA">Gaming/Console</option>
                                                    <option value="PH">Phones</option>
                                                </select>
                                            </div>
                                            <div class="col-span-2">
                                                <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Description</label>
                                                <textarea id="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write product description here"></textarea>                    
                                            </div>
                                        </div>
                                        <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                            <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                                            Add new product
                                        </button>
                                    </form> -->
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">

                    <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">INV-26773</td>
                    <td class="max-w-sm p-4 overflow-hidden text-base font-normal text-gray-500 truncate xl:max-w-xs dark:text-gray-400">10/01/24</td>
                    <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">2</td>
                    <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                        <div class="text-base font-semibold text-gray-900 dark:text-white">Blacky</div>
                        <div class="text-sm font-normal text-gray-500 dark:text-gray-400">Anjing</div>
                    </td>
                    <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">Andi</td>
                    <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">0812182930100</td>
                    <td class="p-4">
                        <span class="inline-flex items-center px-3 py-1 text-base font-medium text-[#D81A48] bg-[#F8285A]/20 rounded-full">
                            <span class="w-2 h-2 bg-[#F8285A] rounded-full mr-2"></span>
                            Belum Lunas
                        </span>
                    </td>
                    <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">Rp 18,000</td>


                    <td class="p-4 whitespace-nowrap">
                    <button data-modal-target="crud-modal" data-modal-toggle="crud-modal" class="inline-flex items-center px-3 py-3 text-sm font-medium text-center text-white bg-klinikBlue rounded-lg hover:bg-[#0481C0]" type="button">
                        <svg width="20" height="19" viewBox="0 0 20 19" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M16.8691 18.5005H3.86914C2.94088 18.5005 2.05064 18.1318 1.39427 17.4754C0.73789 16.819 0.369141 15.9288 0.369141 15.0005V1.94353C0.369141 0.876529 1.42514 0.199529 2.35414 0.521529C2.48747 0.567529 2.61647 0.634862 2.74114 0.723529L2.91614 0.848529C3.3418 1.15056 3.85102 1.31238 4.37294 1.31149C4.89486 1.31059 5.40352 1.14702 5.82814 0.843529C6.42418 0.419343 7.13757 0.191406 7.86914 0.191406C8.60071 0.191406 9.3141 0.419343 9.91014 0.843529C10.3348 1.14702 10.8434 1.31059 11.3653 1.31149C11.8873 1.31238 12.3965 1.15056 12.8221 0.848529L12.9971 0.723529C13.9901 0.0135291 15.3691 0.723529 15.3691 1.94353V9.50053H18.8691C19.0681 9.50053 19.2588 9.57955 19.3995 9.7202C19.5401 9.86085 19.6191 10.0516 19.6191 10.2505V15.7505C19.6191 16.4799 19.3294 17.1793 18.8137 17.6951C18.298 18.2108 17.5985 18.5005 16.8691 18.5005ZM15.6191 11.0005V15.7505C15.6191 16.0821 15.7508 16.4 15.9853 16.6344C16.2197 16.8688 16.5376 17.0005 16.8691 17.0005C17.2007 17.0005 17.5186 16.8688 17.753 16.6344C17.9874 16.4 18.1191 16.0821 18.1191 15.7505V11.0005H15.6191ZM11.3691 6.75053C11.3691 6.55162 11.2901 6.36085 11.1495 6.2202C11.0088 6.07955 10.8181 6.00053 10.6191 6.00053H4.61914C4.42023 6.00053 4.22946 6.07955 4.08881 6.2202C3.94816 6.36085 3.86914 6.55162 3.86914 6.75053C3.86914 6.94944 3.94816 7.14021 4.08881 7.28086C4.22946 7.42151 4.42023 7.50053 4.61914 7.50053H10.6191C10.8181 7.50053 11.0088 7.42151 11.1495 7.28086C11.2901 7.14021 11.3691 6.94944 11.3691 6.75053ZM10.3691 9.75053C10.3691 9.55162 10.2901 9.36085 10.1495 9.2202C10.0088 9.07955 9.81805 9.00053 9.61914 9.00053H4.61914C4.42023 9.00053 4.22946 9.07955 4.08881 9.2202C3.94816 9.36085 3.86914 9.55162 3.86914 9.75053C3.86914 9.94944 3.94816 10.1402 4.08881 10.2809C4.22946 10.4215 4.42023 10.5005 4.61914 10.5005H9.61914C9.81805 10.5005 10.0088 10.4215 10.1495 10.2809C10.2901 10.1402 10.3691 9.94944 10.3691 9.75053ZM10.6191 12.0005C10.8181 12.0005 11.0088 12.0795 11.1495 12.2202C11.2901 12.3609 11.3691 12.5516 11.3691 12.7505C11.3691 12.9494 11.2901 13.1402 11.1495 13.2809C11.0088 13.4215 10.8181 13.5005 10.6191 13.5005H4.61914C4.42023 13.5005 4.22946 13.4215 4.08881 13.2809C3.94816 13.1402 3.86914 12.9494 3.86914 12.7505C3.86914 12.5516 3.94816 12.3609 4.08881 12.2202C4.22946 12.0795 4.42023 12.0005 4.61914 12.0005H10.6191Z" fill="#F8F8F8"/>
                            </svg>
                        </button>

                        <!-- Main modal -->
                        <div id="crud-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative p-4 w-full max-w-md max-h-full">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <!-- Modal header -->
                                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                            Create New Product
                                        </h3>
                                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal">
                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                    </div>
                                    <!-- Modal body -->
                                    <form class="p-4 md:p-5">
                                        <div class="grid gap-4 mb-4 grid-cols-2">
                                            <div class="col-span-2">
                                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                                                <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type product name" required="">
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                                                <input type="number" name="price" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="$2999" required="">
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                                                <select id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                    <option selected="">Select category</option>
                                                    <option value="TV">TV/Monitors</option>
                                                    <option value="PC">PC</option>
                                                    <option value="GA">Gaming/Console</option>
                                                    <option value="PH">Phones</option>
                                                </select>
                                            </div>
                                            <div class="col-span-2">
                                                <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Description</label>
                                                <textarea id="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write product description here"></textarea>                    
                                            </div>
                                        </div>
                                        <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                            <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                                            Add new product
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">

                    <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">INV-26773</td>
                    <td class="max-w-sm p-4 overflow-hidden text-base font-normal text-gray-500 truncate xl:max-w-xs dark:text-gray-400">10/01/24</td>
                    <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">2</td>
                    <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                        <div class="text-base font-semibold text-gray-900 dark:text-white">Blacky</div>
                        <div class="text-sm font-normal text-gray-500 dark:text-gray-400">Anjing</div>
                    </td>
                    <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">Andi</td>
                    <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">0812182930100</td>
                    <td class="p-4">
                        <span class="inline-flex items-center px-3 py-1 text-base font-medium text-[#D81A48] bg-[#F8285A]/20 rounded-full">
                            <span class="w-2 h-2 bg-[#F8285A] rounded-full mr-2"></span>
                            Belum Lunas
                        </span>
                    </td>
                    <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">Rp 18,000</td>


                    <td class="p-4 whitespace-nowrap">
                        <button type="button" id="deleteProductButton" data-drawer-target="drawer-delete-product-default" data-drawer-show="drawer-delete-product-default" aria-controls="drawer-delete-product-default" data-drawer-placement="right" class="inline-flex items-center px-3 py-3 text-sm font-medium text-center text-white bg-klinikBlue rounded-lg hover:bg-[#0481C0]">
                            <svg width="20" height="19" viewBox="0 0 20 19" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M16.8691 18.5005H3.86914C2.94088 18.5005 2.05064 18.1318 1.39427 17.4754C0.73789 16.819 0.369141 15.9288 0.369141 15.0005V1.94353C0.369141 0.876529 1.42514 0.199529 2.35414 0.521529C2.48747 0.567529 2.61647 0.634862 2.74114 0.723529L2.91614 0.848529C3.3418 1.15056 3.85102 1.31238 4.37294 1.31149C4.89486 1.31059 5.40352 1.14702 5.82814 0.843529C6.42418 0.419343 7.13757 0.191406 7.86914 0.191406C8.60071 0.191406 9.3141 0.419343 9.91014 0.843529C10.3348 1.14702 10.8434 1.31059 11.3653 1.31149C11.8873 1.31238 12.3965 1.15056 12.8221 0.848529L12.9971 0.723529C13.9901 0.0135291 15.3691 0.723529 15.3691 1.94353V9.50053H18.8691C19.0681 9.50053 19.2588 9.57955 19.3995 9.7202C19.5401 9.86085 19.6191 10.0516 19.6191 10.2505V15.7505C19.6191 16.4799 19.3294 17.1793 18.8137 17.6951C18.298 18.2108 17.5985 18.5005 16.8691 18.5005ZM15.6191 11.0005V15.7505C15.6191 16.0821 15.7508 16.4 15.9853 16.6344C16.2197 16.8688 16.5376 17.0005 16.8691 17.0005C17.2007 17.0005 17.5186 16.8688 17.753 16.6344C17.9874 16.4 18.1191 16.0821 18.1191 15.7505V11.0005H15.6191ZM11.3691 6.75053C11.3691 6.55162 11.2901 6.36085 11.1495 6.2202C11.0088 6.07955 10.8181 6.00053 10.6191 6.00053H4.61914C4.42023 6.00053 4.22946 6.07955 4.08881 6.2202C3.94816 6.36085 3.86914 6.55162 3.86914 6.75053C3.86914 6.94944 3.94816 7.14021 4.08881 7.28086C4.22946 7.42151 4.42023 7.50053 4.61914 7.50053H10.6191C10.8181 7.50053 11.0088 7.42151 11.1495 7.28086C11.2901 7.14021 11.3691 6.94944 11.3691 6.75053ZM10.3691 9.75053C10.3691 9.55162 10.2901 9.36085 10.1495 9.2202C10.0088 9.07955 9.81805 9.00053 9.61914 9.00053H4.61914C4.42023 9.00053 4.22946 9.07955 4.08881 9.2202C3.94816 9.36085 3.86914 9.55162 3.86914 9.75053C3.86914 9.94944 3.94816 10.1402 4.08881 10.2809C4.22946 10.4215 4.42023 10.5005 4.61914 10.5005H9.61914C9.81805 10.5005 10.0088 10.4215 10.1495 10.2809C10.2901 10.1402 10.3691 9.94944 10.3691 9.75053ZM10.6191 12.0005C10.8181 12.0005 11.0088 12.0795 11.1495 12.2202C11.2901 12.3609 11.3691 12.5516 11.3691 12.7505C11.3691 12.9494 11.2901 13.1402 11.1495 13.2809C11.0088 13.4215 10.8181 13.5005 10.6191 13.5005H4.61914C4.42023 13.5005 4.22946 13.4215 4.08881 13.2809C3.94816 13.1402 3.86914 12.9494 3.86914 12.7505C3.86914 12.5516 3.94816 12.3609 4.08881 12.2202C4.22946 12.0795 4.42023 12.0005 4.61914 12.0005H10.6191Z" fill="#F8F8F8"/>
                            </svg>
                        </button>
                    </td>
                </tr>
                <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">

                    <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">INV-26773</td>
                    <td class="max-w-sm p-4 overflow-hidden text-base font-normal text-gray-500 truncate xl:max-w-xs dark:text-gray-400">10/01/24</td>
                    <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">2</td>
                    <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                        <div class="text-base font-semibold text-gray-900 dark:text-white">Blacky</div>
                        <div class="text-sm font-normal text-gray-500 dark:text-gray-400">Anjing</div>
                    </td>
                    <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">Andi</td>
                    <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">0812182930100</td>
                    <td class="p-4">
                        <span class="inline-flex items-center px-3 py-1 text-base font-medium text-[#D81A48] bg-[#F8285A]/20 rounded-full">
                            <span class="w-2 h-2 bg-[#F8285A] rounded-full mr-2"></span>
                            Belum Lunas
                        </span>
                    </td>
                    <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">Rp 18,000</td>


                    <td class="p-4 whitespace-nowrap">

                        <!-- Modal toggle -->
                        <button data-modal-target="crud-modal" data-modal-toggle="crud-modal" class="inline-flex items-center px-3 py-3 text-sm font-medium text-center text-white bg-klinikBlue rounded-lg hover:bg-[#0481C0]" type="button">
                        <svg width="20" height="19" viewBox="0 0 20 19" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M16.8691 18.5005H3.86914C2.94088 18.5005 2.05064 18.1318 1.39427 17.4754C0.73789 16.819 0.369141 15.9288 0.369141 15.0005V1.94353C0.369141 0.876529 1.42514 0.199529 2.35414 0.521529C2.48747 0.567529 2.61647 0.634862 2.74114 0.723529L2.91614 0.848529C3.3418 1.15056 3.85102 1.31238 4.37294 1.31149C4.89486 1.31059 5.40352 1.14702 5.82814 0.843529C6.42418 0.419343 7.13757 0.191406 7.86914 0.191406C8.60071 0.191406 9.3141 0.419343 9.91014 0.843529C10.3348 1.14702 10.8434 1.31059 11.3653 1.31149C11.8873 1.31238 12.3965 1.15056 12.8221 0.848529L12.9971 0.723529C13.9901 0.0135291 15.3691 0.723529 15.3691 1.94353V9.50053H18.8691C19.0681 9.50053 19.2588 9.57955 19.3995 9.7202C19.5401 9.86085 19.6191 10.0516 19.6191 10.2505V15.7505C19.6191 16.4799 19.3294 17.1793 18.8137 17.6951C18.298 18.2108 17.5985 18.5005 16.8691 18.5005ZM15.6191 11.0005V15.7505C15.6191 16.0821 15.7508 16.4 15.9853 16.6344C16.2197 16.8688 16.5376 17.0005 16.8691 17.0005C17.2007 17.0005 17.5186 16.8688 17.753 16.6344C17.9874 16.4 18.1191 16.0821 18.1191 15.7505V11.0005H15.6191ZM11.3691 6.75053C11.3691 6.55162 11.2901 6.36085 11.1495 6.2202C11.0088 6.07955 10.8181 6.00053 10.6191 6.00053H4.61914C4.42023 6.00053 4.22946 6.07955 4.08881 6.2202C3.94816 6.36085 3.86914 6.55162 3.86914 6.75053C3.86914 6.94944 3.94816 7.14021 4.08881 7.28086C4.22946 7.42151 4.42023 7.50053 4.61914 7.50053H10.6191C10.8181 7.50053 11.0088 7.42151 11.1495 7.28086C11.2901 7.14021 11.3691 6.94944 11.3691 6.75053ZM10.3691 9.75053C10.3691 9.55162 10.2901 9.36085 10.1495 9.2202C10.0088 9.07955 9.81805 9.00053 9.61914 9.00053H4.61914C4.42023 9.00053 4.22946 9.07955 4.08881 9.2202C3.94816 9.36085 3.86914 9.55162 3.86914 9.75053C3.86914 9.94944 3.94816 10.1402 4.08881 10.2809C4.22946 10.4215 4.42023 10.5005 4.61914 10.5005H9.61914C9.81805 10.5005 10.0088 10.4215 10.1495 10.2809C10.2901 10.1402 10.3691 9.94944 10.3691 9.75053ZM10.6191 12.0005C10.8181 12.0005 11.0088 12.0795 11.1495 12.2202C11.2901 12.3609 11.3691 12.5516 11.3691 12.7505C11.3691 12.9494 11.2901 13.1402 11.1495 13.2809C11.0088 13.4215 10.8181 13.5005 10.6191 13.5005H4.61914C4.42023 13.5005 4.22946 13.4215 4.08881 13.2809C3.94816 13.1402 3.86914 12.9494 3.86914 12.7505C3.86914 12.5516 3.94816 12.3609 4.08881 12.2202C4.22946 12.0795 4.42023 12.0005 4.61914 12.0005H10.6191Z" fill="#F8F8F8"/>
                            </svg>
                        </button>

                        <!-- Main modal -->
                        <div id="crud-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative p-4 w-full max-w-md max-h-full">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <!-- Modal header -->
                                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                            Create New Product
                                        </h3>
                                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal">
                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                    </div>
                                    <!-- Modal body -->
                                    <form class="p-4 md:p-5">
                                        <div class="grid gap-4 mb-4 grid-cols-2">
                                            <div class="col-span-2">
                                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                                                <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type product name" required="">
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                                                <input type="number" name="price" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="$2999" required="">
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                                                <select id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                    <option selected="">Select category</option>
                                                    <option value="TV">TV/Monitors</option>
                                                    <option value="PC">PC</option>
                                                    <option value="GA">Gaming/Console</option>
                                                    <option value="PH">Phones</option>
                                                </select>
                                            </div>
                                            <div class="col-span-2">
                                                <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Description</label>
                                                <textarea id="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write product description here"></textarea>                    
                                            </div>
                                        </div>
                                        <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                            <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                                            Add new product
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div> 

                    </td>
                </tr>
                <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">

                    <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">INV-26773</td>
                    <td class="max-w-sm p-4 overflow-hidden text-base font-normal text-gray-500 truncate xl:max-w-xs dark:text-gray-400">10/01/24</td>
                    <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">2</td>
                    <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                        <div class="text-base font-semibold text-gray-900 dark:text-white">Blacky</div>
                        <div class="text-sm font-normal text-gray-500 dark:text-gray-400">Anjing</div>
                    </td>
                    <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">Andi</td>
                    <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">0812182930100</td>
                    <td class="p-4">
                        <span class="inline-flex items-center px-3 py-1 text-base font-medium text-[#D81A48] bg-[#F8285A]/20 rounded-full">
                            <span class="w-2 h-2 bg-[#F8285A] rounded-full mr-2"></span>
                            Belum Lunas
                        </span>
                    </td>
                    <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">Rp 18,000</td>


                    <td class="p-4 whitespace-nowrap">
                        <button type="button" id="deleteProductButton" data-drawer-target="drawer-delete-product-default" data-drawer-show="drawer-delete-product-default" aria-controls="drawer-delete-product-default" data-drawer-placement="right" class="inline-flex items-center px-3 py-3 text-sm font-medium text-center text-white bg-klinikBlue rounded-lg hover:bg-[#0481C0]">
                            <svg width="20" height="19" viewBox="0 0 20 19" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M16.8691 18.5005H3.86914C2.94088 18.5005 2.05064 18.1318 1.39427 17.4754C0.73789 16.819 0.369141 15.9288 0.369141 15.0005V1.94353C0.369141 0.876529 1.42514 0.199529 2.35414 0.521529C2.48747 0.567529 2.61647 0.634862 2.74114 0.723529L2.91614 0.848529C3.3418 1.15056 3.85102 1.31238 4.37294 1.31149C4.89486 1.31059 5.40352 1.14702 5.82814 0.843529C6.42418 0.419343 7.13757 0.191406 7.86914 0.191406C8.60071 0.191406 9.3141 0.419343 9.91014 0.843529C10.3348 1.14702 10.8434 1.31059 11.3653 1.31149C11.8873 1.31238 12.3965 1.15056 12.8221 0.848529L12.9971 0.723529C13.9901 0.0135291 15.3691 0.723529 15.3691 1.94353V9.50053H18.8691C19.0681 9.50053 19.2588 9.57955 19.3995 9.7202C19.5401 9.86085 19.6191 10.0516 19.6191 10.2505V15.7505C19.6191 16.4799 19.3294 17.1793 18.8137 17.6951C18.298 18.2108 17.5985 18.5005 16.8691 18.5005ZM15.6191 11.0005V15.7505C15.6191 16.0821 15.7508 16.4 15.9853 16.6344C16.2197 16.8688 16.5376 17.0005 16.8691 17.0005C17.2007 17.0005 17.5186 16.8688 17.753 16.6344C17.9874 16.4 18.1191 16.0821 18.1191 15.7505V11.0005H15.6191ZM11.3691 6.75053C11.3691 6.55162 11.2901 6.36085 11.1495 6.2202C11.0088 6.07955 10.8181 6.00053 10.6191 6.00053H4.61914C4.42023 6.00053 4.22946 6.07955 4.08881 6.2202C3.94816 6.36085 3.86914 6.55162 3.86914 6.75053C3.86914 6.94944 3.94816 7.14021 4.08881 7.28086C4.22946 7.42151 4.42023 7.50053 4.61914 7.50053H10.6191C10.8181 7.50053 11.0088 7.42151 11.1495 7.28086C11.2901 7.14021 11.3691 6.94944 11.3691 6.75053ZM10.3691 9.75053C10.3691 9.55162 10.2901 9.36085 10.1495 9.2202C10.0088 9.07955 9.81805 9.00053 9.61914 9.00053H4.61914C4.42023 9.00053 4.22946 9.07955 4.08881 9.2202C3.94816 9.36085 3.86914 9.55162 3.86914 9.75053C3.86914 9.94944 3.94816 10.1402 4.08881 10.2809C4.22946 10.4215 4.42023 10.5005 4.61914 10.5005H9.61914C9.81805 10.5005 10.0088 10.4215 10.1495 10.2809C10.2901 10.1402 10.3691 9.94944 10.3691 9.75053ZM10.6191 12.0005C10.8181 12.0005 11.0088 12.0795 11.1495 12.2202C11.2901 12.3609 11.3691 12.5516 11.3691 12.7505C11.3691 12.9494 11.2901 13.1402 11.1495 13.2809C11.0088 13.4215 10.8181 13.5005 10.6191 13.5005H4.61914C4.42023 13.5005 4.22946 13.4215 4.08881 13.2809C3.94816 13.1402 3.86914 12.9494 3.86914 12.7505C3.86914 12.5516 3.94816 12.3609 4.08881 12.2202C4.22946 12.0795 4.42023 12.0005 4.61914 12.0005H10.6191Z" fill="#F8F8F8"/>
                            </svg>
                        </button>
                    </td>
                </tr>
                <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">

                    <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">INV-26773</td>
                    <td class="max-w-sm p-4 overflow-hidden text-base font-normal text-gray-500 truncate xl:max-w-xs dark:text-gray-400">10/01/24</td>
                    <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">2</td>
                    <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                        <div class="text-base font-semibold text-gray-900 dark:text-white">Blacky</div>
                        <div class="text-sm font-normal text-gray-500 dark:text-gray-400">Anjing</div>
                    </td>
                    <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">Andi</td>
                    <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">0812182930100</td>
                    <td class="p-4">
                        <span class="inline-flex items-center px-3 py-1 text-base font-medium text-[#D81A48] bg-[#F8285A]/20 rounded-full">
                            <span class="w-2 h-2 bg-[#F8285A] rounded-full mr-2"></span>
                            Belum Lunas
                        </span>
                    </td>
                    <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">Rp 18,000</td>


                    <td class="p-4 whitespace-nowrap">
                        <button type="button" id="deleteProductButton" data-drawer-target="drawer-delete-product-default" data-drawer-show="drawer-delete-product-default" aria-controls="drawer-delete-product-default" data-drawer-placement="right" class="inline-flex items-center px-3 py-3 text-sm font-medium text-center text-white bg-klinikBlue rounded-lg hover:bg-[#0481C0]">
                            <svg width="20" height="19" viewBox="0 0 20 19" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M16.8691 18.5005H3.86914C2.94088 18.5005 2.05064 18.1318 1.39427 17.4754C0.73789 16.819 0.369141 15.9288 0.369141 15.0005V1.94353C0.369141 0.876529 1.42514 0.199529 2.35414 0.521529C2.48747 0.567529 2.61647 0.634862 2.74114 0.723529L2.91614 0.848529C3.3418 1.15056 3.85102 1.31238 4.37294 1.31149C4.89486 1.31059 5.40352 1.14702 5.82814 0.843529C6.42418 0.419343 7.13757 0.191406 7.86914 0.191406C8.60071 0.191406 9.3141 0.419343 9.91014 0.843529C10.3348 1.14702 10.8434 1.31059 11.3653 1.31149C11.8873 1.31238 12.3965 1.15056 12.8221 0.848529L12.9971 0.723529C13.9901 0.0135291 15.3691 0.723529 15.3691 1.94353V9.50053H18.8691C19.0681 9.50053 19.2588 9.57955 19.3995 9.7202C19.5401 9.86085 19.6191 10.0516 19.6191 10.2505V15.7505C19.6191 16.4799 19.3294 17.1793 18.8137 17.6951C18.298 18.2108 17.5985 18.5005 16.8691 18.5005ZM15.6191 11.0005V15.7505C15.6191 16.0821 15.7508 16.4 15.9853 16.6344C16.2197 16.8688 16.5376 17.0005 16.8691 17.0005C17.2007 17.0005 17.5186 16.8688 17.753 16.6344C17.9874 16.4 18.1191 16.0821 18.1191 15.7505V11.0005H15.6191ZM11.3691 6.75053C11.3691 6.55162 11.2901 6.36085 11.1495 6.2202C11.0088 6.07955 10.8181 6.00053 10.6191 6.00053H4.61914C4.42023 6.00053 4.22946 6.07955 4.08881 6.2202C3.94816 6.36085 3.86914 6.55162 3.86914 6.75053C3.86914 6.94944 3.94816 7.14021 4.08881 7.28086C4.22946 7.42151 4.42023 7.50053 4.61914 7.50053H10.6191C10.8181 7.50053 11.0088 7.42151 11.1495 7.28086C11.2901 7.14021 11.3691 6.94944 11.3691 6.75053ZM10.3691 9.75053C10.3691 9.55162 10.2901 9.36085 10.1495 9.2202C10.0088 9.07955 9.81805 9.00053 9.61914 9.00053H4.61914C4.42023 9.00053 4.22946 9.07955 4.08881 9.2202C3.94816 9.36085 3.86914 9.55162 3.86914 9.75053C3.86914 9.94944 3.94816 10.1402 4.08881 10.2809C4.22946 10.4215 4.42023 10.5005 4.61914 10.5005H9.61914C9.81805 10.5005 10.0088 10.4215 10.1495 10.2809C10.2901 10.1402 10.3691 9.94944 10.3691 9.75053ZM10.6191 12.0005C10.8181 12.0005 11.0088 12.0795 11.1495 12.2202C11.2901 12.3609 11.3691 12.5516 11.3691 12.7505C11.3691 12.9494 11.2901 13.1402 11.1495 13.2809C11.0088 13.4215 10.8181 13.5005 10.6191 13.5005H4.61914C4.42023 13.5005 4.22946 13.4215 4.08881 13.2809C3.94816 13.1402 3.86914 12.9494 3.86914 12.7505C3.86914 12.5516 3.94816 12.3609 4.08881 12.2202C4.22946 12.0795 4.42023 12.0005 4.61914 12.0005H10.6191Z" fill="#F8F8F8"/>
                            </svg>
                        </button>
                    </td>
                </tr>
                <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">

                    <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">INV-26773</td>
                    <td class="max-w-sm p-4 overflow-hidden text-base font-normal text-gray-500 truncate xl:max-w-xs dark:text-gray-400">10/01/24</td>
                    <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">2</td>
                    <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                        <div class="text-base font-semibold text-gray-900 dark:text-white">Blacky</div>
                        <div class="text-sm font-normal text-gray-500 dark:text-gray-400">Anjing</div>
                    </td>
                    <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">Andi</td>
                    <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">0812182930100</td>
                    <td class="p-4">
                        <span class="inline-flex items-center px-3 py-1 text-base font-medium text-[#D81A48] bg-[#F8285A]/20 rounded-full">
                            <span class="w-2 h-2 bg-[#F8285A] rounded-full mr-2"></span>
                            Belum Lunas
                        </span>
                    </td>
                    <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">Rp 18,000</td>


                    <td class="p-4 whitespace-nowrap">
                        <button type="button" id="deleteProductButton" data-drawer-target="drawer-delete-product-default" data-drawer-show="drawer-delete-product-default" aria-controls="drawer-delete-product-default" data-drawer-placement="right" class="inline-flex items-center px-3 py-3 text-sm font-medium text-center text-white bg-klinikBlue rounded-lg hover:bg-[#0481C0]">
                            <svg width="20" height="19" viewBox="0 0 20 19" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M16.8691 18.5005H3.86914C2.94088 18.5005 2.05064 18.1318 1.39427 17.4754C0.73789 16.819 0.369141 15.9288 0.369141 15.0005V1.94353C0.369141 0.876529 1.42514 0.199529 2.35414 0.521529C2.48747 0.567529 2.61647 0.634862 2.74114 0.723529L2.91614 0.848529C3.3418 1.15056 3.85102 1.31238 4.37294 1.31149C4.89486 1.31059 5.40352 1.14702 5.82814 0.843529C6.42418 0.419343 7.13757 0.191406 7.86914 0.191406C8.60071 0.191406 9.3141 0.419343 9.91014 0.843529C10.3348 1.14702 10.8434 1.31059 11.3653 1.31149C11.8873 1.31238 12.3965 1.15056 12.8221 0.848529L12.9971 0.723529C13.9901 0.0135291 15.3691 0.723529 15.3691 1.94353V9.50053H18.8691C19.0681 9.50053 19.2588 9.57955 19.3995 9.7202C19.5401 9.86085 19.6191 10.0516 19.6191 10.2505V15.7505C19.6191 16.4799 19.3294 17.1793 18.8137 17.6951C18.298 18.2108 17.5985 18.5005 16.8691 18.5005ZM15.6191 11.0005V15.7505C15.6191 16.0821 15.7508 16.4 15.9853 16.6344C16.2197 16.8688 16.5376 17.0005 16.8691 17.0005C17.2007 17.0005 17.5186 16.8688 17.753 16.6344C17.9874 16.4 18.1191 16.0821 18.1191 15.7505V11.0005H15.6191ZM11.3691 6.75053C11.3691 6.55162 11.2901 6.36085 11.1495 6.2202C11.0088 6.07955 10.8181 6.00053 10.6191 6.00053H4.61914C4.42023 6.00053 4.22946 6.07955 4.08881 6.2202C3.94816 6.36085 3.86914 6.55162 3.86914 6.75053C3.86914 6.94944 3.94816 7.14021 4.08881 7.28086C4.22946 7.42151 4.42023 7.50053 4.61914 7.50053H10.6191C10.8181 7.50053 11.0088 7.42151 11.1495 7.28086C11.2901 7.14021 11.3691 6.94944 11.3691 6.75053ZM10.3691 9.75053C10.3691 9.55162 10.2901 9.36085 10.1495 9.2202C10.0088 9.07955 9.81805 9.00053 9.61914 9.00053H4.61914C4.42023 9.00053 4.22946 9.07955 4.08881 9.2202C3.94816 9.36085 3.86914 9.55162 3.86914 9.75053C3.86914 9.94944 3.94816 10.1402 4.08881 10.2809C4.22946 10.4215 4.42023 10.5005 4.61914 10.5005H9.61914C9.81805 10.5005 10.0088 10.4215 10.1495 10.2809C10.2901 10.1402 10.3691 9.94944 10.3691 9.75053ZM10.6191 12.0005C10.8181 12.0005 11.0088 12.0795 11.1495 12.2202C11.2901 12.3609 11.3691 12.5516 11.3691 12.7505C11.3691 12.9494 11.2901 13.1402 11.1495 13.2809C11.0088 13.4215 10.8181 13.5005 10.6191 13.5005H4.61914C4.42023 13.5005 4.22946 13.4215 4.08881 13.2809C3.94816 13.1402 3.86914 12.9494 3.86914 12.7505C3.86914 12.5516 3.94816 12.3609 4.08881 12.2202C4.22946 12.0795 4.42023 12.0005 4.61914 12.0005H10.6191Z" fill="#F8F8F8"/>
                            </svg>
                        </button>
                    </td>
                </tr>
                <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">

                    <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">INV-26773</td>
                    <td class="max-w-sm p-4 overflow-hidden text-base font-normal text-gray-500 truncate xl:max-w-xs dark:text-gray-400">10/01/24</td>
                    <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">2</td>
                    <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                        <div class="text-base font-semibold text-gray-900 dark:text-white">Blacky</div>
                        <div class="text-sm font-normal text-gray-500 dark:text-gray-400">Anjing</div>
                    </td>
                    <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">Andi</td>
                    <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">0812182930100</td>
                    <td class="p-4">
                        <span class="inline-flex items-center px-3 py-1 text-base font-medium text-[#D81A48] bg-[#F8285A]/20 rounded-full">
                            <span class="w-2 h-2 bg-[#F8285A] rounded-full mr-2"></span>
                            Belum Lunas
                        </span>
                    </td>
                    <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">Rp 18,000</td>


                    <td class="p-4 whitespace-nowrap">
                        <button type="button" id="deleteProductButton" data-drawer-target="drawer-delete-product-default" data-drawer-show="drawer-delete-product-default" aria-controls="drawer-delete-product-default" data-drawer-placement="right" class="inline-flex items-center px-3 py-3 text-sm font-medium text-center text-white bg-klinikBlue rounded-lg hover:bg-[#0481C0]">
                            <svg width="20" height="19" viewBox="0 0 20 19" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M16.8691 18.5005H3.86914C2.94088 18.5005 2.05064 18.1318 1.39427 17.4754C0.73789 16.819 0.369141 15.9288 0.369141 15.0005V1.94353C0.369141 0.876529 1.42514 0.199529 2.35414 0.521529C2.48747 0.567529 2.61647 0.634862 2.74114 0.723529L2.91614 0.848529C3.3418 1.15056 3.85102 1.31238 4.37294 1.31149C4.89486 1.31059 5.40352 1.14702 5.82814 0.843529C6.42418 0.419343 7.13757 0.191406 7.86914 0.191406C8.60071 0.191406 9.3141 0.419343 9.91014 0.843529C10.3348 1.14702 10.8434 1.31059 11.3653 1.31149C11.8873 1.31238 12.3965 1.15056 12.8221 0.848529L12.9971 0.723529C13.9901 0.0135291 15.3691 0.723529 15.3691 1.94353V9.50053H18.8691C19.0681 9.50053 19.2588 9.57955 19.3995 9.7202C19.5401 9.86085 19.6191 10.0516 19.6191 10.2505V15.7505C19.6191 16.4799 19.3294 17.1793 18.8137 17.6951C18.298 18.2108 17.5985 18.5005 16.8691 18.5005ZM15.6191 11.0005V15.7505C15.6191 16.0821 15.7508 16.4 15.9853 16.6344C16.2197 16.8688 16.5376 17.0005 16.8691 17.0005C17.2007 17.0005 17.5186 16.8688 17.753 16.6344C17.9874 16.4 18.1191 16.0821 18.1191 15.7505V11.0005H15.6191ZM11.3691 6.75053C11.3691 6.55162 11.2901 6.36085 11.1495 6.2202C11.0088 6.07955 10.8181 6.00053 10.6191 6.00053H4.61914C4.42023 6.00053 4.22946 6.07955 4.08881 6.2202C3.94816 6.36085 3.86914 6.55162 3.86914 6.75053C3.86914 6.94944 3.94816 7.14021 4.08881 7.28086C4.22946 7.42151 4.42023 7.50053 4.61914 7.50053H10.6191C10.8181 7.50053 11.0088 7.42151 11.1495 7.28086C11.2901 7.14021 11.3691 6.94944 11.3691 6.75053ZM10.3691 9.75053C10.3691 9.55162 10.2901 9.36085 10.1495 9.2202C10.0088 9.07955 9.81805 9.00053 9.61914 9.00053H4.61914C4.42023 9.00053 4.22946 9.07955 4.08881 9.2202C3.94816 9.36085 3.86914 9.55162 3.86914 9.75053C3.86914 9.94944 3.94816 10.1402 4.08881 10.2809C4.22946 10.4215 4.42023 10.5005 4.61914 10.5005H9.61914C9.81805 10.5005 10.0088 10.4215 10.1495 10.2809C10.2901 10.1402 10.3691 9.94944 10.3691 9.75053ZM10.6191 12.0005C10.8181 12.0005 11.0088 12.0795 11.1495 12.2202C11.2901 12.3609 11.3691 12.5516 11.3691 12.7505C11.3691 12.9494 11.2901 13.1402 11.1495 13.2809C11.0088 13.4215 10.8181 13.5005 10.6191 13.5005H4.61914C4.42023 13.5005 4.22946 13.4215 4.08881 13.2809C3.94816 13.1402 3.86914 12.9494 3.86914 12.7505C3.86914 12.5516 3.94816 12.3609 4.08881 12.2202C4.22946 12.0795 4.42023 12.0005 4.61914 12.0005H10.6191Z" fill="#F8F8F8"/>
                            </svg>
                        </button>
                    </td>
                </tr>



            </tbody>
        </table>
        <div id="pagination" class="mt-4 flex justify-center space-x-2">
            <!-- Page numbers will be injected here -->
        </div>
    </div>
@endsection

    @section('scripts')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    {{-- <script>
        const data = [
            { id: 1, name: 'John Doe', email: 'john@example.com' },
            { id: 2, name: 'Jane Smith', email: 'jane@example.com' },
            { id: 3, name: 'Mike Johnson', email: 'mike@example.com' },
            { id: 4, name: 'Alice Brown', email: 'alice@example.com' },
            { id: 5, name: 'Bob Davis', email: 'bob@example.com' },
            { id: 6, name: 'Charlie Adams', email: 'charlie@example.com' },
            { id: 7, name: 'Eve Taylor', email: 'eve@example.com' },
            { id: 8, name: 'Frank Wilson', email: 'frank@example.com' },
            // Add more data as needed
        ];

        let currentPage = 1;
        const rowsPerPage = 2;

        function renderTable(page) {
            const start = (page - 1) * rowsPerPage;
            const end = start + rowsPerPage;
            const paginatedItems = data.slice(start, end);

            const tableBody = document.getElementById('tableBody');
            tableBody.innerHTML = '';

            paginatedItems.forEach(item => {
                const row = `<tr>
                    <td class="py-2 px-4 border">${item.id}</td>
                    <td class="py-2 px-4 border">${item.name}</td>
                    <td class="py-2 px-4 border">${item.email}</td>
                </tr>`;
                tableBody.innerHTML += row;
            });
        }

        function renderPagination() {
            const pageCount = Math.ceil(data.length / rowsPerPage);
            const pagination = document.getElementById('pagination');
            pagination.innerHTML = '';

            for (let i = 1; i <= pageCount; i++) {
                const pageButton = document.createElement('button');
                pageButton.className = `px-4 py-2 rounded ${i === currentPage ? 'bg-blue-500 text-white' : 'bg-gray-200'}`;
                pageButton.innerText = i;
                pageButton.addEventListener('click', () => {
                    currentPage = i;
                    renderTable(currentPage);
                    renderPagination();
                });
                pagination.appendChild(pageButton);
            }
        }

        // Search functionality
        document.getElementById('search').addEventListener('input', (e) => {
            const searchTerm = e.target.value.toLowerCase();
            const filteredData = data.filter(item =>
                item.name.toLowerCase().includes(searchTerm) ||
                item.email.toLowerCase().includes(searchTerm)
            );

            // Update the table and pagination with the filtered data
            currentPage = 1;
            renderTable(currentPage);
            renderPagination();
        });

        // Initial rendering
        renderTable(currentPage);
        renderPagination();
    </script> --}}
    <script>
        $(document).ready(function() {
    $('#invoiceTable').DataTable({
        "paging": true,
        "searching": true,
        "ordering": true,
        "info": false, // Remove "Showing x to y of z entries"
        "lengthChange": false, // Disable entries dropdown
        "dom": 'lrtip', // Limit to search, pagination
        "pageLength": 5,
        "language": {
            "paginate": {
                "previous": "&lt;",
                "next": "&gt;"
            }
        }
    });
});

</script>
@endsection
