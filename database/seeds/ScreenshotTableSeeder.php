<?php

use Illuminate\Database\Seeder;
use App\Models\Screenshot;

class ScreenshotTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            [
                'title' => 'Mario smash',
                'subtitle' => 'Super Mario',
                'description' => 'A digital publishing innovator,
                                    Issuu is the only platform loved
                                    by marketers and creatives',
                'game_id' => 1,
                'screenshot' => 'mariosmashjpeg',
            ],
            [
                'title' => 'Mario amazing',
                'subtitle' => 'Eita Mario',
                'description' => 'A digital publishing innovator,
                                    Issuu is the only platform loved
                                    by marketers and creatives',
                'game_id' => 1,
                'screenshot' => 'marioamazingjpeg',
            ],
            [
                'title' => 'Mario extreme',
                'subtitle' => 'Corre Mario',
                'description' => 'A digital publishing innovator,
                                    Issuu is the only platform loved
                                    by marketers and creatives',
                'game_id' => 1,
                'screenshot' => 'marioextremejpeg',
            ],
        );

        Screenshot::insert($data);
    }
}
