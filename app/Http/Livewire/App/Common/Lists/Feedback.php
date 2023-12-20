<?php

namespace App\Http\Livewire\App\Common\Lists;

use App\Models\Tenant\FeedbackRating;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Rules\{Rule, RuleActions};
use PowerComponents\LivewirePowerGrid\Traits\ActionButton;
use PowerComponents\LivewirePowerGrid\{Button, Column, Exportable, Footer, Header, PowerGrid, PowerGridComponent, PowerGridEloquent};

final class Feedback extends PowerGridComponent
{
    use ActionButton;
    public $recievedFeedback = true, $user_id = 0, $deleteRecordId = 0;

    protected $listeners = ['delete'];

    /*
    |--------------------------------------------------------------------------
    |  Features Setup
    |--------------------------------------------------------------------------
    | Setup Table's general features
    |
    */
    public function setUp(): array
    {
        $this->showCheckBox();

        return [
            Exportable::make('export')
                ->striped()
                ->type(Exportable::TYPE_XLS, Exportable::TYPE_CSV),
            Header::make()->showSearchInput()->showToggleColumns(),
            Footer::make()
                ->showPerPage(config('app.per_page'))
                ->showRecordCount()->pagination('livewire.app.common.bookings.booking-nav'), //updated by Hammad to add custom pagination
        ];
    }

    /*
    |--------------------------------------------------------------------------
    |  Datasource
    |--------------------------------------------------------------------------
    | Provides data to your Table using a Model or Collection
    |
    */

    /**
     * PowerGrid datasource.
     *
     * @return Builder<\App\Models\Tenant\FeedbackRating>
     */
    public function datasource(): Builder
    {
        $query = FeedbackRating::query();
        if ($this->recievedFeedback) {
            $query->where('feedback_to', $this->user_id);
            $query->join('users', 'feedback_from', 'users.id')
                ->leftJoin('user_details', 'user_details.user_id', '=', 'users.id');
        } else {
            $query->where('feedback_from', $this->user_id);
            $query->join('users', 'feedback_to', 'users.id')
                ->leftJoin('user_details', 'user_details.user_id', '=', 'users.id');
        }

        $query->select([
            'feedback_ratings.id', 'feedback_ratings.comments',
            'feedback_ratings.rating', 'feedback_ratings.booking_service_id',
            'feedback_ratings.feedback_to', 'feedback_ratings.feedback_from',
            'users.name',
            'users.email',
            'user_details.phone',
            'user_details.user_id', 'profile_pic'
        ]);

        return $query;
    }

    /*
    |--------------------------------------------------------------------------
    |  Relationship Search
    |--------------------------------------------------------------------------
    | Configure here relationships to be used by the Search and Table Filters.
    |
    */

    /**
     * Relationship search.
     *
     * @return array<string, array<int, string>>
     */
    public function relationSearch(): array
    {
        return [];
    }

