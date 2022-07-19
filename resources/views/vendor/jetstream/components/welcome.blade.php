<div class="p-6 sm:px-20 bg-white border-b border-gray-200">
    <!-- <div>
        <x-jet-application-logo class="block h-12 w-auto" />
    </div> -->

    <div class="text-2xl" >
        <center>Welcome to Admin Area!</center>
        
    </div>
</div>

<div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-4">
    <div class="p-3 border-t border-gray-200 md:border-t-0 md:border-l">
        <div class="p-3">
            <div class="rounded-md shadow">
                <div class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 md:py-4 md:text-lg md:px-10">
                    Penjualan Hari Ini
                </div>
                {{$hari_ini}}
            </div>
        </div>
    </div>

    <div class="p-3 border-t border-gray-200 md:border-t-0 md:border-l">
        <div class="p-3">
            <div class="rounded-md shadow">
                <a href="http://skripsibackend.my.id/dashboard/transaction" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 md:py-4 md:text-lg md:px-10">
                  Manage Transactions Here!
                </a>
            </div>
        </div>
    </div>
    <div class="p-3 border-t border-gray-200 md:border-t-0 md:border-l">
        <div class="p-3">
            <div class="rounded-md shadow">
                <a href="http://skripsibackend.my.id/dashboard/product" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 md:py-4 md:text-lg md:px-10">
                  Manage Products Here!
                </a>
            </div>
        </div>
    </div>

    <div class="p-3 border-t border-gray-200 md:border-t-0 md:border-l">
        <div class="p-3">
            <div class="rounded-md shadow">
                <a href="http://skripsibackend.my.id/dashboard/transaction" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 md:py-4 md:text-lg md:px-10">
                  Manage Transactions Here!
                </a>
            </div>
        </div>
    </div>
</div>

