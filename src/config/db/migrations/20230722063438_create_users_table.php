<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateUsersTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change(): void
    {
        $table = $this->table('users',['id'=>false,'primary_key'=>['users_id']]);
        $table->addColumn('users_id','integer',['identity' => true])
            ->addColumn('username','string',['limit'=>250])
            ->addColumn('password','string')
            ->addColumn('status','enum',['values'=>['active','inactive']])
            ->create();           
    }
}