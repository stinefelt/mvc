<?php
namespace Migration;

defined('FCPATH') or die("Direct script access not allowed!");

// Class Test
class Test extends Migration
{
    public function up()
    {
        $this->addColumn('id INT unsigned NOT NULL AUTO_INCREMENT');
        $this->addColumn('f_name varchar(255) NOT NULL');
        $this->addColumn('l_name varchar(255) NOT NULL');
        $this->addColumn('date_created datetime NOT NULL DEFAULT CURRENT_TIMESTAMP');

        $this->addPrimaryKey('id');
        $this->createTable("test");

         // to seed data:
         $this->addData([
          'f_name' => 'Charlie',
          'l_name' => 'Stinefelt'
         ]);

         $this->insert("test");
    }

    public function down()
    {
        $this->dropTable("test");
    }
}