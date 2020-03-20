<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateBuses extends AbstractMigration
{
  
    public function change()
    {    
          $this->table('Buses')
           
            ->addColumn('Rtcs_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('category_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 200,
                'null' => false,
            ])
            ->addColumn('bus number', 'string', [
                'default' => null,
                'limit' => 200,
                'null' => false,
            ])
            ->addColumn('total seat', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('status', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('created at', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('updated at', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
             
            ->create();
    }
}
