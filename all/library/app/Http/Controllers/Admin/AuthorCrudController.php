<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\AuthorRequest;
use App\Http\Requests\AuthorRequestUpdate;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class AuthorCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class AuthorCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Author::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/author');
        CRUD::setEntityNameStrings('author', 'authors');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        // CRUD::setFromDb(); // columns
		CRUD::column('profile_photo')->type('image');
		CRUD::column('civility');
		CRUD::column('lastname');
		CRUD::column('email');		

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']); 
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(AuthorRequest::class);

        // CRUD::setFromDb(); // fields
		
		CRUD::field('lastname');
		CRUD::field('email');
		CRUD::field('civility')->type('enum');
		// CRUD::field('profile_photo')->type('image');
		$this->crud->addField([
            'label' => "Avatar",
            'name' => "profile_photo",
            'type' => 'image',
            //'upload' => true,
            'crop' => true,
            'aspect_ratio' => 1, // omit or set to 0 to allow any aspect ratio
        ], 'both');

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number'])); 
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
		CRUD::setValidation(AuthorRequestUpdate::class);
        
		CRUD::field('lastname');
		CRUD::field('email');
		CRUD::field('civility')->type('enum');
		// CRUD::field('profile_photo')->type('image');
		$this->crud->addField([
            'label' => "Avatar",
            'name' => "profile_photo",
            'type' => 'image',
            //'upload' => true,
            'crop' => true,
            'aspect_ratio' => 1, // omit or set to 0 to allow any aspect ratio
        ], 'both');
    }
	
	protected function setupShowOperation()
    {
		$this->crud->set('show.setFromDb', false);
		
		CRUD::column('profile_photo')->type('image');
		CRUD::column('civility');
		CRUD::column('lastname');
		CRUD::column('email');	
	}
}
