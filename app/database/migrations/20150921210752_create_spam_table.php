<?php

use Phinx\Migration\AbstractMigration;

class CreateSpamTable extends AbstractMigration
{
	/**
	 * Change Method.
	 */
	public function change()
	{
		$table = $this->table('spam');
		$table->addColumn('user_id', 'integer')
			->addColumn('relate_type', 'enum', ['values' => ['guest', 'forum']])
			->addColumn('relate_id', 'integer')
			->addColumn('created_at', 'timestamp')
			->addIndex(['relate_type', 'relate_id'])
			->addIndex('created_at')
			->create();
	}
}
