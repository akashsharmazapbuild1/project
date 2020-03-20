<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateDrivers extends AbstractMigration
{
   
    public function change()
    {
        
          $this->table('Drivers')
          
            ->addColumn('Buses_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('Routes_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            
            ->addColumn('contact no', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
                
            ->create();

    }
}
