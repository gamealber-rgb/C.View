<?php

namespace Database\Seeders;

use App\Models\Room;
use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    public function run(): void
    {
        Room::query()->delete();

        $amenitySets = [
            [
                'en' => ['WiFi', 'AC', 'Sea View', 'Mini Fridge'],
                'ar' => ['واي فاي', 'تكييف', 'إطلالة بحرية', 'ثلاجة صغيرة'],
            ],
            [
                'en' => ['WiFi', 'AC', 'Balcony', 'Coffee Maker'],
                'ar' => ['واي فاي', 'تكييف', 'شرفة', 'صانعة قهوة'],
            ],
            [
                'en' => ['WiFi', 'AC', 'Sea View', 'Smart TV'],
                'ar' => ['واي فاي', 'تكييف', 'إطلالة بحرية', 'تلفاز ذكي'],
            ],
            [
                'en' => ['WiFi', 'AC', 'Garden View', 'Desk'],
                'ar' => ['واي فاي', 'تكييف', 'إطلالة على الحديقة', 'مكتب'],
            ],
            [
                'en' => ['WiFi', 'AC', 'Sea View', 'Living Area', 'Mini Bar'],
                'ar' => ['واي فاي', 'تكييف', 'إطلالة بحرية', 'صالة جلوس', 'ميني بار'],
            ],
        ];

        $rooms = [
            [
                'number' => '101',
                'floor' => 1,
                'name' => 'shababeek 1',
                'name_ar' => 'shababeek 1',
                'bed' => 'Twin',
                'bed_ar' => 'سريران توأم',
                'capacity' => 2,
                'price' => 109.00,
                'sort_order' => 1,
            ],
            [
                'number' => '102',
                'floor' => 1,
                'name' => 'shababeek a',
                'name_ar' => 'shababeek a',
                'bed' => 'Queen',
                'bed_ar' => 'سرير Queen',
                'capacity' => 2,
                'price' => 129.00,
                'sort_order' => 2,
            ],
            [
                'number' => '103',
                'floor' => 1,
                'name' => 'Silent room',
                'name_ar' => 'Silent room',
                'bed' => 'Queen',
                'bed_ar' => 'سرير Queen',
                'capacity' => 2,
                'price' => 119.00,
                'sort_order' => 3,
            ],
            [
                'number' => '201',
                'floor' => 2,
                'name' => 'Sea room 1',
                'name_ar' => 'Sea room 1',
                'bed' => 'Queen',
                'bed_ar' => 'سرير Queen',
                'capacity' => 2,
                'price' => 129.00,
                'sort_order' => 4,
            ],
            [
                'number' => '202',
                'floor' => 2,
                'name' => 'Sea room a',
                'name_ar' => 'Sea room a',
                'bed' => 'Queen',
                'bed_ar' => 'سرير Queen',
                'capacity' => 2,
                'price' => 99.00,
                'sort_order' => 5,
            ],
            [
                'number' => '301',
                'floor' => 3,
                'name' => 'Relaxation room',
                'name_ar' => 'Relaxation room',
                'bed' => 'Twin',
                'bed_ar' => 'سريران توأم',
                'capacity' => 2,
                'price' => 109.00,
                'sort_order' => 6,
            ],
            [
                'number' => '302',
                'floor' => 3,
                'name' => 'Sea suite 1',
                'name_ar' => 'Sea suite 1',
                'bed' => 'Queen',
                'bed_ar' => 'سرير Queen',
                'capacity' => 2,
                'price' => 119.00,
                'sort_order' => 7,
            ],
            [
                'number' => '303',
                'floor' => 3,
                'name' => 'Sea suite a',
                'name_ar' => 'Sea suite a',
                'bed' => 'Queen',
                'bed_ar' => 'سرير Queen',
                'capacity' => 2,
                'price' => 129.00,
                'sort_order' => 8,
            ],
            [
                'number' => '401',
                'floor' => 4,
                'name' => 'Honeymoon suite',
                'name_ar' => 'Honeymoon suite',
                'bed' => 'King',
                'bed_ar' => 'سرير King',
                'capacity' => 4,
                'price' => 189.00,
                'sort_order' => 9,
            ],
            [
                'number' => '402',
                'floor' => 4,
                'name' => 'Sky room',
                'name_ar' => 'Sky room',
                'bed' => 'King',
                'bed_ar' => 'سرير King',
                'capacity' => 4,
                'price' => 209.00,
                'sort_order' => 10,
            ],
        ];

        foreach ($rooms as $index => $room) {
            $amenities = $amenitySets[$room['floor'] === 4 ? 4 : ($index % 4)];

            $images = match ($room['number']) {
                '101' => [
                    'images/rooms/101-1.jpg',
                    'images/rooms/101-2.jpg',
                    'images/rooms/101-3.jpg',
                ],
                '102' => [
                    'images/rooms/102-1.jpg',
                    'images/rooms/102-2.jpg',
                    'images/rooms/102-3.jpg',
                ],
                '103' => [
                    'images/rooms/103-1.jpg',
                    'images/rooms/103-2.jpg',
                    'images/rooms/103-3.jpg',
                ],
                '201' => [
                    'images/rooms/201-1.jpg',
                    'images/rooms/201-2.jpg',
                    'images/rooms/201-3.jpg',
                ],
                '202' => [
                    'images/rooms/202-1.jpg',
                    'images/rooms/202-2.jpg',
                    'images/rooms/202-3.jpg',
                ],
                '301' => [
                    'images/rooms/301-1.jpg',
                    'images/rooms/301-2.jpg',
                    'images/rooms/301-3.jpg',
                ],
                '302' => [
                    'images/rooms/302-1.jpg',
                    'images/rooms/302-2.jpg',
                    'images/rooms/302-3.jpg',
                ],
                '303' => [
                    'images/rooms/303-1.jpg',
                    'images/rooms/303-2.jpg',
                    'images/rooms/303-3.jpg',
                ],
                '401' => [
                    'images/rooms/401-1.jpg',
                    'images/rooms/401-2.jpg',
                    'images/rooms/401-3.jpg',
                    'images/rooms/401-4.jpg',
                    'images/rooms/401-5.jpg',
                    'images/rooms/401-6.jpg',
                ],
                '402' => [
                    'images/rooms/402-1.jpg',
                    'images/rooms/402-2.jpg',
                    'images/rooms/402-3.jpg',
                ],
                default => [
                    'images/rooms/placeholder.svg',
                    'images/rooms/placeholder.svg',
                    'images/rooms/placeholder.svg',
                ],
            };

            Room::create([
                'number' => $room['number'],
                'floor' => $room['floor'],
                'name' => $room['name'],
                'name_ar' => $room['name_ar'],
                'description' => 'A comfortable '.$room['name'].' (Room '.$room['number'].'), designed with a minimalist coastal aesthetic. Wake up to soft natural light and the calming atmosphere of our seaside motel.',
                'description_ar' => $room['name_ar'].' مريحة (غرفة '.$room['number'].')، بتصميم ساحلي بسيط. استيقظ على ضوء طبيعي ناعم وأجواء ملاذنا الهادئة على البحر.',
                'price_per_night' => $room['price'],
                'capacity' => $room['capacity'],
                'bed_type' => $room['bed'],
                'bed_type_ar' => $room['bed_ar'],
                'amenities' => $amenities['en'],
                'amenities_ar' => $amenities['ar'],
                'images' => $images,
                'is_available' => true,
                'sort_order' => $room['sort_order'],
            ]);
        }
    }
}
