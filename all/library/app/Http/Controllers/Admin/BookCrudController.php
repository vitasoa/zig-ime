<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\BookRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class BookCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class BookCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Book::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/book');
        CRUD::setEntityNameStrings('book', 'books');
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
		// CRUD::column('profile_photo')->type('image');
		
		CRUD::column('name');
		CRUD::column('total_page');
		CRUD::column('published_date');
		CRUD::column('lang')->type('enum');
		CRUD::column('type')->type('enum');
		$this->crud->addColumns([
			['label'     => 'Themes', // Table column heading
			'type'      => 'select_multiple',
			'name'      => 'themes', // the method that defines the relationship in your Model
			'entity'    => 'themes', // the method that defines the relationship in your Model
			'attribute' => 'name', // foreign key attribute that is shown to user
			'model'     => 'App\Models\Theme', // foreign key model
			]
		]);
		$this->crud->addColumns([
			['label'     => 'Authors', // Table column heading
			'type'      => 'select_multiple',
			'name'      => 'authors', // the method that defines the relationship in your Model
			'entity'    => 'authors', // the method that defines the relationship in your Model
			'attribute' => 'lastname', // foreign key attribute that is shown to user
			'model'     => 'App\Models\Author', // foreign key model
			]
		]);
		$this->crud->addColumns([
			['label'     => 'Keywords', // Table column heading
			'type'      => 'select_multiple',
			'name'      => 'keywords', // the method that defines the relationship in your Model
			'entity'    => 'keywords', // the method that defines the relationship in your Model
			'attribute' => 'name', // foreign key attribute that is shown to user
			'model'     => 'App\Models\Keyword', // foreign key model
			]
		]);
		CRUD::column('commentary');

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
        CRUD::setValidation(BookRequest::class);

        //CRUD::setFromDb(); // fields
		
		CRUD::field('name');
		CRUD::field('total_page');
		CRUD::field('published_date');
		CRUD::field('lang')->type('enum');
		CRUD::field('type')->type('enum');
		// CRUD::field('book_file');
		$this->crud->addField([
            'label' => "Book's file (Max size 10MB)",
            'name' => "book_file",
            'type' => 'upload',
            'upload' => true,
            //'crop' => false,
            'disk' => 'book',
        ], 'both');
		$this->getFieldsData(FALSE);

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
	
	
	private function getFieldsData($show = FALSE) {
		$this->crud->addFields([
			[
				'name' => 'commentary',
				'label' => 'Commentary',
				//'type' => ($show ? "textarea": 'ckeditor'),
				'type' => "textarea",
			],
			[ 
				// Select2Multiple = n-n relationship (with pivot table)
				'label' => "Themes",
				'type' => ($show ? "select": 'select2_multiple'),
				'name' => 'themes', // the method that defines the relationship in your Model
				// optional
				'entity' => 'themes', // the method that defines the relationship in your Model
				'model' => "App\Models\Theme", // foreign key model
				// 'attributes' => ['firstname', 'lastname'], // foreign key attribute that is shown to user
				'attribute' => 'name', // foreign key attribute that is shown to user
				'pivot' => true, // on create & update, do you need to add/delete pivot table entries?
			],
			[ 
				// Select2Multiple = n-n relationship (with pivot table)
				'label' => "Keywords",
				'type' => ($show ? "select": 'select2_multiple'),
				'name' => 'keywords', // the method that defines the relationship in your Model
				// optional
				'entity' => 'keywords', // the method that defines the relationship in your Model
				'model' => "App\Models\Keyword", // foreign key model
				// 'attributes' => ['firstname', 'lastname'], // foreign key attribute that is shown to user
				'attribute' => 'name', // foreign key attribute that is shown to user
				'pivot' => true, // on create & update, do you need to add/delete pivot table entries?
			],
			[ 
				// Select2Multiple = n-n relationship (with pivot table)
				'label' => "Authors",
				'type' => ($show ? "select": 'select2_multiple'),
				'name' => 'authors', // the method that defines the relationship in your Model
				// optional
				'entity' => 'authors', // the method that defines the relationship in your Model
				'model' => "App\Models\Author", // foreign key model
				// 'attributes' => ['firstname', 'lastname'], // foreign key attribute that is shown to user
				'attribute' => 'lastname', // foreign key attribute that is shown to user
				'pivot' => true, // on create & update, do you need to add/delete pivot table entries?
			],
			[
				'label' => "Featured Image (300x500px EXACTLY or in Proportion)",
				'name' => "image",
				'type' => 'image',
				'crop' => false, // set to true to allow cropping, false to disable
				'aspect_ratio' => 0.5, // omit or set to 0 to allow any aspect ratio
				'height' => '1000px',
				'width' => '330px',
			]
		]);
	}
	
	protected function setupShowOperation()
    {
		$this->crud->set('show.setFromDb', false);
		
		CRUD::column('name');
		CRUD::column('total_page');
		CRUD::column('lang')->type('enum');
		CRUD::column('type')->type('enum');
		$this->crud->addColumns([
			['label'     => 'Themes', // Table column heading
			'type'      => 'select_multiple',
			'name'      => 'themes', // the method that defines the relationship in your Model
			'entity'    => 'themes', // the method that defines the relationship in your Model
			'attribute' => 'name', // foreign key attribute that is shown to user
			'model'     => 'App\Models\Theme', // foreign key model
			]
		]);
		$this->crud->addColumns([
			['label'     => 'Authors', // Table column heading
			'type'      => 'select_multiple',
			'name'      => 'authors', // the method that defines the relationship in your Model
			'entity'    => 'authors', // the method that defines the relationship in your Model
			'attribute' => 'lastname', // foreign key attribute that is shown to user
			'model'     => 'App\Models\Author', // foreign key model
			]
		]);
		$this->crud->addColumns([
			['label'     => 'Keywords', // Table column heading
			'type'      => 'select_multiple',
			'name'      => 'keywords', // the method that defines the relationship in your Model
			'entity'    => 'keywords', // the method that defines the relationship in your Model
			'attribute' => 'name', // foreign key attribute that is shown to user
			'model'     => 'App\Models\Keyword', // foreign key model
			]
		]);
		CRUD::column('commentary');	
	}

}
