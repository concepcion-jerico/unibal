<?php

use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('items')->delete();
        
        \DB::table('items')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Dell Inspiron 3000 11.3″ 2-in-1 Laptop',
                'serial_number' => 'BHYW-CM25-5P82-8R3F',
            'description' => '11.6″ HD (1366×768) LED Touchscreen Display; 7th Generation AMD A6-9220e Processor 2.5GHz (2.9GHz 1MB); 32GB eMMC Storage; 4GB RAM; Integrated Graphics; 1 x HDMI Port; 2 x USB 2.0 Port; 1 x USB 3.1 Port; Windows 10 Home',
                'image_path' => 'images/1548831667.jpg',
                'quantity' => 1,
                'created_at' => '2019-01-30 02:25:32',
                'updated_at' => '2019-02-01 03:35:44',
                'deleted_at' => NULL,
                'category_id' => 1,
                'status_id' => 2,
            ),
            1 => 
            array (
                'id' => 3,
                'name' => 'Apple MacBook Air 13″ laptop',
                'serial_number' => 'L8NJQN9MV6CAY2C2',
                'description' => 'Dual-core Intel Core i5 processor;

Intel HD Graphics 6000;

Fast SSD storage;

8GB of memory;

Two USB 3 ports;

Thunderbolt 2 port;

SDXC port;

Up to 12 hours of battery life*;

802.11ac Wi-Fi;

Multi-Touch trackpad',
                'image_path' => 'images/1548831685.jpg',
                'quantity' => 1,
                'created_at' => '2019-01-30 05:11:13',
                'updated_at' => '2019-02-04 01:32:15',
                'deleted_at' => NULL,
                'category_id' => 2,
                'status_id' => 3,
            ),
            2 => 
            array (
                'id' => 4,
                'name' => 'HP 14″ Laptop 64GB',
                'serial_number' => 'DFMXMBF5HVLSYMCT',
            'description' => '14.0″ HD BrightView WLED-backlit Display (1366×768);

AMD E2-9000E Dual Core Processor (1.5GHz-2.0GHz);

64GB eMMC Storage;

4GB DDR4L-1866 SDRAM (1 DIMM);

UMA Shared Graphics;

802.11 ac Wi-Fi  + Bluetooth v4.2;

Multi-format Card Reader;

1 x HDMI Port;

1 x USB 2.0 Port;

2 x USB 3.1 Ports;

Windows 10 Home',
                'image_path' => 'images/1548831694.jpg',
                'quantity' => 1,
                'created_at' => '2019-01-30 05:16:03',
                'updated_at' => '2019-02-01 04:49:20',
                'deleted_at' => NULL,
                'category_id' => 1,
                'status_id' => 3,
            ),
            3 => 
            array (
                'id' => 5,
                'name' => 'Acer 14″ Chromebook',
                'serial_number' => 'WK7ULUYZJ7BGJTQL',
            'description' => '14″ Full HD Screen (1920×1080);

Intel Celeron N3160 Quad Core Processor 1.6GHz (2.24GHz 2MB L2);

4GB RAM;

32GB eMMC Storage;

Onboard Graphics;

Webcam;

802.11ac WiFi + Bluetooth;

1 x HDMI Port;

2 x USB 3.0 Ports;',
                'image_path' => 'images/1548831704.jpg',
                'quantity' => 1,
                'created_at' => '2019-01-30 05:17:34',
                'updated_at' => '2019-01-31 05:56:04',
                'deleted_at' => NULL,
                'category_id' => 1,
                'status_id' => 3,
            ),
            4 => 
            array (
                'id' => 6,
                'name' => 'Asus Vivobook 15.6″ HD Laptop',
                'serial_number' => '8BLDU76RT4E69WS7',
                'description' => '15.6″ HD Display

Intel® Pentium® Gold 4415U Processor (2.3GHz, 2MB Cache)

1TB HDD Storage

4GB RAM

Intel® UHD Graphics 610

Webcam + MicroSD Card Reader

802.11ac Wi-Fi + Bluetooth v4.1

1 x HDMI Port

1 x USB C Port

2 x USB 2.0 Ports

1 x USB 3.0 Port

Windows 10 Home',
                'image_path' => 'images/1548831714.jpg',
                'quantity' => 1,
                'created_at' => '2019-01-30 05:18:33',
                'updated_at' => '2019-02-01 03:31:04',
                'deleted_at' => NULL,
                'category_id' => 1,
                'status_id' => 2,
            ),
            5 => 
            array (
                'id' => 7,
                'name' => 'Lenovo Ideapad 10″ 2-in-1 Laptop',
                'serial_number' => 'QN9HP4XCB92594HA',
                'description' => '10″ 2-in-1 touchscreen display;

1366 x 768 HD resolution;

Intel Core Celeron (1.10GHz – 2.60GHz);

4GB RAM;

32GB storage;

2 x USB;

1 x USB-C;

Micro SD card reader;

Wi-fi 802.11 a',
                'image_path' => 'images/1548831724.jpg',
                'quantity' => 1,
                'created_at' => '2019-01-30 05:19:27',
                'updated_at' => '2019-01-31 05:56:06',
                'deleted_at' => NULL,
                'category_id' => 1,
                'status_id' => 3,
            ),
            6 => 
            array (
                'id' => 8,
                'name' => '15.6″ Dell Inspiron Laptop 3000',
                'serial_number' => 'XG7LA6VWFFWH5GJW',
            'description' => '15.6” HD (1366 x 768) Anti-Glare LED Backlit Display;

Intel® Pentium® Silver N5000 Processor (4M Cache, up to 2.7 GHz);

1TB HDD Storage;

8GB RAM;

Intel UHD Graphics 605 with shared graphics memory;

802.11ac Wi-Fi + Bluetooth;

2 x USB 3.1 Ports;

1 x USB;

1 x HDMI;

SD Card Reader;

Tray Load DVD Drive;

Windows 10',
                'image_path' => 'images/1548831788.jpg',
                'quantity' => 1,
                'created_at' => '2019-01-30 05:20:48',
                'updated_at' => '2019-02-04 01:35:43',
                'deleted_at' => NULL,
                'category_id' => 1,
                'status_id' => 3,
            ),
            7 => 
            array (
                'id' => 9,
                'name' => 'MacBook Pro 15 Retina',
                'serial_number' => 'A855L5A3GJHNUNF3',
                'description' => 'CPU: Intel i7 2.5GHz;

Memory: 16GB RAM;

Hard Drive: 512GB SSD Drive;

Display: 15.4";',
                'image_path' => 'images/1548831780.jpeg',
                'quantity' => 1,
                'created_at' => '2019-01-30 05:25:38',
                'updated_at' => '2019-01-30 07:03:00',
                'deleted_at' => NULL,
                'category_id' => 2,
                'status_id' => 3,
            ),
            8 => 
            array (
                'id' => 10,
                'name' => 'MacBook Pro 13 2.9GHz i7 16GB',
                'serial_number' => 'XA8WUZYC9K7KRVWC',
            'description' => '13.3-inch LED-backlit glossy widescreen TFT display, 1280x800 resolution; 2.9GHz dual-core Intel Core i7 processor; 8.0GB (2x4.0GB) PC3-12800 (1600MHz) DDR3L SO-DIMM upgradeable to 16.0GB; 750GB Serial ATA hard disk drive @ 5400RPM; Intel HD Graphics 4000 with 384MB of DDR3 SDRAM shared with main memory; AirPort Extreme wireless card (802.11n); Bluetooth 4.0',
                'image_path' => 'images/1548831770.jpeg',
                'quantity' => 1,
                'created_at' => '2019-01-30 05:40:07',
                'updated_at' => '2019-01-30 07:02:50',
                'deleted_at' => NULL,
                'category_id' => 2,
                'status_id' => 3,
            ),
        ));
        
        
    }
}