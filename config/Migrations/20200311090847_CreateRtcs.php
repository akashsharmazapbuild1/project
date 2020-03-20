<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateRtcs extends AbstractMigration
{
  
    public function change()
    {
        $table = $this->table('Rtcs')
              
               ->addColumn(' name', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
              ->addColumn('logo image', 'string', [
                'default' => null,
                'limit' => 255,
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
