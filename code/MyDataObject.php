<?php

class MyDataObject extends DataObject implements PermissionProvider {
	private static $db = array(
	
	);


	public function getCMSFields() {
		$fields = parent::getCMSFields();

		return $fields;
	}


	public function canView($member = null) {
		return Permission::check('MODULE_VIEW');
	}

	public function canEdit($member = null) {
		return Permission::check('MODULE_EDIT');
	}

	public function canDelete($member = null) {
		return Permission::check('MODULE_DELETE');
	}

	public function canCreate($member = null) {
		return Permission::check('MODULE_CREATE');
	}

	
	/**
	 * Get an array of {@link Permission} definitions that this object supports
	 *
	 * @return array
	 */
	public function providePermissions() {
		return array(
			'MODULE_VIEW' => array(
				'name' => 'View module admin',
				'category' => 'Module',
			),
			'MODULE_EDIT' => array(
				'name' => 'Edit mymodule items',
				'category' => 'Module',
			),
			'MODULE_DELETE' => array(
				'name' => 'Delete mymodule items',
				'category' => 'Module',
			),
			'MODULE_CREATE' => array(
				'name' => 'Create mymodule items',
				'category' => 'Module'
			)
		);
	}

}
