<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Admintbl extends Migration
{
    public function up()
    {
       $this->forge->addField([
            'id' => [
                'type'=>'INT',
                'auto_increment'=> true,
            ],
            'picture' =>[
                'type'=>'VARCHAR',
                'constraint'=>250,
                'default'=>NULL
            ],
            'name' =>[
                'type'=>'VARCHAR',
                'constraint'=>250,
                'default'=>NULL
            ],
            'email' =>[
                'type'=>'VARCHAR',
                'constraint'=>250,
                'default'=>NULL
            ],
            'phone' =>[
                'type'=>'INT',
                'constraint'=>10,
                'default'=>NULL
            ],
            'password' =>[
                'type'=>'VARCHAR',
                'constraint'=>250,
                'default'=>NULL
            ],
            'dob' =>[
                'type'=>'VARCHAR',
                'constraint'=>50,
                'default'=>NULL
            ],
            'gender' =>[
                'type'=>'VARCHAR',
                'constraint'=>10,
                'default'=>NULL
            ],
            'isloggedin' =>[
                'type'=>'VARCHAR',
                'constraint'=>1,
                'default'=>NULL
            ],
            'access' =>[
                'type'=>'VARCHAR',
                'constraint'=>100,
                'default'=>NULL
            ],
            'user_agent' =>[
                'type'=>'VARCHAR',
                'constraint'=>400,
                'default'=>NULL
            ],
            'created_at' =>[
                'type'=>'VARCHAR',
                'constraint'=>100,
                'default'=>NULL,
            ],
            'updated_at' =>[
                'type'=>'VARCHAR',
                'constraint'=>100,
                'default'=>NULL,
            ]
        ]);
        $this->forge->addKey('id',true);
        $this->forge->createTable('admin_tbl',true);
    }

    public function down()
    {
         $this->forge->dropTable('admin_tbl',true);
    }
}
