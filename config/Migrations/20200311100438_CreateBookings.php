<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateBookings extends AbstractMigration
{
    
    public function change()
    {
       $this->table('Bookings')
         
            ->addColumn('Users_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('Buses_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('date', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn(' status', 'integer', [
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
