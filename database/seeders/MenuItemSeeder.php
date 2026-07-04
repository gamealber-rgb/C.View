<?php

namespace Database\Seeders;

use App\Models\MenuItem;
use Illuminate\Database\Seeder;

class MenuItemSeeder extends Seeder
{
    public function run(): void
    {
        $food = [
            ['Coastal Breakfast Platter', 'طبق إفطار ساحلي', 'Eggs, smoked salmon, avocado toast, and fresh fruit.', 'بيض، سلمون مدخّن، توست أفوكado، وفواكه طازجة.', 18.50],
            ['Fish & Chips', 'سمك وبطاطا', 'Beer-battered local catch with hand-cut fries and tartar sauce.', 'صيد محلي مقلي بعجينة البيرة مع بطاطا مقطعة يدوياً وصلصة التارتار.', 22.00],
            ['Grilled Shrimp Tacos', 'تاكو ربيان مشوي', 'Three tacos with slaw, lime crema, and cilantro.', 'ثلاثة tacos مع سلطة، كريمة الليمون، والكزبرة.', 16.50],
            ['Caesar Salad', 'سلطة سيزر', 'Crisp romaine, parmesan, croutons, and house dressing.', 'خس رومaine مقرمش، بارمesan، croutons، وصلصة البيت.', 12.00],
            ['Club Sandwich', 'ساندwich club', 'Turkey, bacon, lettuce, tomato on toasted sourdough.', 'ديك رومي، bacon، خس، طماطم على خبز sourdough محمّص.', 14.50],
            ['Margherita Flatbread', 'فlatbread مارغريتا', 'Tomato, mozzarella, basil, and olive oil.', 'طماطم، موزارella، ريحان، وزيت زيتون.', 13.00],
            ['Beach Burger', 'برجر الشاطئ', 'Angus beef, cheddar, caramelized onions, brioche bun.', 'لحم Angus، cheddar، بصل مكرمل، خبز brioche.', 17.00],
            ['Coconut Curry Bowl', 'bowl كari جوز الهند', 'Seasonal vegetables, jasmine rice, coconut broth.', 'خضار موسمية، أرز jasmine، مرق جوز الهند.', 15.50],
            ['Kids Fish Fingers', 'أصابع سمك للأطفال', 'Served with fries and ketchup.', 'تُقدَّم مع بطاطا مقلية وكاتشب.', 9.00],
            ['Key Lime Pie', 'فطيرة الليمون', 'Tart Florida-style dessert with whipped cream.', 'حلوى على طريقة فلوريدا مع كريمة مخفوقة.', 8.00],
        ];

        $drinks = [
            ['Fresh Orange Juice', 'عصير برتقال طازج', 'Squeezed daily.', 'يُعصر يومياً.', 5.00],
            ['Iced Latte', 'لاتيه مثلّج', 'Espresso over ice with milk.', 'إسpresso على الثلج مع الحليب.', 5.50],
            ['Mango Smoothie', 'سموذي مانgo', 'Blended mango, yogurt, and honey.', 'مانgo، زبادي، وعسل.', 6.00],
            ['Sparkling Water', 'ماء فوار', 'Chilled mineral water.', 'ماء معدني مبرد.', 3.50],
            ['Craft IPA', 'IPA حرفي', 'Local brewery selection.', 'اختيار من مصنع الجعة المحلي.', 7.00],
            ['House Red Wine', 'نبيذ أحمر من البيت', 'Glass of coastal vineyard blend.', 'كأس من مزيج كروم ساحلية.', 8.00],
            ['Mojito', 'موهito', 'Rum, mint, lime, and soda.', 'روم، نعناع، ليمون، وصoda.', 9.00],
            ['Coconut Water', 'ماء جوز الهند', 'Straight from the shell.', 'مباشرة من القشرة.', 4.50],
        ];

        foreach ($food as $index => [$name, $nameAr, $desc, $descAr, $price]) {
            MenuItem::create([
                'category' => 'food',
                'name' => $name,
                'name_ar' => $nameAr,
                'description' => $desc,
                'description_ar' => $descAr,
                'price' => $price,
                'image' => 'images/menu/placeholder.svg',
                'is_available' => true,
                'sort_order' => $index + 1,
            ]);
        }

        foreach ($drinks as $index => [$name, $nameAr, $desc, $descAr, $price]) {
            MenuItem::create([
                'category' => 'drinks',
                'name' => $name,
                'name_ar' => $nameAr,
                'description' => $desc,
                'description_ar' => $descAr,
                'price' => $price,
                'image' => 'images/menu/placeholder.svg',
                'is_available' => true,
                'sort_order' => $index + 1,
            ]);
        }
    }
}
