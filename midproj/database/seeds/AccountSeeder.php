<?php

use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'user_id' => 1,
                'acct_name' => 'Calamba J. Manager CEO',
                'init_invest' => 99999,
                'start_date' => '2020-03-23',
                'remarks' => 'Done with normal transaction'
            ],
            [
                'user_id' => 2,
                'acct_name' => 'Montefalco J. Secretary',
                'init_invest' => 88888,
                'start_date' => '2020-05-23',
                'remarks' => 'Done with normal transaction'
            ],
            [
                'user_id' => 2,
                'acct_name' => 'Marcos J. President',
                'init_invest' => 77777,
                'start_date' => '2020-09-23',
                'remarks' => 'Done with normal transaction'
            ],
        ];

        foreach($data as $acc) {
            \App\Account::create($acc);
        }
    }
}
