<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class AdminPasswordCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'admin:password {email? : Email admin yang ingin diubah} {--password= : Password baru}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Ubah atau reset password akun admin dengan aman';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $email = $this->argument('email') ?: $this->ask('Masukkan email admin', 'thayyibaiibs@gmail.com');

        $user = User::where('email', $email)->first();

        if (!$user) {
            $this->error("User dengan email '{$email}' tidak ditemukan.");
            if ($this->confirm('Apakah ingin membuat akun admin ini sekarang?', true)) {
                $name = $this->ask('Nama admin', 'Admin Thayyiba');
                $password = $this->option('password') ?: $this->secret('Masukkan password baru');
                
                $user = User::create([
                    'name' => $name,
                    'email' => $email,
                    'password' => Hash::make($password),
                ]);
                $this->info("Akun admin '{$email}' berhasil dibuat!");
                return self::SUCCESS;
            }
            return self::FAILURE;
        }

        $password = $this->option('password') ?: $this->secret('Masukkan password baru');

        if (empty($password)) {
            $this->error('Password tidak boleh kosong.');
            return self::FAILURE;
        }

        $user->password = Hash::make($password);
        $user->save();

        $this->info("Password untuk admin '{$email}' berhasil diperbarui!");
        return self::SUCCESS;
    }
}
