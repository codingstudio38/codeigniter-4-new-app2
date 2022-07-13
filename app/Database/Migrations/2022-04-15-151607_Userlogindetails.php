<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Userlogindetails extends Migration
{
    public function up()
    {
       $this->forge->addField([
            'id' => [
                'type'=>'INT',
                'auto_increment'=> true,
            ],
            'login_id' =>[
                'type'=>'INT',
                'constraint'=>10,
                'default'=>NULL
            ],
            'logintime' =>[
                'type'=>'VARCHAR',
                'constraint'=>250,
                'default'=>NULL
            ],
            'logouttime' =>[
                'type'=>'VARCHAR',
                'constraint'=>250,
                'default'=>NULL
            ],
            'system' =>[
                'type'=>'VARCHAR',
                'constraint'=>350,
                'default'=>NULL
            ],
            'created_at' =>[
                'type'=>'TIMESTAMP',
                 null => true,
            ]
        ]);
        $this->forge->addKey('id',true);
        $this->forge->createTable('user_login_details',true);
    }

    public function down()
    {
        $this->forge->dropTable('user_login_details',true);
    }
}
