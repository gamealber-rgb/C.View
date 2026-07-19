<?php

namespace Database\Seeders;

use App\Models\MenuItem;
use Illuminate\Database\Seeder;

class MenuItemSeeder extends Seeder
{
    public function run(): void
    {
        MenuItem::query()->delete();

        $cold = [
            ['7 Up', 'سفن آب', null, null],
            ['Cola', 'كولا', null, null],
            ['Mirinda Apple', 'ميرندا تفاح', null, null],
            ['Mirinda Orange', 'ميرندا برتقال', null, null],
            ['Iced Tea', 'آيس تي', null, null],
            ['Iced Coffee', 'آيس كوفي', null, null],
            [
                'Mojito',
                'موهيتو',
                'Classic · Blueberry · Peach · Strawberry · C View Special · Blue Hawaii',
                'كلاسيك · بلو بيري · دراق · فريز · سيفيو سبيشال · بلو هاواي',
            ],
            ['Iced 3-in-1', 'آيس 3ب1', null, null],
            ['Large Water', 'مياه كبيرة', null, null],
            ['Small Water', 'مياه صغيرة', null, null],
            ['Red Bull', 'ريد بول', null, null],
            ['Frezz', 'فريز', 'Available in all flavors', 'متوفر بجميع النكهات'],
            ['Barbican', 'باربيكان', 'Available in all flavors', 'متوفر بجميع النكهات'],
        ];

        $hot = [
            ['Tea', 'شاي', null, null],
            ['Boiled Coffee', 'قهوة غلي', null, null],
            ['Boiled Coffee with Cardamom', 'قهوة غلي هال', null, null],
            ['Espresso', 'اسبريسو', null, null],
            ['Cappuccino', 'كابتشينو', null, null],
            ['2-in-1', '2ب1', null, null],
            ['3-in-1', '3ب1', null, null],
            ['Milo', 'ميلو', null, null],
            ['Cumin & Lemon', 'كمون وليمون', null, null],
            ['Herbal Tea', 'زهورات', null, null],
        ];

        $alcohol = [
            ['Sex on the Beach', 'سكس أون ذا بيتش', null, null],
            [
                'Vodka',
                'فودكا',
                'Pomegranate · Pineapple · Blue Hawaii · Gryphon · Lemon',
                'رمان · أناناس · بلو هاواي · جريفون · ليمون',
            ],
            ['Beer', 'بيرة', null, null],
            ['Mexican Beer', 'بيرة مكسيكية', null, null],
            ['Bullfrog', 'بولفروغ', null, null],
            ['TGV', 'TGV', null, null],
            ['Margarita', 'مارغريتا', null, null],
            ['Yeager Bomb', 'ييجر بومب', null, null],
            ['Whiskey', 'ويسكي', null, null],
            ['Whiskey & Coke', 'ويسكي وكولا', null, null],
            ['Shots', 'شوتس', null, null],
            ['Gin', 'جين', null, null],
            ['Tequila', 'تكيلا', null, null],
            ['Gin & Tonic', 'جين وتونيك', null, null],
        ];

        foreach ($cold as $index => [$name, $nameAr, $desc, $descAr]) {
            MenuItem::create([
                'category' => 'cold',
                'name' => $name,
                'name_ar' => $nameAr,
                'description' => $desc,
                'description_ar' => $descAr,
                'price' => 0,
                'image' => 'images/menu/placeholder.svg',
                'is_available' => true,
                'sort_order' => $index + 1,
            ]);
        }

        foreach ($hot as $index => [$name, $nameAr, $desc, $descAr]) {
            MenuItem::create([
                'category' => 'hot',
                'name' => $name,
                'name_ar' => $nameAr,
                'description' => $desc,
                'description_ar' => $descAr,
                'price' => 0,
                'image' => 'images/menu/placeholder.svg',
                'is_available' => true,
                'sort_order' => $index + 1,
            ]);
        }

        foreach ($alcohol as $index => [$name, $nameAr, $desc, $descAr]) {
            MenuItem::create([
                'category' => 'alcohol',
                'name' => $name,
                'name_ar' => $nameAr,
                'description' => $desc,
                'description_ar' => $descAr,
                'price' => 0,
                'image' => 'images/menu/placeholder.svg',
                'is_available' => true,
                'sort_order' => $index + 1,
            ]);
        }
    }
}
