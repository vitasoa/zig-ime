<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ContactRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ContactCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ContactCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Contact::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/contact');
        CRUD::setEntityNameStrings('contact', 'contacts');
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
		
		CRUD::column('photo')->type('image');
		CRUD::column('titre')->type('enum');
		CRUD::column('nom');
		CRUD::column('prenom');
		//CRUD::column('phone');
		CRUD::column('mobile');
		CRUD::column('job');
		CRUD::column('entreprise');
		CRUD::column('formation')->type('enum');
		CRUD::column('promotion');
		CRUD::column('domaines');
		CRUD::column('nationality');

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
        CRUD::setValidation(ContactRequest::class);

        // CRUD::setFromDb(); // fields
		
		CRUD::field('titre')->type('enum');
		CRUD::field('genre')->type('enum');
		CRUD::field('nom');
		CRUD::field('prenom');
		//CRUD::field('phone');
		CRUD::field('mobile');
		CRUD::field('adresse');
		CRUD::field('ville');
		CRUD::field('pays');
		CRUD::field('nationality');
		CRUD::field('job');
		CRUD::field('entreprise');
		CRUD::field('employer')->type('enum');
		CRUD::field('domaines');
		CRUD::field('formation')->type('enum');
		CRUD::field('promotion');
		CRUD::field('facebook');
		CRUD::field('twitter');
		CRUD::field('email');
		CRUD::field('siteweb');
		CRUD::field('notes');
		CRUD::field('share');
		
		$this->crud->addField([
            'label' => "Photo",
            'name' => "photo",
            'type' => 'image',
            //'upload' => true,
            'crop' => false,
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
        $this->setupCreateOperation();
    }
	
	protected function setupShowOperation()
    {
		$this->crud->set('show.setFromDb', false);
		
		CRUD::column('photo')->type('image');
		CRUD::column('photo')->type('image');
		CRUD::column('titre')->type('enum');
		CRUD::column('nom');
		CRUD::column('prenom');
		//CRUD::column('phone');
		CRUD::column('mobile');
		CRUD::column('adresse');
		CRUD::column('ville');
		CRUD::column('pays');
		CRUD::column('nationality');
		CRUD::column('job');
		CRUD::column('entreprise');
		CRUD::column('employer')->type('enum');
		CRUD::column('domaines');
		CRUD::column('formation')->type('enum');
		CRUD::column('promotion');	
	}
}
