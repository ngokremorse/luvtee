<div>
    <?php
    global $pdpRepo;
    $productTraffic = $pdpRepo->get_product_dashboard_traffic_today(2, 10);
    $productIds  = array_map(function($product) {return $product->productId;}, $productTraffic);
    $nameMaps = $pdpRepo->get_product_names($productIds);
    if (!empty($productTraffic)) {
        foreach ($productTraffic as $row) {

        }
    }
    var_dump($nameMaps);

    

    ?>
    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Campaign
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Created
                    </th>
                    <th scope="col" class="px-6 py-3">
                        ViewContent
                    </th>
                    <th scope="col" class="px-6 py-3">
                        ATC
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Checkout
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Orders
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Items
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                       <a href="product/"> Enjoy The Little Things In Life</a>
                    </th>
                    <td class="px-6 py-4">
                        02/09/2024
                    </td>
                    <td class="px-6 py-4">
                        4
                    </td>
                    <td class="px-6 py-4">
                        2
                    </td>
                    <td class="px-6 py-4">
                        2
                    </td>
                    <td class="px-6 py-4">
                        2
                    </td>
                    <td class="px-6 py-4">
                        2
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

</div>