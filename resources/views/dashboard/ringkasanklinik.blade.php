<div class="border bg-white shadow-md rounded-lg p-8">
    <!-- Header -->
    <div class="card-header pb-5 flex justify-between items-center">
        <!-- Title -->
        <div class="flex flex-col pb-3">
            <h3 class="text-xl font-bold text-gray-900">Sales This Month</h3>
        </div>
        <!-- Toolbar -->
        <div class="relative">
            <button class="btn bg-transparent text-gray-500 hover:text-primary">
                <i class="ki-duotone ki-dots-square text-xl"></i>
            </button>
            <!-- Menu -->
            <div class="menu absolute right-0 mt-2 bg-white border border-gray-200 rounded-lg shadow-lg w-48 hidden">
                <div class="px-3 py-4 text-gray-900 font-bold text-sm">Quick Actions</div>
                <div class="border-t border-gray-200 mb-3 opacity-75"></div>
                <div class="menu-item px-3 py-2 hover:bg-gray-100">
                    <a href="#" class="text-sm">New Ticket</a>
                </div>
                <div class="menu-item px-3 py-2 hover:bg-gray-100">
                    <a href="#" class="text-sm">New Customer</a>
                </div>
                <div class="menu-item px-3 py-2 hover:bg-gray-100" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                    <a href="#" class="flex justify-between text-sm">New Group <span class="menu-arrow"></span></a>
                    <!-- Sub-menu -->
                    <div class="menu-sub absolute right-0 mt-2 bg-white border border-gray-200 rounded-lg shadow-lg w-44 hidden">
                        <div class="menu-item px-3 py-2 hover:bg-gray-100">
                            <a href="#" class="text-sm">Admin Group</a>
                        </div>
                        <div class="menu-item px-3 py-2 hover:bg-gray-100">
                            <a href="#" class="text-sm">Staff Group</a>
                        </div>
                        <div class="menu-item px-3 py-2 hover:bg-gray-100">
                            <a href="#" class="text-sm">Member Group</a>
                        </div>
                    </div>
                </div>
                <div class="menu-item px-3 py-2 hover:bg-gray-100">
                    <a href="#" class="text-sm">New Contact</a>
                </div>
                <div class="border-t border-gray-200 mt-3 opacity-75"></div>
                <div class="px-3 py-3">
                    <a href="#" class="btn btn-primary w-full text-sm py-2">Generate Reports</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Title -->
    <div class="card-title flex flex-col pb-4">
        <div class="flex items-center">
            <span class="text-lg font-semibold text-gray-500 mr-1">$</span>
            <span class="text-2xl font-bold text-gray-900 mr-2">69,700</span>
            <span class="badge bg-green-100 text-green-600 text-sm px-2 py-1 rounded-full flex items-center">
                <i class="ki-duotone ki-arrow-up text-success mr-1"></i> 2.2%
            </span>
        </div>
        <span class="text-gray-500 pt-1 font-semibold text-sm">Expected Earnings</span>
    </div>

    <hr style="border: 0; border-top: 1px solid #ccc; margin-bottom:20px;">

    <!-- Card Body -->
    <div class="card-body flex items-center">
        <div class="flex flex-col w-full">
            <div class="flex items-center text-sm font-semibold mb-3">
                <div class="w-2 h-2 bg-red-500 rounded-full mr-3"></div>
                <div class="text-gray-500 flex-grow">Shoes</div>
                <div class="text-gray-700 font-bold">$7,660</div>
            </div>
            <div class="flex items-center text-sm font-semibold mb-3">
                <div class="w-2 h-2 bg-blue-500 rounded-full mr-3"></div>
                <div class="text-gray-500 flex-grow">Gaming</div>
                <div class="text-gray-700 font-bold">$2,820</div>
            </div>
            <div class="flex items-center text-sm font-semibold">
                <div class="w-2 h-2 bg-gray-300 rounded-full mr-3"></div>
                <div class="text-gray-500 flex-grow">Others</div>
                <div class="text-gray-700 font-bold">$45,257</div>
            </div>
        </div>
    </div>
</div>
