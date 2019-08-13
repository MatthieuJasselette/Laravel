<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PagesController@home');

// GET /projects (index)
route::get('/projects', 'ProjectsController@index');
// GET /projects/create (create)
route::get('/projects/create', 'ProjectsController@create');
// POST /projects (store)
route::post('/projects', 'ProjectsController@store');
// GET /projects/id (show) ; includes a 'wildcard'
route::get('/projects/{project}', 'ProjectsController@show');
// GET /projects/id/edit (edit)
route::get('/projects/{project}/edit', 'ProjectsController@edit');
// PATCH /projects/id (update)
route::patch('projects/{project}', 'ProjectsController@update');
// DELETE /projects/id (destroy)
route::delete('projects/{project}', 'ProjectsController@destroy');

/*
// Or use
route::resource('projects', 'ProjectsController');
*/

Route::patch('/tasks/{task}', 'ProjectTasksController@update');