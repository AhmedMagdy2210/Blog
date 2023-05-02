<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class AuthCommand extends Command {
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'auth:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle() {
        User::create([
            'name' => 'Ahmed Magdy',
            'email' => 'ahmed22102002@gmail.com',
            'rule' => 'admin',
            'password' => Hash::make('123123'),

        ]);
        $this->info('User created Successfully');
        return true;
    }
}
