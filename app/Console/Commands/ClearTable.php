<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ClearTable extends Command
{
    protected $signature = 'table:clear {table}';

    protected $description = 'Clear the specified table';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $table = $this->argument('table');
        if (in_array($table, ['todos', 'other_tables'])) {
            $this->info("Clearing the $table table...");
            Todo::truncate(); // Replace with your model and table name
            $this->info("Table $table has been cleared.");
        } else {
            $this->error("Table $table is not supported or does not exist.");
        }
    }
}
