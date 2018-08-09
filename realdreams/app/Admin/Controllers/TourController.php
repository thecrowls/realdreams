<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Tour;
use Encore\Admin\Controllers\ModelForm;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;

class TourController extends Controller
{
    use ModelForm;


    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('Tour');
            $content->description('description');

            $content->body($this->grid());
        });
    }

    /**
     * Edit interface.
     *
     * @param $id
     * @return Content
     */
    public function edit($id)
    {
        return Admin::content(function (Content $content) use ($id) {

            $content->header('Edit');
            $content->description('description');

            $content->body($this->form()->edit($id));
        });
    }

    /**
     * Create interface.
     *
     * @return Content
     */
    public function create()
    {
        return Admin::content(function (Content $content) {

            $content->header('Create');
            $content->description('description');

            $content->body($this->form());
        });
    }

    /**
     * Make a grid builder.
     *
     * @return \Encore\Admin\Grid
     */
    protected function grid()
    {
        return Admin::grid(Tour::class, function (Grid $grid) {

            $grid->order();
            $grid->name();
            $grid->price();
            $grid->column("number_of_days");
        });
    }

    /**
     * Make a form builder.
     *
     * @return \Encore\Admin\Form
     */
    protected function form()
    {
        return Admin::form(Tour::class, function (Form $form) {

            $form->text('order', 'ORDER');
//            $form->text('locale', 'LOCALE');
            $form->text('name', 'NAME');
            $form->text('price', 'PRICE');
            $form->text('number_of_days', 'DURATION');

        });


    }
}