    /*
    |--------------------------------------------------------------------------
    |  Add Column
    |--------------------------------------------------------------------------
    | Make Datasource fields available to be used as columns.
    | You can pass a closure to transform/modify the data.
    |
    | ❗ IMPORTANT: When using closures, you must escape any value coming from
    |    the database using the `e()` Laravel Helper function.
    |
    */
    public function addColumns(): PowerGridEloquent
    {
        return PowerGrid::eloquent()
            ->addColumn('name')
            ->addColumn('user', function (FeedbackRating $model) {
                if (
                    $this->recievedFeedback
                ) {


                    if ($model->profile_pic == null)
                        $col = '<div class="row g-2 align-items-center"><div class="col-md-2"><img src="/tenant-resources/images/portrait/small/avatar-s-20.jpg" class="img-fluid rounded-circle" alt="provider Profile Image"></div><div class="col-md-10"><h6 class="fw-semibold"><a href="' . route('tenant.provider-profile', ['providerID' => $model->feedback_from]) . '">' . $model->name . '</a></h6><p>' . $model->email . '</p></div></div>';
                    else
                        $col = '<div class="row g-2 align-items-center"><div class="col-md-2"><img style="width:64px;height:64px;top:1rem"  src="' . $model->profile_pic . '" class="img-fluid rounded-circle" alt="provider Profile Image"></div><div class="col-md-10"><h6 class="fw-semibold"><a href="' . route('tenant.provider-profile', ['providerID' => $model->feedback_from]) . '">' . $model->name . '</a></h6><p>' . $model->email . '</p></div></div>';
                } else {
                    if ($model->profile_pic == null)
                        $col = '<div class="row g-2 align-items-center"><div class="col-md-2"><img src="/tenant-resources/images/portrait/small/avatar-s-20.jpg" class="img-fluid rounded-circle" alt="provider Profile Image"></div><div class="col-md-10"><h6 class="fw-semibold"><a href="' . route('tenant.provider-profile', ['providerID' => $model->feedback_to]) . '">' . $model->name . '</a></h6><p>' . $model->email . '</p></div></div>';
                    else
                        $col = '<div class="row g-2 align-items-center"><div class="col-md-2"><img style="width:64px;height:64px;top:1rem"  src="' . $model->profile_pic . '" class="img-fluid rounded-circle" alt="provider Profile Image"></div><div class="col-md-10"><h6 class="fw-semibold"><a href="' . route('tenant.provider-profile', ['providerID' => $model->feedback_to]) . '">' . $model->name . '</a></h6><p>' . $model->email . '</p></div></div>';
                }
                return $col;
            })

            ->addColumn('feedback', function (FeedbackRating $model) {
                return ($model->comments);
            })
            ->addColumn('ratings', function (FeedbackRating $model) {
                $data = '<div class="row mt-4"><div class="col-md-12 d-flex">';
                for ($i = 0; $i < $model->rating; $i++) {
                    $data .= '<svg aria-label="Stars" width="18" height="16" viewBox="0 0 18 16"><use xlink:href="/css/common-icons.svg#filled-star"></use></svg>';
                }

                for ($i = $model->rating; $i < 5; $i++) {

                    $data .= '<svg aria-label="Stars" width="17" height="16" viewBox="0 0 17 16"><use xlink:href="/css/common-icons.svg#star"></use></svg>';
                }
                $data .= "</div></div>";
                return $data;
            })
            ->addColumn('edit', function (FeedbackRating $model) {
                return '
                  <div class="d-flex actions">
                                    <a href="javascript:void(0)" title="Hide" aria-label="View"
                                        class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <svg aria-label="Hide" width="24" height="19" viewBox="0 0 24 19"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <use xlink:href="/css/sprite.svg#hide-icon"></use>
                                        </svg>
                                    </a>
                                    <a href="#" title="Edit" aria-label="Edit"
                                        class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <svg aria-label="Edit" class="fill" width="20" height="28"
                                            viewBox="0 0 20 28"fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <use xlink:href="/css/sprite.svg#edit-icon"></use>
                                        </svg>
                                    </a>
                                    <a href="javascript:void(0)" title="Delete" aria-label="Delete" wire:click="setDeleteRecord(' . $model->id . ')"
                                        class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <svg aria-label="Delete" class="delete-icon" width="20" height="20"
                                            viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <use xlink:href="/css/sprite.svg#delete-icon"></use>
                                        </svg>
                                    </a>
                                </div>';
            });
    }

    /*
    |--------------------------------------------------------------------------
    |  Include Columns
    |--------------------------------------------------------------------------
    | Include the columns added columns, making them visible on the Table.
    | Each column can be configured with properties, filters, actions...
    |
    */

    /**
     * PowerGrid Columns.
     *
     * @return array<int, Column>
     */
    public function columns(): array
    {
        return
            [
                Column::make('User', 'user')
                    ->field('user', 'users.name')
                    ->searchable()
                    ->sortable(),
                // ->editOnClick(),
                Column::make('Feedback', 'feedback', 'feedback_ratings.comments')
                    ->searchable()->sortable(),

                Column::make('Stars', 'ratings', 'feedback_ratings.ratings')->searchable()->sortable(),
                Column::make('Actions', 'edit')->visibleInExport(false),
            ];
    }

    /*
    |--------------------------------------------------------------------------
    | Actions Method
    |--------------------------------------------------------------------------
    | Enable the method below only if the Routes below are defined in your app.
    |
    */

    /**
     * PowerGrid FeedbackRating Action Buttons.
     *
     * @return array<int, Button>
     */

    /*
    public function actions(): array
    {
       return [
           Button::make('edit', 'Edit')
               ->class('bg-indigo-500 cursor-pointer text-white px-3 py-2.5 m-1 rounded text-sm')
               ->route('feedback-rating.edit', ['feedback-rating' => 'id']),

           Button::make('destroy', 'Delete')
               ->class('bg-red-500 cursor-pointer text-white px-3 py-2 m-1 rounded text-sm')
               ->route('feedback-rating.destroy', ['feedback-rating' => 'id'])
               ->method('delete')
        ];
    }
    */

    /*
    |--------------------------------------------------------------------------
    | Actions Rules
    |--------------------------------------------------------------------------
    | Enable the method below to configure Rules for your Table and Action Buttons.
    |
    */

    /**
     * PowerGrid FeedbackRating Action Rules.
     *
     * @return array<int, RuleActions>
     */

    /*
    public function actionRules(): array
    {
       return [

           //Hide button edit for ID 1
            Rule::button('edit')
                ->when(fn($feedback-rating) => $feedback-rating->id === 1)
                ->hide(),
        ];
    }
    */

    public function setDeleteRecord($id)
    {
        FeedbackRating::where('id', $id)->delete();
        $this->emit('showConfirmation', "Record has been deleted");
    }
}
