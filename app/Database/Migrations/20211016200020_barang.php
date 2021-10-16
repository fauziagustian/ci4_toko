<?php

namespace App\Database\Migrations;

class Barang extends \CodeIgniter\Database\Migration
{

    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'stok' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'harga' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'gambar' => [
                'type' => 'TEXT',
                'NULL' => true,
            ],
            'created_by' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'created_date' => [
                'type' => 'DATETIME',
            ],
            'updated_by' => [
                'type' => 'INT',
                'constraint' => 11,
                'NULL' => true,
            ],
            'updated_date' => [
                'type' => 'DATETIME',
                'NULL' => true,
            ],
        ]);
        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('barang');
    }

    public function down()
    {
        $this->forge->dropTable('barang');
    }
}
