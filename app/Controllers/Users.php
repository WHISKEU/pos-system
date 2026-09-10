<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index(): string
    {
        // Temporary data source
        $users = [
            [
                'username'  => 'admin01',
                'full_name' => 'Ana Villanueva',
                'role'      => 'Administrator'
            ],
            [
                'username'  => 'cashier01',
                'full_name' => 'Mark Bautista',
                'role'      => 'Cashier'
            ],
            [
                'username'  => 'cashier02',
                'full_name' => 'Liza Ramos',
                'role'      => 'Cashier'
            ],
            [
                'username'  => 'manager01',
                'full_name' => 'Paolo Flores',
                'role'      => 'Manager'
            ],
            [
                'username'  => 'staff01',
                'full_name' => 'Nina Castillo',
                'role'      => 'Inventory Staff'
            ]
        ];

        return view('users/index', [
            'users' => $users
        ]);
    }
}