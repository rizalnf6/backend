<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>
    <x-slot name="script">
        <script>
            $(document).ready(function() {
                Morris.Bar({
                  element: 'graph',
                  data: <?= json_encode($data_arr) ?>,
                  xkey: 'bulan',
                  ykeys: ['trans'],
                  labels: ['Penjualan']
                }).on('click', function(i, row){
                  console.log(i, row);
                });
                Morris.Donut({
                  element: 'graphd',
                  data: <?= json_encode($data_arrd) ?>,
                  formatter: function (x) { return x }
                }).on('click', function(i, row){
                  console.log(i, row);
                });
            });
        </script>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                <!-- <div>
                    <x-jet-application-logo class="block h-12 w-auto" />
                </div> -->

                <div class="text-2xl" >
                    <center>Welcome to Admin Area!</center>
                    
                </div>
            </div>

            <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2">
                <div class="p-3 border-t border-gray-200 md:border-t-0 md:border-l">
                    <div class="p-3">
                        <div class="rounded-md shadow">
                            <div class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 md:py-4 md:text-lg md:px-10">
                                Penjualan Hari Ini
                            </div>
                            <h1 style="font-size: 20px; padding: 10px;">{{$hari_ini}}</h1>
                        </div>
                    </div>
                    <div class="p-3">
                        <div class="rounded-md shadow">
                            <div class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 md:py-4 md:text-lg md:px-10">
                                Penjualan Bulan Ini
                            </div>
                            <h1 style="font-size: 20px; padding: 10px;">{{$bulan_ini}}</h1>
                        </div>
                    </div>
                    <div class="p-3">
                        <div class="rounded-md shadow">
                            <div class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 md:py-4 md:text-lg md:px-10">
                                Penjualan Bulan Ini
                            </div>
                            <h1 style="font-size: 20px; padding: 10px;">{{$bulan_ini}}</h1>
                        </div>
                    </div>
                    <div class="p-3">
                        <div class="rounded-md shadow">
                            <div class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 md:py-4 md:text-lg md:px-10">
                                Penjualan Tahun Ini
                            </div>
                            <h1 style="font-size: 20px; padding: 10px;">{{$tahun_ini}}</h1>
                        </div>
                    </div>
                </div>

                <div class="p-6 border-t border-gray-200 md:border-t-0 md:border-l">
                    <div class="p-6">
                        <div class="rounded-md shadow">
                            <div class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 md:py-4 md:text-lg md:px-10">
                                Grafik Penjualan Bulan Ini
                            </div>
                            <div id="graphd"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-1">
                <div class="p-6 border-t border-gray-200 md:border-t-0 md:border-1">
                    <div class="p-6">
                        <div class="rounded-md shadow">
                            <div class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 md:py-4 md:text-lg md:px-10">
                                Grafik Penjualan 6 Terakhhir
                            </div>
                            <div id="graph"></div>
                        </div>
                    </div>
                </div>
                
            </div>

            </div>
        </div>
    </div>
</x-app-layout>
