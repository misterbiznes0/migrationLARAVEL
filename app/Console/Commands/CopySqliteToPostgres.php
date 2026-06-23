<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use PDO;

class CopySqliteToPostgres extends Command
{
    protected $signature = 'db:copy-to-postgres';
    protected $description = 'Copy SQLite to PostgreSQL';

    public function handle(): int
    {
        $sqlite = new PDO('sqlite:' . database_path('database.sqlite'));

        $tables = [
            'users',
            'services',
            'appointments',
            'queue_tickets',
        ];

        foreach ($tables as $table) {
            $this->info("Копирую: $table");

            $rows = $sqlite->query("SELECT * FROM $table")->fetchAll(PDO::FETCH_ASSOC);

            DB::connection('pgsql_copy')->table($table)->delete();

            foreach ($rows as $row) {
                DB::connection('pgsql_copy')->table($table)->insert($row);
            }
        }

        $this->info('Готово!');

        return self::SUCCESS;
    }
}