<?php

use Illuminate\Database\Seeder;

class SeederProMax extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \Illuminate\Support\Facades\DB::table('products')->insert([
            [
            'NamePrd' => 'Đồ chơi siêu nhân',
            'PricePrd' => '10000'
            ],
            [
                'NamePrd' => 'Đồ chơi máy bay',
                'PricePrd' => '12000'
            ],
            [
                'NamePrd' => 'Đồ chơi bút vẽ',
                'PricePrd' => '14000'
            ],

            [
                'NamePrd' => 'Đồ chơi bảng chữ cái',
                'PricePrd' => '15000'
            ],

            [
                'NamePrd' => 'Đồ chơi trí tuệ',
                'PricePrd' => '13000'
            ],

            [
                'NamePrd' => 'Đồ chơi xếp hình',
                'PricePrd' => '12000'
            ],

            [
                'NamePrd' => 'Đồ chơi máy bong bóng',
                'PricePrd' => '1000'
            ],

            [
                'NamePrd' => 'Đồ chơi máy xúc ',
                'PricePrd' => '17000'
            ],

            [
                'NamePrd' => 'Đồ chơi ô tô',
                'PricePrd' => '18000'
            ],
            [
                'NamePrd' => 'Đồ chơi điều khiển',
                'PricePrd' => '20000'
            ]
        ]);
        \Illuminate\Support\Facades\DB::table('customers')->insert([
            [

                'NameCus' => 'Đặng Văn Long',
                'AddressCus' => 'Thanh Hóa'
            ],

            [
                'NameCus' => 'Đặng Văn Tuấn',
                'AddressCus' => 'Thanh Hóa'
            ],

            [
                'NameCus' => 'Đặng Văn Tình',
                'AddressCus' => 'Thanh Hóa'
            ],

            [
                'NameCus' => 'Đặng Văn Anh',
                'AddressCus' => 'Thanh Hóa'
            ],

            [
                'NameCus' => 'Đặng Văn Thắng',
                'AddressCus' => 'Thanh Hóa'
            ],
        ]);
        \Illuminate\Support\Facades\DB::table('orders')->insert([
            [
                'CreateAtOrd' => '29/06/2021',
                'CustomerId' => '0'
            ],
            [
                'CreateAtOrd' => '28/06/2021',
                'CustomerId' => '1'
            ],
            [
                'CreateAtOrd' => '27/06/2021',
                'CustomerId' => '2'
            ],
            [
                'CreateAtOrd' => '26/06/2021',
                'CustomerId' => '3'
            ],
            [
                'CreateAtOrd' => '25/06/2021',
                'CustomerId' => '4'
            ],
            [
                'CreateAtOrd' => '24/06/2021',
                'CustomerId' => '5'
            ],
            [
                'CreateAtOrd' => '23/06/2021',
                'CustomerId' => '6'
            ],
            [
                'CreateAtOrd' => '22/06/2021',
                'CustomerId' => '7'
            ],
            [
                'CreateAtOrd' => '21/06/2021',
                'CustomerId' => '8'
            ],
            [
                'CreateAtOrd' => '20/06/2021',
                'CustomerId' => '9'
            ],


        ]);
        \Illuminate\Support\Facades\DB::table('order_details')->insert([
            [
                'OrderId' => '0',
                'ProductId' => '10',
                'Amount' => '10',
                'Quantity' => '2',

            ],
            [
                'OrderId' => '1',
                'ProductId' => '9',
                'Amount' => '10',
                'Quantity' => '1',

            ],
            [
                'OrderId' => '2',
                'ProductId' => '8',
                'Amount' => '10',
                'Quantity' => '1',

            ],
            [
                'OrderId' => '3',
                'ProductId' => '7',
                'Amount' => '10',
                'Quantity' => '3',

            ],
            [
                'OrderId' => '4',
                'ProductId' => '6',
                'Amount' => '9',
                'Quantity' => '2',

            ],
            [
                'OrderId' => '5',
                'ProductId' => '5',
                'Amount' => '4',
                'Quantity' => '3',

            ],
            [
                'OrderId' => '6',
                'ProductId' => '4',
                'Amount' => '2',
                'Quantity' => '1',

            ],
            [
                'OrderId' => '7',
                'ProductId' => '3',
                'Amount' => '2',
                'Quantity' => '3',

            ],
            [
                'OrderId' => '8',
                'ProductId' => '2',
                'Amount' => '2',
                'Quantity' => '3',

            ],
            [
                'OrderId' => '9',
                'ProductId' => '1',
                'Amount' => '1',
                'Quantity' => '3',

            ],
            [
                'OrderId' => '0',
                'ProductId' => '9',
                'Amount' => '10',
                'Quantity' => '10',

            ],
            [
                'OrderId' => '1',
                'ProductId' => '8',
                'Amount' => '20',
                'Quantity' => '30',

            ],
            [
                'OrderId' => '2',
                'ProductId' => '7',
                'Amount' => '3',
                'Quantity' => '4',

            ],
            [
                'OrderId' => '3',
                'ProductId' => '6',
                'Amount' => '2',
                'Quantity' => '3',

            ],
            [
                'OrderId' => '4',
                'ProductId' => '5',
                'Amount' => '10',
                'Quantity' => '10',

            ],
            [
                'OrderId' => '5',
                'ProductId' => '4',
                'Amount' => '2',
                'Quantity' => '2',

            ],
            [
                'OrderId' => '6',
                'ProductId' => '3',
                'Amount' => '10',
                'Quantity' => '10',

            ],
            [
                'OrderId' => '7',
                'ProductId' => '2',
                'Amount' => '10',
                'Quantity' => '10',

            ],
            [
                'OrderId' => '8',
                'ProductId' => '1',
                'Amount' => '10',
                'Quantity' => '10',

            ],
            [
                'OrderId' => '9',
                'ProductId' => '1',
                'Amount' => '10',
                'Quantity' => '30',

            ],
            [
                'OrderId' => '7',
                'ProductId' => '2',
                'Amount' => '10',
                'Quantity' => '10',

            ],
            [
                'OrderId' => '2',
                'ProductId' => '1',
                'Amount' => '10',
                'Quantity' => '30',

            ],
            [
                'OrderId' => '2',
                'ProductId' => '3',
                'Amount' => '10',
                'Quantity' => '30',

            ],
            [
                'OrderId' => '9',
                'ProductId' => '3',
                'Amount' => '10',
                'Quantity' => '30',

            ],
            [
                'OrderId' => '6',
                'ProductId' => '4',
                'Amount' => '20',
                'Quantity' => '40',

            ],
            [
                'OrderId' => '4',
                'ProductId' => '1',
                'Amount' => '10',
                'Quantity' => '10',

            ],
            [
                'OrderId' => '8',
                'ProductId' => '3',
                'Amount' => '10',
                'Quantity' => '30',

            ],
            [
                'OrderId' => '8',
                'ProductId' => '9',
                'Amount' => '20',
                'Quantity' => '40',

            ],
            [
                'OrderId' => '6',
                'ProductId' => '2',
                'Amount' => '20',
                'Quantity' => '30',

            ],
            [
                'OrderId' => '6',
                'ProductId' => '5',
                'Amount' => '10',
                'Quantity' => '30',

            ],
        ]);    }
}
