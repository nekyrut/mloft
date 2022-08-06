<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'title'        => 'компьютерная и офисная мебель',
                'slug'         => Str::slug('компьютерная и офисная мебель'),
                'category_id'    => null,
            ],
            [
                'title'        => 'мягкая мебель',
                'slug'         => Str::slug( 'мягкая мебель'),
                'category_id'    => null,
            ],
            [
                'title'        => 'столы и стулья',
                'slug'         => Str::slug( 'столы и стулья'),
                'category_id'    => null,
            ],
            [
                'title'        => 'мебель для хранения',
                'slug'         => Str::slug( 'мебель для хранения'),
                'category_id'    => null,
            ],
            [
                'title'        => 'мебель для спальни',
                'slug'         => Str::slug( 'мебель для спальни'),
                'category_id'    => null,
            ],
            [
                'title'        => 'мебель для кухни',
                'slug'         => Str::slug( 'мебель для кухни'),
                'category_id'    => null,
            ],
            [
                'title'        => 'мебель для ванной',
                'slug'         => Str::slug( 'мебель для ванной'),
                'category_id'    => null,
            ],
            [
                'title'        => 'садовая мебель',
                'slug'         => Str::slug( 'садовая мебель'),
                'category_id'    => null,
            ],
            [
                'title'        => 'детская мебель',
                'slug'         => Str::slug( 'детская мебель'),
                'category_id'    => null,
            ],
            [
                'title'        => 'бескаркасная мебель',
                'slug'         => Str::slug( 'бескаркасная мебель'),
                'category_id'    => null,
            ],
            [
                'title'        => 'гарнитуры и комплекты',
                'slug'         => Str::slug( 'гарнитуры и комплекты'),
                'category_id'    => null,
            ],
            [
                'title'        => 'мебель для бизнеса',
                'slug'         => Str::slug( 'мебель для бизнеса'),
                'category_id'    => null,
            ],
            [
                'title'        => 'категории',
                'slug'         => Str::slug( 'категории'),
                'category_id'    => null,
            ],
            [
                'title'        => 'компьютерные и офисные кресла',
                'slug'         => Str::slug( 'компьютерные и офисные кресла'),
                'category_id'    => 1,
            ],
            [
                'title'        => 'компьютерные и письменные столы',
                'slug'         => Str::slug( 'компьютерные и письменные столы'),
                'category_id'    => 1,
            ],
            [
                'title'        => 'офисные тумбы',
                'slug'         => Str::slug( 'офисные тумбы'),
                'category_id'    => 1,
            ],
            [
                'title'        => 'офисные стулья',
                'slug'         => Str::slug( 'офисные стулья'),
                'category_id'    => 1,
            ],
            [
                'title'        => 'ортопедические стулья',
                'slug'         => Str::slug( 'ортопедические стулья'),
                'category_id'    => 1,
            ],
            [
                'title'        => 'подставки под ноги',
                'slug'         => Str::slug( 'подставки под ноги'),
                'category_id'    => 1,
            ],
            [
                'title'        => 'диваны',
                'slug'         => Str::slug( 'диваны'),
                'category_id'    => 2,
            ],
            [
                'title'        => 'кресла кресла_мешки',
                'slug'         => Str::slug( 'кресла кресла_мешки'),
                'category_id'    => 2,
            ],
            [
                'title'        => 'пуфики и банкетки',
                'slug'         => Str::slug( 'пуфики и банкетки'),
                'category_id'    => 2,
            ],
            [
                'title'        => 'кресла-качалки',
                'slug'         => Str::slug( 'кресла-качалки'),
                'category_id'    => 2,
            ],
            [
                'title'        => 'кухоные уголки',
                'slug'         => Str::slug( 'кухоные уголки'),
                'category_id'    => 2,
            ],
            [
                'title'        => 'комплекты мягкой мебели',
                'slug'         => Str::slug( 'комплекты мягкой мебели'),
                'category_id'    => 2,
            ],
            [
                'title'        => 'стулья',
                'slug'         => Str::slug( 'стулья'),
                'category_id'    => 3,
            ],
            [
                'title'        => 'барные и полубарные стулья',
                'slug'         => Str::slug( 'барные и полубарные стулья'),
                'category_id'    => 3,
            ],
            [
                'title'        => 'складные стулья',
                'slug'         => Str::slug( 'складные стулья'),
                'category_id'    => 3,
            ],
            [
                'title'        => 'обеденные группы',
                'slug'         => Str::slug( 'обеденные группы'),
                'category_id'    => 3,
            ],
            [
                'title'        => 'журнальные и приставные столы',
                'slug'         => Str::slug( 'журнальные и приставные столы'),
                'category_id'    => 3,
            ],
            [
                'title'        => 'туалетные столики и консоли',
                'slug'         => Str::slug( 'туалетные столики и консоли'),
                'category_id'    => 3,
            ],
            [
                'title'        => 'табуретки',
                'slug'         => Str::slug( 'табуретки'),
                'category_id'    => 3,
            ],
            [
                'title'        => 'комплектующие для столов и стульев',
                'slug'         => Str::slug( 'комплектующие для столов и стульев'),
                'category_id'    => 3,
            ],
            [
                'title'        => 'шкафы',
                'slug'         => Str::slug( 'шкафы'),
                'category_id'    => 4,
            ],
            [
                'title'        => 'комоды и тумбы',
                'slug'         => Str::slug( 'комоды и тумбы'),
                'category_id'    => 4,
            ],
            [
                'title'        => 'обувницы и вешалки',
                'slug'         => Str::slug( 'обувницы и вешалки'),
                'category_id'    => 4,
            ],
            [
                'title'        => 'полки и стеллажи',
                'slug'         => Str::slug( 'полки и стеллажи'),
                'category_id'    => 4,
            ],
            [
                'title'        => 'кровати',
                'slug'         => Str::slug( 'кровати'),
                'category_id'    => 5,
            ],
            [
                'title'        => 'матрасы',
                'slug'         => Str::slug( 'матрасы'),
                'category_id'    => 5,
            ],
            [
                'title'        => 'детские кровати',
                'slug'         => Str::slug( 'детские кровати'),
                'category_id'    => 5,
            ],
            [
                'title'        => 'раскладушки',
                'slug'         => Str::slug( 'раскладушки'),
                'category_id'    => 5,
            ],
            [
                'title'        => 'комплекты мебели для спальни',
                'slug'         => Str::slug( 'комплекты мебели для спальни'),
                'category_id'    => 5,
            ],
            [
                'title'        => 'прикроватные тумбы',
                'slug'         => Str::slug( 'прикроватные тумбы'),
                'category_id'    => 5,
            ],
            [
                'title'        => 'кухонные уголки',
                'slug'         => Str::slug( 'кухонные уголки'),
                'category_id'    => 6,
            ],
            [
                'title'        => 'кухонные гарнитуры',
                'slug'         => Str::slug( 'кухонные гарнитуры'),
                'category_id'    => 6,
            ],
            [
                'title'        => 'кухонные модули',
                'slug'         => Str::slug( 'кухонные модули'),
                'category_id'    => 6,
            ],
            [
                'title'        => 'фартуки для кухни',
                'slug'         => Str::slug( 'фартуки для кухни'),
                'category_id'    => 6,
            ],
            [
                'title'        => 'столешницы и комплектующие',
                'slug'         => Str::slug( 'столешницы и комплектующие'),
                'category_id'    => 6,
            ],
            [
                'title'        => 'комплекты',
                'slug'         => Str::slug( 'комплекты'),
                'category_id'    => 7,
            ],
            [
                'title'        => 'тумбы',
                'slug'         => Str::slug( 'тумбы'),
                'category_id'    => 7,
            ],
            [
                'title'        => 'шкафы и пеналы',
                'slug'         => Str::slug( 'шкафы и пеналы'),
                'category_id'    => 7,
            ],
            [
                'title'        => 'стулья и кресла',
                'slug'         => Str::slug( 'стулья и кресла'),
                'category_id'    => 8,
            ],
            [
                'title'        => 'садовые качели и аксессуары',
                'slug'         => Str::slug( 'садовые качели и аксессуары'),
                'category_id'    => 8,
            ],
            [
                'title'        => 'подвесные кресла',
                'slug'         => Str::slug( 'подвесные кресла'),
                'category_id'    => 8,
            ],
            [
                'title'        => 'комплекты садовой мебели',
                'slug'         => Str::slug( 'комплекты садовой мебели'),
                'category_id'    => 8,
            ],
            [
                'title'        => 'лежаки и шезлонги',
                'slug'         => Str::slug( 'лежаки и шезлонги'),
                'category_id'    => 8,
            ],
            [
                'title'        => 'скамейки',
                'slug'         => Str::slug( 'скамейки'),
                'category_id'    => 8,
            ],
            [
                'title'        => 'садовые и пляжные зонты',
                'slug'         => Str::slug( 'садовые и пляжные зонты'),
                'category_id'    => 8,
            ],
            [
                'title'        => 'тенты и шатры',
                'slug'         => Str::slug( 'тенты и шатры'),
                'category_id'    => 8,
            ],
            [
                'title'        => 'столы для сада',
                'slug'         => Str::slug( 'столы для сада'),
                'category_id'    => 8,
            ],
            [
                'title'        => 'диваны садовые',
                'slug'         => Str::slug( 'диваны садовые'),
                'category_id'    => 8,
            ],
            [
                'title'        => 'качели и гамаки',
                'slug'         => Str::slug( 'качели и гамаки'),
                'category_id'    => 8,
            ],
            [
                'title'        => 'сундуки садовые',
                'slug'         => Str::slug( 'сундуки садовые'),
                'category_id'    => 8,
            ],
            [
                'title'        => 'колыбели',
                'slug'         => Str::slug( 'колыбели'),
                'category_id'    => 9,
            ],
            [
                'title'        => 'парты и столы',
                'slug'         => Str::slug( 'парты и столы'),
                'category_id'    => 9,
            ],
            [
                'title'        => 'наборы детской мебели',
                'slug'         => Str::slug( 'наборы детской мебели'),
                'category_id'    => 9,
            ],
            [
                'title'        => 'стулья и табуреты',
                'slug'         => Str::slug( 'стулья и табуреты'),
                'category_id'    => 9,
            ],
            [
                'title'        => 'пеленальные комоды и столики',
                'slug'         => Str::slug( 'пеленальные комоды и столики'),
                'category_id'    => 9,
            ],
            [
                'title'        => 'бескаркасные диваны',
                'slug'         => Str::slug( 'бескаркасные диваны'),
                'category_id'    => 10,
            ],
            [
                'title'        => 'бескаркасные пуфы',
                'slug'         => Str::slug( 'бескаркасные пуфы'),
                'category_id'    => 10,
            ],
            [
                'title'        => 'кресла-мешки',
                'slug'         => Str::slug( 'кресла-мешки'),
                'category_id'    => 10,
            ],
            [
                'title'        => 'для гостиной',
                'slug'         => Str::slug( 'для гостиной'),
                'category_id'    => 11,
            ],
            [
                'title'        => 'для прихожей',
                'slug'         => Str::slug( 'для прихожей'),
                'category_id'    => 11,
            ],
            [
                'title'        => 'для спальни',
                'slug'         => Str::slug( 'для спальни'),
                'category_id'    => 11,
            ],
            [
                'title'        => 'мебельные модули',
                'slug'         => Str::slug( 'мебельные модули'),
                'category_id'    => 11,
            ],
            [
                'title'        => 'для торгового зала',
                'slug'         => Str::slug( 'для торгового зала'),
                'category_id'    => 12,
            ],
            [
                'title'        => 'для салонов красоты',
                'slug'         => Str::slug( 'для салонов красоты'),
                'category_id'    => 12,
            ],
            [
                'title'        => 'для тату-салона',
                'slug'         => Str::slug( 'для тату-салона'),
                'category_id'    => 12,
            ],
            [
                'title'        => 'для производства',
                'slug'         => Str::slug( 'для производства'),
                'category_id'    => 12,
            ],
            [
                'title'        => 'мебель для мероприятий',
                'slug'         => Str::slug( 'мебель для мероприятий'),
                'category_id'    => 12,
            ]
        ]);
    }
}
