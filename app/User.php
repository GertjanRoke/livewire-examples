<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Sushi\Sushi;

class User extends Model
{
    use Sushi;

    protected $rows = [
        [
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
        ],
        [
            'name' => 'Jane Doe',
            'email' => 'janedoe@example.com',
        ],
        [
            'name' => 'Foo',
            'email' => 'foo@example.com',
        ],
        [
            'name' => 'Bar',
            'email' => 'bar@example.com',
        ],
        [
            'name' => 'Baz',
            'email' => 'baz@example.com',
        ],
    ];
}
