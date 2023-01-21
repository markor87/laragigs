<?php
namespace App\Models;

class Listing {
    public static function all() {
        return [
            [
                'id' => 1,
                'title' => 'Listing one',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid beatae cupiditate delectus deleniti dignissimos doloremque hic ipsum magnam, molestiae natus nostrum obcaecati odio possimus qui quibusdam ratione temporibus totam, voluptate!'

            ],
            [
                'id' => 2,
                'title' => 'Listing two',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid beatae cupiditate delectus deleniti dignissimos doloremque hic ipsum magnam, molestiae natus nostrum obcaecati odio possimus qui quibusdam ratione temporibus totam, voluptate!'
            ]
        ];
    }

    public static function find($id) {
        $listings = self::all();

        foreach ($listings as $listing) {
            if ($listing['id'] == $id)
                return $listing;
        }
    }
}
