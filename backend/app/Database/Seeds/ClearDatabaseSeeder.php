<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ClearDatabaseSeeder extends Seeder
{
    public function run()
    {
        $db = \Config\Database::connect();

        // List all tables you want to clear
        $tablesInOrder = ['users'];

        // Disable FK checks to avoid foreign key constraint issues
        $db->disableForeignKeyChecks();

        try {
            // Truncate tables in the specified order
            foreach ($tablesInOrder as $table) {
                if (method_exists($db, 'tableExists') && $db->tableExists($table)) {
                    $db->table($table)->truncate();
                }
            }
        } finally {
            // Ensure FK checks are re-enabled even if an error occurs
            $db->enableForeignKeyChecks();
        }
    }
}
