<?php

namespace App\Server;

use function Symfony\Component\Translation\t;

class DataMock
{


    public function getStatus(){
        return [
            'result'=>true,
            'cpuUsage'=>40,
            'memoryUsage'=>77.5

        ];
    }
    public function raw_allStockInformation(){
        return [
            [
                'symbol'=>'ABC',
                'name'=>'AmerisourceBergen Corporation',
                'price'=>15,
                'status'=>'open'
            ],
            [
                'symbol'=>'ABCB',
                'name'=>'Ameris Bancorp',
                'price'=>39.1,
                'status'=>'open'


            ],
            [
                'symbol'=>'ABM',
                'name'=>'ABM Industries Incorporated',
                'price'=>88,
                'status'=>'open'


            ],
            [
                'symbol'=>'KAL',
                'name'=>'Kalera Public Limited Company',
                'price'=>18,
                'status'=>'close'


            ],
            [
                'symbol'=>'ML',
                'name'=>'MoneyLion Inc.',
                'price'=>44.2,
                'status'=>'open'


            ],
            [
                'symbol'=>'MLAB',
                'name'=>'Mesa Laboratories, Inc.',
                'price'=>1.256,
                'status'=>'close'


            ],
            [
                'symbol'=>'OMI',
                'name'=>'Owens & Minor, Inc.',
                'price'=>36.2,
                'status'=>'open'


            ],
        ];
    }
    public function marketIndexThisDay(){
        return [[
            '2023-02-19T01:30:00.000Z',
            '2023-02-19T02:30:00.000Z',
            '2023-02-19T03:30:00.000Z',
            '2023-02-19T04:30:00.000Z',
            '2023-02-19T05:30:00.000Z',
            '2023-02-19T06:30:00.000Z',
            '2023-02-19T07:30:00.000Z',
            '2023-02-19T08:30:00.000Z',
            '2023-02-19T09:30:00.000Z',
            '2023-02-19T10:30:00.000Z'
        ],[10,18,15,19,30,44,60,88,55,60]

        ];
    }
    public function marketIndexThisMonth(){
        return [[
            '2023-02-19T01:30:00.000Z',
            '2023-02-19T02:30:00.000Z',
            '2023-02-19T03:30:00.000Z',
            '2023-02-19T04:30:00.000Z',
            '2023-02-19T05:30:00.000Z',
            '2023-02-19T06:30:00.000Z',
            '2023-02-19T07:30:00.000Z',
            '2023-02-19T08:30:00.000Z',
            '2023-02-19T09:30:00.000Z',
            '2023-02-19T10:30:00.000Z'
        ],[10,18,15,19,30,44,60,88,55,60]

        ];
    }
    public function marketIndexThisYear(){
        return [[
            '2023-02-19T01:30:00.000Z',
            '2023-02-19T02:30:00.000Z',
            '2023-02-19T03:30:00.000Z',
            '2023-02-19T04:30:00.000Z',
            '2023-02-19T05:30:00.000Z',
            '2023-02-19T06:30:00.000Z',
            '2023-02-19T07:30:00.000Z',
            '2023-02-19T08:30:00.000Z',
            '2023-02-19T09:30:00.000Z',
            '2023-02-19T10:30:00.000Z'
        ],[10,18,15,19,30,44,60,88,55,60]

        ];
    }

    public function getStockInfo($stockName){
        return [
            'price' => rand(17,100),
            'price_percent'=>rand(1,10),
            'profit'=>rand(10,1000)/100.00,
            'profit_percent'=>rand(1,10),
            'holders'=>rand(1,1000),
            'holders_percent'=>rand(1,10),
            'data'=>
                '
[20, 34, 10, 38],
[15, 35, 30, 50],
[31, 38, 33, 44],
[38, 15, 5, 42],
[23, 34, 0, 38],
[40, 35, 60, 50],
[31, 3, 33, 44],
[38, 5, 5, 42],
[20, 34, 0, 38],
[4, 35, 30, 50]

                ',
            'date'=> "['00:00', '01:00', '01:30', '02:00', '02:30', '03:00', '03:30', '04:00', '04:30', '05:00' ]"








        ];
    }


}
